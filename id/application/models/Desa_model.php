<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa_model extends CI_Model
{
    var $tabel_user     = 'user';
    var $tabel_desa     = 'id_desa';
    var $tb_provinsi    = 'prov';
    var $tb_kota        = 'kabkot';
    var $tb_kec         = 'kec';
    var $tb_desa        = 'desa';
    public function getPropinsi()
    {
        $query = $this->db->get_where(
            'id_desa',
            array(
                'lokasi_kabupatenkota'  => '0',
                'lokasi_kecamatan'      => '0',
                'lokasi_kelurahan'      => '0'
            )
        );
        // $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
        //           FROM `user_sub_menu` JOIN `user_menu`
        //           ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        //         ";
        return $this->db->query($query)->result_array();
    }
    public function ambil_provinsi()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $prov_user      = $data['user']['prov'];
        $kota           = $data['user']['kota'];
        $kec            = $data['user']['kec'];
        $kel            = $data['user']['kel'];


        $this->db->order_by('nama_prov', 'asc');
        $sql_prov = $this->db->get($this->tb_provinsi);
        if ($sql_prov->num_rows() > 0) {
            foreach ($sql_prov->result_array() as $row) {
                $result[''] = $prov_user;
                $result[$row['id_prov']] = ucwords(strtolower($row['nama_prov']));
            }
            return $result;
        }
    }
    public function ambil_kabupaten($kode_prop)
    {
        $this->db->where('id_prov', $kode_prop);
        // $this->db->where('lokasi_kecamatan', '0');
        //$this->db->where('lokasi_kelurahan', '0');
        $this->db->order_by('nama_kabkot', 'asc');
        $sql_kabupaten = $this->db->get($this->tb_kota);
        if ($sql_kabupaten->num_rows() > 0) {

            foreach ($sql_kabupaten->result_array() as $row) {
                $result[$row['id_kabkot']] = ucwords(strtolower($row['nama_kabkot']));
            }
        } else {
            $result[''] = '- Belum Ada Kabupaten -';
        }
        return $result;
    }
    public function ambil_kecamatan($kode_kab)
    {
        $this->db->where('id_kabkot', $kode_kab);
        //$this->db->where('lokasi_kelurahan', '0');
        $this->db->order_by('nama_kec', 'asc');
        $sql_kecamatan = $this->db->get($this->tb_kec);
        if ($sql_kecamatan->num_rows() > 0) {

            foreach ($sql_kecamatan->result_array() as $row) {
                $result[$row['id_kec']] = ucwords(strtolower($row['nama_kec']));
            }
        } else {
            $result[''] = '- Belum Ada Kecamatan -';
        }
        return $result;
    }
    public function ambil_kelurahan($kode_kec)
    {
        $this->db->where('kecamatanId', $kode_kec);
        $this->db->order_by('desaNama', 'asc');
        $sql_kelurahan = $this->db->get($this->tb_desa);
        if ($sql_kelurahan->num_rows() > 0) {

            foreach ($sql_kelurahan->result_array() as $row) {
                $result[$row['desaId']] = ucwords(strtolower($row['desaNama']));
            }
        } else {
            $result[''] = '- Belum Ada Kelurahan -';
        }
        return $result;
    }
    public function user()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function prov()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $prov           = $data['user']['prov'];
        $data['prov']   = $this->db->get_where(
            'id_desa',
            array(
                'lokasi_propinsi'       => $prov,
                'lokasi_kabupatenkota'  => '0',
                'lokasi_kecamatan'      => '0',
                'lokasi_kelurahan'      => '0'
            )
        )->row_array();
    }
}
