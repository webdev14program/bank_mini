<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'third_party/spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Dashboard extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->countJurusan();
        $isi['kelas'] = $this->Model_kelas->countKelas();
        $isi['siswa'] = $this->Model_siswa->countSiswa();
        $isi['ta'] = $this->Model_Tahun_Ajaran->HomedataTA();

        $isi['setoran'] = $this->Model_transaksi->dataHeaderSetoran();
        $isi['penarikan'] = $this->Model_transaksi->dataHeaderpenarikan();
        $isi['adm'] = $this->Model_transaksi->dataHeaderADM();
        // $isi['total'] = $this->Model_transaksi->dataHeaderTotal();

        $isi['content'] = 'Admin/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    // Start Tahun Ajaran
    public function tahun_ajaran()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['data_ta'] = $this->Model_Tahun_Ajaran->dataTA();

        $isi['content'] = 'Admin/tampilan_tahun_ajaran';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
    // End Tahun Ajaran

    // Start Jurusan
    public function jurusan()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->dataJurusan();

        $isi['content'] = 'Admin/tampilan_jurusan';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
    // End Juruusan

    // Strat Kelas
    public function kelas()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['kelas'] = $this->Model_kelas->dataKelas();

        $isi['content'] = 'Admin/kelas/tampilan_kelas';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function detail_kelas($id_ta)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_kelas->dataHeaderKelas($id_ta);
        $isi['kelas'] = $this->Model_kelas->dataDetailKelas($id_ta);

        $isi['content'] = 'Admin/kelas/tampilan_detail_kelas';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function hapus_all_kelas()
    {
        $this->db->empty_table('kelas');
        $this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Kelas Berhasil Di Hapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
        redirect('Dashboard/kelas');
    }

    public function upload_kelas()
    {
        if ($this->input->post('submit', TRUE) == 'upload') {
            $config['upload_path']      = './temp_doc/';
            $config['allowed_types']    = 'xlsx|xls';
            $config['file_name']        = 'doc' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('excel')) {
                $file   = $this->upload->data();

                $reader = ReaderEntityFactory::createXLSXReader();
                $reader->open('temp_doc/' . $file['file_name']);


                foreach ($reader->getSheetIterator() as $sheet) {
                    $numRow = 1;
                    $save   = array();
                    foreach ($sheet->getRowIterator() as $row) {

                        if ($numRow > 1) {

                            $cells = $row->getCells();

                            $data = array(
                                'id_kelas'              => $cells[0],
                                'kode'     => $cells[1],
                                'kelas'            => $cells[2],
                                'id_ta'            => $cells[3],
                                'slug_kelas' => $cells[4],
                            );
                            array_push($save, $data);
                        }
                        $numRow++;
                    }
                    $this->Model_kelas->simpan($save);
                    $reader->close();
                    unlink('temp_doc/' . $file['file_name']);
                    $this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Kelas Berhasil Di Tambah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
                    redirect('Dashboard/kelas');
                }
            } else {
                echo "Error :" . $this->upload->display_errors();
            }
        }
    }



    // End Kelas

    // Start Siswa
    public function siswa()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswa();

        $isi['content'] = 'Admin/siswa/tampilan_siswa';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function detail_siswa($id_ta)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_siswa->dataHeaderDetailSiswa($id_ta);
        $isi['siswa'] = $this->Model_siswa->dataDetailSiswa($id_ta);


        $isi['content'] = 'Admin/siswa/tampilan_detail_siswa';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function hapus_all_siswa()
    {
        $this->db->empty_table('siswa');
        $this->session->set_flashdata('pesan', '<div class="row">
        <div class="col-md mt-2">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data Siswa Berhasil Di Hapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
        </div>');
        redirect('Dashboard/siswa');
    }

    public function upload_siswa()
    {
        if ($this->input->post('submit', TRUE) == 'upload') {
            $config['upload_path']      = './temp_doc/';
            $config['allowed_types']    = 'xlsx|xls';
            $config['file_name']        = 'doc' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('excel')) {
                $file   = $this->upload->data();

                $reader = ReaderEntityFactory::createXLSXReader();
                $reader->open('temp_doc/' . $file['file_name']);


                foreach ($reader->getSheetIterator() as $sheet) {
                    $numRow = 1;
                    $save   = array();
                    foreach ($sheet->getRowIterator() as $row) {

                        if ($numRow > 1) {

                            $cells = $row->getCells();

                            $data = array(
                                'id_siswa'              => $cells[0],
                                'nis'              => $cells[1],
                                'nama_siswa'      => $cells[2],
                                'id_kelas'      => $cells[3],
                                'kode'           => $cells[4],
                                'id_ta'         => $cells[5],
                            );
                            array_push($save, $data);
                        }
                        $numRow++;
                    }
                    $this->Model_siswa->simpanSiswa($save);
                    $reader->close();
                    unlink('temp_doc/' . $file['file_name']);
                    $this->session->set_flashdata('pesan', '
                    <div class="row">
                    <div class="col-md mt-2">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Data Siswa Berhasil Di Tambah</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    </div>');
                    redirect('Dashboard/siswa');
                }
            } else {
                echo "Error :" . $this->upload->display_errors();
            }
        }
    }
    // End Siswa

    // Start Transaksi
    public function transaksi()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswaTransaksi();

        $isi['content'] = 'Admin/transaksi/tampilan_transaksi_nis';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
    public function detail_transaksi_nis($nis)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_siswa->dataHeaderTransaksiNIS($nis);
        $isi['siswa'] = $this->Model_siswa->dataTransaksiNIS($nis);


        // Tabel Transaksi
        $isi['total_tabungan'] = $this->Model_transaksi->dataTabunganNIS($nis);
        $isi['transaksi'] = $this->Model_transaksi->dataTransaksiNIS($nis);
        $isi['setoran'] = $this->Model_transaksi->dataSetoranNIS($nis);
        $isi['penarikan'] = $this->Model_transaksi->dataPenarikanNIS($nis);
        // End Tabel

        $isi['content'] = 'Admin/transaksi/tampilan_detail_transaksi_nis';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function tambah_transaksi()
    {
        $id_transaksi = rand(11111111, 99999999);
        $nis = $this->input->post('nis');
        $jenis_transaksi = $this->input->post('jenis_transaksi');
        $no_rek = $this->input->post('no_rek');
        $nominal = $this->input->post('nominal');

        // ADMIN
        $nominal_adm = $this->input->post('nominal_adm');
        // 

        $data = array(
            'id_transaksi' => $id_transaksi,
            'nis' => $nis,
            'jenis_transaksi' => $jenis_transaksi,
            'no_rek' => $no_rek,
            'nominal' => $nominal,
        );

        $data_admin = array(
            'id_transaksi_admin' => rand(11111111, 99999999),
            'id_transaksi' => $id_transaksi,
            'nominal_adm' => $nominal_adm,
        );

        $this->db->insert('transaksi', $data);
        $this->db->insert('transaksi_admin', $data_admin);
        redirect('Dashboard/detail_transaksi_nis/' . $nis);
    }
    // End Transaksi

    // Strat Laporan
    public function laporan_pertahun()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['pertahun'] = $this->Model_transaksi->laporan_pertahun();

        $isi['content'] = 'Admin/laporan/tampilan_laporan_tahun';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function laporan_perhari()
    {
        $this->Model_keamanan->getKeamanan();

        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');

        $isi['perhari'] = $this->Model_transaksi->fileterPerhari($tanggalawal, $tanggalakhir);

        $isi['content'] = 'Admin/laporan/tampilan_laporan_perhari';
        $this->load->view('templates/header');
        $this->load->view('Admin/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_laporan_perhari()
    {
        $this->Model_keamanan->getKeamanan();

        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');

        $isi['perhari'] = $this->Model_transaksi->fileterPerhari($tanggalawal, $tanggalakhir);
        $isi['header'] = $this->Model_transaksi->fileterPerhariHeader($tanggalawal, $tanggalakhir);

        $isi['setoran'] = $this->Model_transaksi->fileterPerhariHeaderSetoran($tanggalawal, $tanggalakhir);

        $isi['tanggalawal'] = $tanggalawal;
        $isi['tanggalakhir'] = $tanggalakhir;

        $this->load->view('Admin/laporan/tampilan_print_laporan_perhari', $isi);
    }
    // End Laporan

    // Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
    // End Logout
}
