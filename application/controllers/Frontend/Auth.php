<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
            $this->load->view('backend/login');

    }

    public function login()
    {
        $this->load->view('frontend/login');
    }

    public function registro()
    {
        $this->load->view('frontend/registra');
    }

    public function revery()
    {
        if($this->input->post('submit_reg'))
        {
            $this->form_validation->set_rules('u_nombre', 'Nombre', 'requiered');
            $this->form_validation->set_rules('u_apellido', 'Apellido', 'requiered');
            $this->form_validation->set_rules('u_correo', 'Correo', 'requiered|trim');
            $this->form_validation->set_rules('u_pass', 'contraseña', 'requiered|trim');
        }

    }


}
