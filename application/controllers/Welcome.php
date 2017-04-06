<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		
		$this->load->model('Users', 'u');
		
		$users = $this->u->getAllUsers();
		
		$data['us'] = $users;
		$data['x'] = 26;
		
		//render
		$this->load->view('welcome_message', $data);
	}
}
