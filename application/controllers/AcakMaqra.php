<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AcakMaqra extends CI_Controller
{
    public $access;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("acakmaqra_model");
        $this->load->library('form_validation');
        $email = $this->session->userdata('email');
        $this->access = $this->session->userdata('access');
        if (!isset($email)) {
            redirect(base_url('index.php/User/login'));
        }
    }

    public function index()
    {
        $nomerurut = $this->acakmaqra_model;
        $data['list_acakmaqra'] = $nomerurut->getAll();
        $this->load->view('kategori', $data);
    }
}