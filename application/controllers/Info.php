<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

	public function home()
	{
		$page = 'info/home';
		$this->load->view('template', compact('page'));
	}

	public function about()
	{
		$page = 'info/about';
		$this->load->view('template', compact('page'));
	}

	public function contact()
	{
		$page = 'info/contact';
		$this->load->view('template', compact('page'));
	}


}
