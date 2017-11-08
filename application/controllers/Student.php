<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function studentRecord()
	{
		$page = 'student/studentRecord';
		$this->load->view('template', compact('page'));
	}


	public function addStudent()
	{

		$page = 'student/addStudent';
		$this->load->view('template', compact('page'));
	}


	public function updateStudent()
	{
		$page = 'student/updateStudent';
		$this->load->view('template', compact('page'));
	}

}
