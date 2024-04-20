<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Tahun_Ajaran extends CI_Model
{


    public function dataTA()
    {
        $sql = "SELECT * FROM `tahun_ajaran`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
