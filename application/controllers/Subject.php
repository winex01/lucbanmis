<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Subject_model','subject');
    
  //       if (!$this->group->accessAddSubject()) {
		// 	redirect('/');
		// }
    }

	public function subjects()
	{
		$page = 'subject/subjects';
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
		redirect('student/students');

	}

    public function ajax_list()
    {
        $list = $this->subject->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $subject) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $subject->id;
            $row[] = $subject->subcode;
            $row[] = $subject->descriptions;


            $action = btnEdit($subject->id, 'editSubjectPage').' '.confirmDelete($subject->id, 'deleteSubject');
            $row[] = $action;
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->subject->count_all(),
                        "recordsFiltered" => $this->subject->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


}
