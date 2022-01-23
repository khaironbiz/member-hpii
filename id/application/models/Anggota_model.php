<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{
    public function getAnggota()
    {
        $query = "SELECT `user`.*, `prov`.`nama_prov`
                  FROM `user` JOIN `prov`
                  ON `user`.`dpw` = `prov`.`id_prov`
                ";
        return $this->db->query($query)->result_array();
    }
}
