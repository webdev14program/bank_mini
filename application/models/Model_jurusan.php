<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jurusan extends CI_Model
{
    public function countJurusan()
    {
        $sql = "SELECT COUNT(*) AS jumlah_jurusan FROM `jurusan`;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataJurusan()
    {
        $sql = "SELECT * FROM `jurusan`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
