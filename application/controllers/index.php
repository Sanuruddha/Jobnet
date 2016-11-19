<?php 
   class Index extends CI_Controller {
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->load->helper('url');
			$this->load->view('index.php');
			$this->load->database();
		}
		
		public function add_signup_record(){
			$this->load->model('Notification_Model');
			
		}
   } 
?>