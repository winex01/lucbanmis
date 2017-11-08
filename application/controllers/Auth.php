<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function loginForm()
	{
		$this->load->view('auth/login');	
	}

	public function login()
	{
		// redirect user to dashboard if already login
		if (!$this->auth->notLogged()) { redirect('dashboard'); }

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if (!$this->form_validation->run() == FALSE){
			$exist = $this->auth->check($username, $password);

			if($exist){
				redirect ('dashboard', 'refresh');
			}else {
				$this->session->set_flashdata('info', 'Invalid Username / Password.');
				return $this->loginForm();
			}
		}else{
			return $this->loginForm();
		}


	}

	public function logout()
	{
		$this->auth->logout();
	}




}
