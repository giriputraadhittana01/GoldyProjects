<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class Guest extends CI_Controller{
            
    public function index(){
        $this->load->view('public');
    }

    public function get(){
        $data = $this->input->post();
        // var_dump($data);
    
        $result = $this->goldy_model->getWeight($data);
        $result = json_decode(json_encode($result), true);
        $result = $result[0];
        if($result==NULL){
            $resp='NOT FOUND';
        }else if($data['weight'] >= $result['start_weight'] && $data['weight'] <= $result['end_weight']){
            $resp='Ideal, Your Body Is Great, Keep it up !!!';
        }else if($data['weight'] < $result['start_weight']){
            $resp='Thin, Your Body Is To Skinny, Click Here To Improvement';
        }else{
            $resp='Overweight, Wow You Too Fat, You Neet To Fix Your Body Now';
        }

        echo json_encode($resp);
    }

}