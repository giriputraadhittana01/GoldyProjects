<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{

    public function index(){
        $this->load->view('public');
    }

    public function get(){
		$data = $this->input->post();
        $result = $this->goldy_model->getWeight($data);
		
        // var_dump($result);
        // echo "AYAM";
		json_encode($data);
    }

}