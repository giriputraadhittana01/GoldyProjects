<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view('login');
    }

    public function signin(){

        $user = $this->input->post();
        var_dump($user);
    }
    

}