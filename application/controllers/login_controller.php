<?php

class login_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    private function invalidLogin($parameter) {
        echo $parameter . " invalid";
    }

    public function login() {
        $this->load->helper('url');
        $this->load->database();
        if (!$email = filter_input(INPUT_POST, "uid", FILTER_VALIDATE_EMAIL)) {
            $this->invalidLogin("email");
        } else {
            if (!$password = filter_var($_POST['pwd'], FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "^\S*(?=\S{8,})(?=\S*[\d])\S*$^")))) {
                $this->invalidLogin("password");
            } else {
                $this->checkLogin($email, $password);
            }
        }
    }

    private function checkLogin($email, $password) {
        $this->load->Model("Login_Model");
        $status = $this->Login_Model->checkLogin($email, $password);
        if ($status) {
            $usertype = $status;
            $this->loadViewFor($usertype);
        } else {
            $this->loadIndexWithError("User does not exist");
        }
    }

    private function loadIndexWithError($error) {
        $data = array($error => "true", $message => $error);
        $this->load->View("index.php", $data);
    }

    private function loadViewFor($usertype) {
        if ($usertype === '0') {
            $this->load->View("adminpanel.php");
        } else if ($usertype === '1') {
            $this->load->View("hrhome.php");
        }else if($usertype === '2'){
            $this->load->View("userhome.php");
        }
    }

}
?>

