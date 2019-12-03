<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class goldy_model extends CI_Model{

    public function getBase(){
        $this->db->query("SELECT * FROM base");
        $result = $this->db->result();

        var_dump($result);

        return $result;
    }

    public function getWeight($data){
        // var_dump($data);
        
        $smt = "SELECT * FROM `base` 
        WHERE 
        start_height <= ".$data['height']." 
        AND end_height >= ".$data['height']."
        AND gender = ".$data['gender']."
        AND body_type = ".$data['body_type'];
        // var_dump($smt);
        
        $result = $this->db->query($smt)->result();
        // $query = $this->db->get();

        // $result = $query->result();

        if($result){
            return $result;
        }else{
            return FALSE;
        }
    }

}