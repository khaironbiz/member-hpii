<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Anggota Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Anggota_model', 'anggota');

        $data['anggota'] = $this->anggota->getAnggota();
        $data['provinsi'] = $this->db->get('prov')->result_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/all', $data);
        $this->load->view('templates/footer');
    }
}
