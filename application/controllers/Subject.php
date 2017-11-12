<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Subject_model','subject');
    
        if (!$this->group->accessAddSubject()) {
			redirect('/');
		}
    }

	public function subjects()
	{
		$page = 'subject/subjects';
		$this->load->view('template', compact('page'));
	}


	public function deleteSubject($id='')
	{
		$id = $this->input->get('id');
		$this->subject->deleteSubject($id);
		flashInfo("Subject Deleted Successfully!");
		redirect('subject/subjects');

	}


	public function editSubjectPage($id='')
	{
		$id = $this->input->get('id');
		$vars['sub'] = $this->subject->viewSubject($id);
		$page = 'subject/editSubject';
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
            $row[] = '
            			<a href="editSubjectPage?id='.$subject->id.'"><button type="button" class="btn btn-default btn-warning btn-sm">
						  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</button></a>

		            	<a href="deleteSubject?id='.$subject->id.'"><button type="button" class="btn btn-default btn-danger btn-sm">
						  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button></a>
            		 ';
 
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
