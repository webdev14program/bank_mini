<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function countSiswa()
    {
        $sql = "SELECT COUNT(*) AS jumlah_siswa FROM `siswa`
INNER JOIN tahun_ajaran
ON siswa.id_ta=tahun_ajaran.id_ta
WHERE tahun_ajaran.status='AKTIF';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataSiswa()
    {
        $sql = "SELECT tahun_ajaran.id_ta,tahun_ajaran.tahun_ajaran,COUNT(*) AS jumlah_siswa FROM `siswa`
INNER JOIN tahun_ajaran
ON siswa.id_ta=tahun_ajaran.id_ta
GROUP BY tahun_ajaran.id_ta;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataHeaderDetailSiswa($id_ta)
    {
        $sql = "SELECT * FROM `tahun_ajaran`
WHERE tahun_ajaran.id_ta='$id_ta';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataDetailSiswa($id_ta)
    {
        $sql = "SELECT siswa.id_siswa,siswa.nis,siswa.nama_siswa,kelas.kelas,jurusan.jurusan FROM `siswa`
INNER JOIN tahun_ajaran
ON siswa.id_ta=tahun_ajaran.id_ta
INNER JOIN jurusan
ON siswa.kode=jurusan.kode
INNER JOIN kelas
ON siswa.id_kelas=kelas.slug_kelas
WHERE tahun_ajaran.id_ta='$id_ta';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function simpanSiswa($data = array())
    {
        $jumlah = count($data);

        if ($jumlah > 0) {
            $this->db->insert_batch('siswa', $data);
        }
    }
}
