<?php

	class Users extends CI_Model{
		
		function getAllUsers(){
			
			//$this->db->where('id', 2);
			$this->db->like('f_name', 'xx');
			
			$q = $this->db->get('users');
			
			return $q->row_array();
		}
	}