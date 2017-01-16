<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class notification_controller extends CI_Controller {

	
		function __construct(){
			parent::__construct();
		}
		
		public function edit(){
			$this->load->helper('url');
			$this->load->model('notification_model');
			$data=array(
				'mobile' => $this->input->post('mobile', TRUE),
				'password' => $this->input->post('password', TRUE)
			);
			
			$query=$this->notification_model->get($data);
			if($query){
				foreach ($query->result_array() as $row)
				{
				$dat=array(
				'first_name'=> $row["first_name"],
				'second_name' =>$row["second_name"],
				'address'=>$row["address"],
				'mobile'=>$row["mobile"],
				'password'=>$row["password"],
				'email'=>$row["email"],
				'skill'=>$row["skill"]
				);
				
				$this->load->view('editform',$dat);
			}}
			else{
				echo "Enter Valid information";
			}
			
		}
			
		
		public function submitedit(){
			$this->load->helper('url');
			echo "successful";
		}
		
		public function add_signup_record(){
			$this->load->model('Notification_Model');
			
		}
   } 

?>