<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function subjects()
	{
		$page = 'subject/subject';
		$this->load->view('template', compact('page'));
	}


	public function addSubject()
	{
		$page = 'subject/addSubject';
		$this->load->view('template', compact('page'));
	}


	public function updateSubject()
	{
		$page = 'subject/updateSubject';
		$this->load->view('template', compact('page'));
	}

}
