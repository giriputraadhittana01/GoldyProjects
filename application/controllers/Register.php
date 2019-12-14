<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

    public function index(){
        $this->load->view('header');
        $this->load->view('templateLoginRegister');
        $this->load->view('register');
    }

    public function register_user(){
        $input = $this->input->post();

        $data = array(
            'email' => $input['email'],
            'username' => $input['username'],
            'pass' => $input['password'],
            'gender' => $input['gender']
        );

        $result = $this->goldy_model->insert_data('user', $data);

        if($result > 0){
            redirect('Login');
            // echo 'Berhasil';
        }else{
            redirect('Register');
            // echo 'Gagal';
        }
    }

}