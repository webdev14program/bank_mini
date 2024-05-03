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
WHERE transaksi.nis='$nis';";
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
}
