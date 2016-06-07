<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Invitacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }
    public function index() {
            if (isset($_POST['cod'])) 
                {
                $codi = $_POST['cod'];
                    if($this->Usuarios_model->ValidarCodigo($codi))
                    {
                        $this->load->view('Create'); 
                    }
                    else
                    {
                        $this->load->view('Vista_login');
                    }  
                }       
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
