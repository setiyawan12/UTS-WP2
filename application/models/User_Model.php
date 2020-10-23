<?php
class User_Model extends CI_Model 
{	
	function displayrecords()
	{
	$data=$this->db->get("user");
	return $data;
	}
}