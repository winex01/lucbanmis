<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class enrolledStudents extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('enroll_model', 'enroll');
    }

    public function index($id)
    {                                                                             
        if (!$this->enroll->check($id)) {
            redirect('enrolled');
        }

        // load enrolled students on this enroll periods
        $page = 'enrolledStudent/enrolledStudents';
        $this->load->view('template', compact('page'));

    }

}
