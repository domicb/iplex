<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model');
    }
    /*if (isset($_POST['cod'])) {
            $codi = $_POST['cod'];
            if($this->Usuarios_model->ValidarCodigo($codi))
            {
                $this->load->view('Create'); 
            }
        }*/
    public function index() {
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['g-recaptcha-response'])) {
            //variables para el captcha
            $clave = '6LcRJB8TAAAAAIID5XOaBeYLhLkMG7Vcp-S7sAC8';
            $ip = $_SERVER['REMOTE_ADDR'];
            $captcha = $_POST['g-recaptcha-response'];
            $final = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$clave&response=$captcha&remoteip=$ip");

            $array = json_decode($final, true);

            $pass = $_POST['password'];
            $ema = $_POST['username'];

            /*si la sesion está creada redirigimos a inicio
            if ($this->session->userdata('username')) {
                redirect(base_url());
            }*/
            //si corresponden los datos y el captcha con la variable succes le damos acceso
            if ($this->Usuarios_model->ValidarUsuario($ema, $pass) && $array['success']) 
            {//si no estaba logeado pero si esta en la base de datos le damos acceso con set_userdata             
                $this->session->set_userdata('username', $ema);
                //si es el admin lo redirigimos a su panel de control
                //if ($this->session->userdata('username') == 'serujio') 
                if ($ema == 'serujio') 
                    {
                    redirect(base_url() . 'index.php/Scaffolding/');
                    //$this->load->view('Account'); 
                    
                } 
                else 
                    {
                    redirect(base_url() . 'lol.php');
                }
            } else {//si no tiene cuenta lo mandamos de nuevo al login              
                redirect(base_url() . 'index.php/Login/');
            }
        }
        else
        {
        //$carro = $this->load->view('Vista_login','',true);
        //$this->load->view('Plantilla_carro',Array('carro'=>$carro));
        $this->load->view('Vista_login');
        
         /*
          $this->load->view('Create'); */
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
