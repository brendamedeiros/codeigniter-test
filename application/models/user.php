<?php

class User extends CI_Model
{
	
	function create_user($data){
		$this->db->insert('users',$data);
	}
	function login($username,$password,$type){
		$where=array(
			'username'=>$username,
			'password'=>$password,
			'user_type'=>$type
			);
		//$this->db->select()->from('users')->where(array('username'=>$username, 'password'=>$password));
		$this->db->select()->from('users')->where($where);
		$query=$this->db->get();
		return $query->first_row('array');
	}
	function register_user($data){
		$this->db->insert('users',$data);
		return $this->db->insert_db();
	}
	function get_emails(){
		$this->db->select('email')->from('users');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>