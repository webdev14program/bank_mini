<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_pj extends CI_Controller
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

        $isi['content'] = 'Admin_pj/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('Admin_pj/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function transaksi()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['siswa'] = $this->Model_siswa->dataSiswaTransaksi();

        $isi['content'] = 'Admin_pj/transaksi/tampilan_transaksi_nis';
        $this->load->view('templates/header');
        $this->load->view('Admin_pj/tampilan_dashboard', $isi);
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

        $isi['content'] = 'Admin_pj/transaksi/tampilan_detail_transaksi_nis';
        $this->load->view('templates/header');
        $this->load->view('Admin_pj/tampilan_dashboard', $isi);
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
        redirect('Dashboard_pj/detail_transaksi_nis/' . $nis);
    }

    public function laporan_perhari()
    {
        $this->Model_keamanan->getKeamanan();

        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');

        $isi['perhari'] = $this->Model_transaksi->fileterPerhari($tanggalawal, $tanggalakhir);

        $isi['content'] = 'Admin_pj/laporan/tampilan_laporan_perhari';
        $this->load->view('templates/header');
        $this->load->view('Admin_pj/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function print_laporan_perhari()
    {
        $this->Model_keamanan->getKeamanan();

        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');

        $isi['perhari'] = $this->Model_transaksi->fileterPerhari($tanggalawal, $tanggalakhir);
        $isi['header'] = $this->Model_transaksi->fileterPerhariHeader($tanggalawal, $tanggalakhir);

        $isi['total_pj'] = $this->Model_transaksi->perhariPJ($tanggalawal, $tanggalakhir);

        $isi['tanggalawal'] = $tanggalawal;
        $isi['tanggalakhir'] = $tanggalakhir;

        $this->load->view('Admin_pj/laporan/tampilan_print_laporan_perhari', $isi);
    }

    public function setting_teller()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['teller'] = $this->Model_teller->dataTeller();

        $isi['content'] = 'Admin_pj/setting/setting_teller';
        $this->load->view('templates/header');
        $this->load->view('Admin_pj/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }

    public function generate_password_teller()
    {
        $id = $this->input->post('id');
        $username = 'AKL' . rand(1111, 9999);
        $password = rand(111111, 999999);
        $pass = md5($password);
        $show_pass = $password;
        $level = $this->input->post('level');


        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $pass,
            'show_pass' => $show_pass,
            'level' => $level,
        );

        $this->db->where('id', $id);
        $this->db->update('auth', $data);
        redirect('Dashboard_pj/setting_teller');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
