<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function users()
	{
		$page = 'user/users';
		$this->load->view('template', compact('page'));
	}


	public function addUser()
	{
		$page = 'user/addUser';
		$this->load->view('template', compact('page'));
	}


	public function updateUser()
	{
		$page = 'user/updateUser';
		$this->load->view('template', compact('page'));
	}

}
