<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_kepala extends CI_Controller
{


    public function index()
    {
        $this->Model_keamanan->getKeamanan();
        $isi['jurusan'] = $this->Model_jurusan->countJurusan();
        $isi['kelas'] = $this->Model_kelas->countKelas();
        $isi['siswa'] = $this->Model_siswa->countSiswa();

        $isi['setoran'] = $this->Model_transaksi->dataHeaderSetoran();
        $isi['penarikan'] = $this->Model_transaksi->dataHeaderpenarikan();
        $isi['adm'] = $this->Model_transaksi->dataHeaderADM();
        $isi['total'] = $this->Model_transaksi->dataHeaderTotal();

        $isi['content'] = 'kepala/tampilan_home';
        $this->load->view('templates/header');
        $this->load->view('kepala/tampilan_dashboard', $isi);
        $this->load->view('templates/footer');
    }
}
