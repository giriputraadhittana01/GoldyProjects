<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $this->load->view('header');
        $this->load->view('templateLoginRegister');
        $this->load->view('login');
    }

    public function signin(){

        $user = $this->input->post();

        $result = $this->goldy_model->getUser($user);
        $result = json_decode(json_encode($result), true);
        $result = $result[0];

        if($result){
            $userdata = array(
                'logged' => true,
                'username' => $result['username'],
                'email' => $result['email'],
            );

            $this->session->set_userdata($userdata);
        }else{
            redirect('login');
        }

    }

    public function login_check(){
        $user = $this->input->post();

        $result = $this->goldy_model->getUser($user);

        if($result){
            echo TRUE;
        }else{
            echo FALSE;
        }
    }
    

}