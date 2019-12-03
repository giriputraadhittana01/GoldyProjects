<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller{

    public function index(){
        $this->load->view('public');
    }

    public function get(){
		$data = $this->input->post();
        $result = $this->goldy_model->getWeight($data);
        $result = json_decode(json_encode($result), true);
        $result = $result[0];
        // var_dump($result);


        if($data['weight'] >= $result['start_weight'] && $data['weight'] <= $result['end_weight']){
            echo 'Ideal';
        }else if($data['weight'] < $result['start_weight']){
            echo 'Thin';
        }else{
            echo 'Fat';
        }
		
		// json_encode($data);
    }

}