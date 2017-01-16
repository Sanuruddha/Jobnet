<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit_eontroller extends CI_Controller {

	
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->load->helper('url');
			$this->load->view('changeDetails');
			$this->load->database();
		}
   } 

?>