<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_Model
{
    public function countKelas()
    {
        $sql = "SELECT tahun_ajaran.id_ta,tahun_ajaran.tahun_ajaran,COUNT(*) as jumlah_kelas FROM `kelas`
INNER JOIN tahun_ajaran
ON kelas.id_ta=tahun_ajaran.id_ta
WHERE tahun_ajaran.status='AKTIF'
GROUP BY kelas.id_ta;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function dataKelas()
    {
        $sql = "SELECT tahun_ajaran.id_ta,tahun_ajaran.tahun_ajaran,COUNT(*) as jumlah_kelas FROM `kelas`
INNER JOIN tahun_ajaran
ON kelas.id_ta=tahun_ajaran.id_ta
GROUP BY kelas.id_ta;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataHeaderKelas($id_ta)
    {
        $sql = "SELECT tahun_ajaran.id_ta,tahun_ajaran.tahun_ajaran FROM `kelas`
INNER JOIN tahun_ajaran
ON kelas.id_ta=tahun_ajaran.id_ta
WHERE kelas.id_ta='$id_ta'
GROUP BY kelas.id_ta;";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataDetailKelas($id_ta)
    {
        $sql = "SELECT tahun_ajaran.id_ta,kelas.id_kelas,kelas.kelas,jurusan.jurusan,tahun_ajaran.tahun_ajaran FROM `kelas`
INNER JOIN tahun_ajaran
ON kelas.id_ta=tahun_ajaran.id_ta
INNER JOIN jurusan
ON kelas.kode=jurusan.kode
WHERE kelas.id_ta='$id_ta';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function simpan($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('kelas', $data);
        }
    }
}
