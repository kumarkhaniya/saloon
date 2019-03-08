<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/login');
		
			 //redirect("admin_controller/main","refresh");
		
	}

	public function main()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/main');
		$this->load->view('admin/dashboard');
		//$this->load->view('admin/footer');
		
	}
	
	
}
