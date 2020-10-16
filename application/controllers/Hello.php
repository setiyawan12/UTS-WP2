<?php
class Hello extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
    $this->load->model('Hello_Model');
	}
	public function index()
	{
	$result['data']=$this->Hello_Model->displayrecords();
    $this->load->view('hasil',$result);
	}
}
?>