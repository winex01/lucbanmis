<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enroll extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Enroll_model','enroll_m');
        $this->load->model('Student_model','student');
    
  //       if (!$this->group->accessAddSubject()) {
		// 	redirect('/');
		// }
    }

	public function enrolled()
	{
		$page = 'enroll/enrolls';
		$this->load->view('template', compact('page'));
	}


    public function deleteSubject()
    {
        $id      = $this->input->post('id');
        $request = $this->input->post('request');

        if (!empty($id) && !empty($request)){
            $this->subject->deleteSubject($id);
		    flashInfo("Subject Deleted Successfully!");
        }

        redirect($request);

    }


	public function editSubjectPage($id='')
	{

		if (!$this->subject->checkUser($id)) {
        redirect('subjects');
        }

	 
		$sub = $this->subject->viewSubject($id);

		$page = 'subject/editSubject';
		$vars = $sub;
		$this->load->view('template', compact('page', 'vars'));
 	}


	public function editSubject($id='')
	{
		$id = $this->input->post('id');
		$scode = $this->input->post('scode');
		$subdes = $this->input->post('subdes');
		$this->subject->editSubject($id, $scode, $subdes);
		flashInfo("Subject Updated Successfully!");
		redirect('subject/subjects');
	}
 	 	

	public function addSubjectPage()
	{
		$page = 'subject/addSubject';
		$this->load->view('template', compact('page'));
	}

	public function addNewSubject()
	{
		$scode = $this->input->post('scode');
		$subdes = $this->input->post('subdes');
		$status = true;
		$this->subject->addSubject($scode, $subdes, $status);
		flashInfo("New Subject Added Successfully!");
		redirect('subject/subjects');

	}

    public function ajax_list()
    {
        $list = $this->enroll_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $enroll_m) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $enroll_m->id;
            $row[] = $enroll_m->school_year;
            $row[] = $enroll_m->semester;


            $action = btnViewEnrolled($enroll_m->id, 'viewEnrolled').' '.btnEdit($enroll_m->id, 'editenrollPage');
            $row[] = $action;
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->enroll_m->count_all(),
                        "recordsFiltered" => $this->enroll_m->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function enrolledStudents($id)
    {                                                                             
        if (!$this->enroll_m->check($id)) {
            redirect('enrolled');
        }

        // load enrolled students on this enroll periods
        $page = 'enrolledStudent/enrolledStudents';
        $this->load->view('template', compact('page'));

    }

}
