<?php

class Login_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function checkLogin($email,$password){
        $query = $this->db->get_where('user', array('email' => $email,'password'=>$password));
        $result=$query->result();
        if($result){
            return $result[0]->user_type;
        }
        else{
            return false;
        }
    }

}
?>

