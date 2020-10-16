<?php
class Hello_Model extends CI_Model 
{
	// function saverecords($name,$email,$mobile)
	// {
	// $query="insert into users values('','$name','$email','$mobile')";
	// $this->db->query($query);
	// }
	
	function displayrecords()
	{
	$query=$this->db->query("select * from user");
	return $query->result();
	}
}