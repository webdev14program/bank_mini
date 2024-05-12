<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_teller extends CI_Model
{


    public function dataTeller()
    {
        $sql = "SELECT * FROM `auth`
WHERE auth.level LIKE '%teller%';";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
