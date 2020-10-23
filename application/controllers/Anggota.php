<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('User_Model');
	}
	public function index()
	{
		$result['data'] = $this->User_Model->displayrecords()->result();
		
		// var_dump($result);
		// die();

		$this->load->view('header');
		$this->load->view('anggota',$result);
		$this->load->view('sidenav');

	}
	

}
