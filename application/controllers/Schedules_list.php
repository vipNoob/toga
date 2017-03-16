<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedules_list extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		
	}

	public function index()
	{
		$this->load->view('head/head');
		$this->load->view('sidebar/sidebar');
		$this->load->view('head/header');
		$this->load->view('body/schedules');
		$this->load->view('foot/foot');
	}
}