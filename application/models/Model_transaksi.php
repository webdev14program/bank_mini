<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_transaksi extends CI_Model
{

    public function dataHeaderSetoran()
    {
        $sql = "SELECT SUM(transaksi.nominal) AS jumlah_setoran FROM `transaksi`
WHERE transaksi.jenis_transaksi='setoran';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataHeaderpenarikan()
    {
        $sql = "SELECT SUM(transaksi.nominal) AS jumlah_penarikan FROM `transaksi`
WHERE transaksi.jenis_transaksi='penarikan';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataHeaderADM()
    {
        $sql = "SELECT SUM(transaksi_admin.nominal_adm) AS jumlah_adm FROM `transaksi_admin`;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataHeaderTotal()
    {
        $sql = "SELECT (SELECT SUM(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='SETORAN') - (SELECT SUM(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='Penarikan') + (SELECT SUM(transaksi_admin.nominal_adm) FROM `transaksi_admin`) AS total_nominal_bank_mini FROM `transaksi`
GROUP BY transaksi.nis;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function dataTransaksiNIS($nis)
    {
        $sql = "SELECT * FROM `transaksi`
WHERE transaksi.nis='$nis'
LIMIT 8;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSetoranNIS($nis)
    {
        $sql = "SELECT SUM(nominal) AS jumlah_setoran FROM `transaksi`
WHERE transaksi.nis='$nis' AND transaksi.jenis_transaksi='setoran'
GROUP BY transaksi.nis;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataPenarikanNIS($nis)
    {
        $sql = "SELECT SUM(nominal) AS jumlah_setoran FROM `transaksi`
WHERE transaksi.nis='$nis' AND transaksi.jenis_transaksi='penarikan'
GROUP BY transaksi.nis;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataTabunganNIS($nis)
    {
        $sql = "SELECT (SELECT sum(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='setoran')  - (SELECT SUM(transaksi_admin.nominal_adm) FROM `transaksi_admin`) AS total_tabungan_siswa_nis FROM `transaksi`
WHERE transaksi.nis='238776'
GROUP BY transaksi.nis;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function laporan_pertahun()
    {
        $sql = "SELECT YEAR(transaksi.timestamp) AS tahun,(SELECT SUM(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='setoran') AS setoran,(SELECT SUM(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='penarikan') AS penarikan,(SELECT SUM(transaksi_admin.nominal_adm) FROM `transaksi_admin`) AS admin FROM `transaksi`
GROUP BY YEAR(transaksi.timestamp);";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function fileterPerhari($tanggalawal, $tanggalakhir)
    {
        $sql = "SELECT siswa.nis,siswa.nama_siswa,kelas.kelas,transaksi.jenis_transaksi,transaksi.nominal,transaksi_admin.nominal_adm,transaksi.timestamp FROM `transaksi`
INNER JOIN siswa
ON transaksi.nis=siswa.nis
INNER JOIN kelas
ON siswa.id_kelas=kelas.slug_kelas
INNER JOIN transaksi_admin
ON transaksi.id_transaksi=transaksi_admin.id_transaksi
WHERE transaksi.timestamp BETWEEN '$tanggalawal' AND '$tanggalakhir'
ORDER BY kelas.kelas,siswa.nama_siswa;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function fileterPerhariHeader($tanggalawal, $tanggalakhir)
    {
        $sql = "SELECT (SELECT sum(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='setoran') AS setoran,(SELECT sum(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='penarikan') AS penarikan, SUM(transaksi_admin.nominal_adm) AS nominal_admin,transaksi.timestamp FROM `transaksi`
INNER JOIN siswa
ON transaksi.nis=siswa.nis
INNER JOIN kelas
ON siswa.id_kelas=kelas.slug_kelas
INNER JOIN transaksi_admin
ON transaksi.id_transaksi=transaksi_admin.id_transaksi
WHERE transaksi.timestamp BETWEEN '$tanggalawal' AND '$tanggalakhir';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function fileterPerhariHeader2($tanggalawal, $tanggalakhir)
    {
        $sql = "SELECT (SELECT sum(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='setoran') AS setoran,(SELECT sum(transaksi.nominal) FROM `transaksi`
WHERE transaksi.jenis_transaksi='penarikan') AS penarikan, SUM(transaksi_admin.nominal_adm) AS nominal_admin,transaksi.timestamp FROM `transaksi`
INNER JOIN siswa
ON transaksi.nis=siswa.nis
INNER JOIN kelas
ON siswa.id_kelas=kelas.slug_kelas
INNER JOIN transaksi_admin
ON transaksi.id_transaksi=transaksi_admin.id_transaksi
WHERE transaksi.timestamp BETWEEN '$tanggalawal' AND '$tanggalakhir';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }
}
