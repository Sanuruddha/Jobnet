<?php

class Notification_Model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($data) {

        $query = $this->db->query("SELECT * FROM notification_users WHERE mobile={$data["mobile"]} AND password={$data["password"]};");

        return $query;
    }

    public function delete($roll_no) {
        if ($this->db->delete("notification_users", "roll_no = " . $roll_no)) {
            return true;
        }
    }

    public function update($data, $old_roll_no) {

        $this->db->set($data);
        $this->db->where("roll_no", $old_roll_no);
        $this->db->update("notification", $data);
    }

    public function addRecord($mob, $pwd, $fname, $sname, $adr, $cat) {
        $this->load->database();
        
        
            
        $data = array(
            'fname' => $fname,
            'sname' =>  $sname,
            'password' => $pwd,
            'mobile'=>$mob,
            'address'=>$adr,
            'category'=> $cat
        );
        
        $this->db->insert('notification_user', $data);
        
        echo "here";
        exit;

        $this->load->database();
        $query = $this->db->prepare('INSERT INTO notification_user (fname,sname,password,mobile,address,category) VALUES(?,?,?,?,?,?})');
        
        $query->execute(array($fname, $sname, $pwd, $mob, $adr, $cat));

        return $this->db->affected_rows() > 0;
    }

}

?> 