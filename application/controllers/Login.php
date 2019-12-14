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
        $resp="";
        if($result){
            $userdata = array(
                'logged' => true,
                'username' => $result['username'],
                'email' => $result['email'],
            );
            $resp=0;
            $this->session->set_userdata($userdata);
        }else{
            $resp=1;
        }
        echo json_encode($resp);
    }
    

}