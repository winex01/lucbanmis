<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Box {

	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('user_model', 'user');
		$this->ci->load->model('subject_model', 'subject');
		$this->ci->load->model('student_model', 'student');
	}


	public function all()
	{
		return [
			$this->totalUsers(),
			$this->totalStudents(),
			$this->totalSubjects(),
		];
	}

	private function template($color, $title, $count)
	{
		return '<div class="col-lg-2 col-md-2">
				<div class="panel '.$color.'">
					<div class="panel-heading">
						<h3 class="panel-title">'.$title.'</h3>
					</div>
					<div class="panel-body">
						<h1>'.$count.'</h1>
					</div>
				</div>
			</div>'; 
	}

	private function totalUsers()
	{
		$total = $this->ci->user->counts();
		return $this->template('panel-info', 'Total Users', $total);
	}

	private function totalSubjects()
	{
		$total = $this->ci->subject->counts();
		return $this->template('panel-warning', 'Total Subjects', $total);
	}

	private function totalStudents()
	{
		$total = $this->ci->student->counts();
		return $this->template('panel-success', 'Total Students', $total);
	}





}//end class
