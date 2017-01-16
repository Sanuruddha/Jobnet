<?php 
   class notification_model extends CI_Model {
	
      function __construct() { 
         parent::__construct(); 
		 $this->load->database();
      } 
   
      public function get($data) { 
		
		$query = $this->db->query("SELECT * FROM notification_users WHERE mobile={$data["mobile"]} AND password={$data["password"]};");
	
        return $query;
        
      } 
   
      public function delete($roll_no) { 
         if ($this->db->delete("notification_users", "roll_no = ".$roll_no)) { 
            return true; 
         } 
      } 
   
      public function update($data,$old_roll_no) { 
         $this->db->set($data); 
         $this->db->where("roll_no", $old_roll_no); 
         $this->db->update("notification", $data); 
      } 
   } 
?> 