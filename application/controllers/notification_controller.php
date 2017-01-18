<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class notification_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function edit() {
        $this->load->model('notification_model');
        $data = array(
            'mobile' => $this->input->post('mobile', TRUE),
            'password' => $this->input->post('password', TRUE)
        );

        $query = $this->notification_model->get($data);
        if ($query) {
            $row = $query->row_array();
            $dat = array(
                'first_name' => $row["fname"],
                'second_name' => $row["sname"],
                'mobile' => $row["mobile"],
                'password' => $row["password"],
                'email' => $row["email"],
                'category' => $row["category"]
            );

            $this->load->view('editform', $dat);
        } else {
            echo "Enter Valid information";
        }
    }

    public function submitedit() {
        
      $this->addNew();
        
    }

    public function addNew() {
        $this->load->model('Notification_Model');
        $pwd = $this->input->post('pwd', TRUE);
        $repwd = $this->input->post('repwd', TRUE);
        $fname = $this->input->post('fname', TRUE);
        $sname = $this->input->post('sname', TRUE);
        $email = $this->input->post('email', TRUE);
        $mob = $this->input->post('mob', TRUE);
        $cat = $this->input->post('cat', TRUE);
        if ($this->validateDetails($mob, $pwd, $fname, $sname, $email, $repwd)) {

            $status = $this->Notification_Model->addRecord($mob, $pwd, $fname, $sname, $email, $cat);

            if ($status) {
                echo "successful";
            } else {
                echo "Oops something went wrong!";
            }
        }
        return true;
    }

    private function validateDetails($mob, $pwd, $fname, $sname, $email, $repwd) {

        $status2 = preg_match("/^([A-Za-z])+$/", $fname);
        if (!$status2) {
            echo "Invalid first name. Name must not be empty and must contains only letters";
            exit;
        }
        $status3 = preg_match("/^([A-Za-z])+$/", $sname);
        if (!$status3) {
            echo "Invalid second name. Name must not be empty and must contains only letters.";
            exit;
        }

        $status6 = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$status6) {
            echo "Invalid email address.";
            exit;
        }

        $status4 = (strlen($pwd) > 7);
        if (!$status4) {
            echo "Invalid password. Password must contains atleast 8 characters.";
            exit;
        }
        $status5 = ($pwd === $repwd);
        if (!$status5) {
            echo "The retype password does not match the password";
            exit;
        }
        $status1 = preg_match("/^(07)[0-9]{8}$/", $mob);
        if (!$status1) {
            echo "Invalid mobile number. Mobile number must be a 10 digit number starts with 07";
            exit;
        }

        return true;
    }

}

?>