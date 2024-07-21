<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_teller extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->countJurusan();
        $isi['kelas'] = $this->Model_kelas->countKelas();
        $isi['siswa'] = $this->Model_siswa->countSiswa();
        $isi['ta'] = $this->Model_Tahun_Ajaran->HomedataTA();



        $isi['content'] = 'Admin_teller/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('Admin_teller/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function transaksi()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswaTransaksi();

        $isi['content'] = 'Admin_teller/transaksi/tampilan_transaksi_nis';
        $this->load->view('templates/header');
        $this->load->view('Admin_teller/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
    public function detail_transaksi_nis($nis)
    {
        $this->Model_keamanan->getKeamanan();
        $isi['header'] = $this->Model_siswa->dataHeaderTransaksiNIS($nis);
        $isi['siswa'] = $this->Model_siswa->dataTransaksiNIS($nis);


        // Tabel Transaksi
        // $isi['total_tabungan'] = $this->Model_transaksi->dataTabunganNIS($nis);
        $isi['transaksi'] = $this->Model_transaksi->dataTransaksiNIS($nis);
        $isi['setoran'] = $this->Model_transaksi->dataSetoranNIS($nis);
        $isi['penarikan'] = $this->Model_transaksi->dataPenarikanNIS($nis);
        // End Tabel

        $isi['content'] = 'Admin_teller/transaksi/tampilan_detail_transaksi_nis';
        $this->load->view('templates/header');
        $this->load->view('Admin_teller/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function tambah_transaksi()
    {
        $id_transaksi = rand(11111111, 99999999);
        $id_siswa = $this->input->post('id_siswa');
        $nis = $this->input->post('nis');
        $jenis_transaksi = $this->input->post('jenis_transaksi');
        $no_rek = $this->input->post('no_rek');
        $nominal = $this->input->post('nominal');

        // ADMIN
        $nominal_adm = $this->input->post('nominal_adm');
        // 

        $data = array(
            'id_transaksi' => $id_transaksi,
            'id_siswa' => $id_siswa,
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
        redirect('Dashboard_teller/detail_transaksi_nis/' . $nis);
    }

    public function laporan_perhari()
    {
        $this->Model_keamanan->getKeamanan();

        $tanggalawal = $this->input->get('tanggalawal');

        $isi['perhari'] = $this->Model_transaksi->fileterPerhariTeller($tanggalawal);

        $isi['content'] = 'Admin_teller/laporan/tampilan_laporan_perhari';
        $this->load->view('templates/header');
        $this->load->view('Admin_teller/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_laporan_perhari()
    {
        $this->Model_keamanan->getKeamanan();

        $tanggalawal = $this->input->get('tanggalawal');


        $isi['perhari'] = $this->Model_transaksi->fileterPerhariTeller($tanggalawal);
        $isi['header'] = $this->Model_transaksi->fileterPerhariHeaderTeller($tanggalawal);

        $isi['teller'] = $this->Model_transaksi->perhariTeller($tanggalawal);


        // $isi['setoran'] = $this->Model_transaksi->fileterPerhariHeaderSetoran($tanggalawal, $tanggalakhir);

        $isi['tanggalawal'] = $tanggalawal;

        $this->load->view('Admin_teller/laporan/tampilan_print_laporan_perhari', $isi);
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
