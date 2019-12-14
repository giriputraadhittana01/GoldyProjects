<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Guest extends CI_Controller{
            
    public function index(){
        $this->load->view('header');
        $this->load->view('public');
    }       

    public function get(){
        $data = $this->input->post();
        // var_dump($data);
    
        $result = $this->goldy_model->getWeight($data);
        $result = json_decode(json_encode($result), true);
        $result = $result[0];
        if($data['weight'] >= $result['start_weight'] && $data['weight'] <= $result['end_weight']){
            $resp=2;
        }else if($data['weight'] < $result['start_weight']){
            $resp=1;
        }else{
            $resp=3;
        }

        echo json_encode($resp);
    }

}