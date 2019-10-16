<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->model('Usuarios_model');
    }


    public function login()
    {
        $this->form_validation->set_rules('u_nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('u_pass', 'Password', 'required|min_length[5]');
        if($this->form_validation->run() == TRUE){
       

            

            $u_nombre = $_POST['nombre'];
            $u_pass = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('usuarios1');
            $this->db->where(array('u_nombre' => $nombre, 'u_pass' => $password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->email){
      
                $this->session->set_flashdata("success", "you are logged in");

                $_SESSION['user_logged'] = TRUE;
                $_SESSION['u_nombre'] = $nombre;

                redirect("frontend/user/profile", "refresh");

            }else{
                $this->session->set_flashdata("error", " tu cuenta no esta en la base");
                redirect("frontend/auth/login");
            }
        }
        
        $this->load->view('frontend/login');
    }

    public function registro()
    {
        if(isset($_POST['registra'])){
            $this->form_validation->set_rules('nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            if($this->form_validation->run() == TRUE){
                echo 'formxfdtjhrdxhjvalidation';

                $data = array(
                    'u_nombre' => $_POST['nombre'],
                    'u_apellido' => $_POST['apellido'],
                    'u_correo' => $_POST['email'],
                    'u_pass' => md5($_POST['password'])
                );
                $this->db->insert('usuarios1', $data);

                $this->session->set_flashdata("success","tu cuenta esta registyrada");
                redirect("frontend/auth/login", "refresh");
            }
        }
        $this->load->view('frontend/registra');
    }

    

    


}
