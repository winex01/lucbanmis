<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Subject_model','subject');
    }

	public function subjects()
	{
		$page = 'subject/subjects';
		$this->load->view('template', compact('page'));
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
		$this->subject->addSubject($scode, $subdes);
		flashInfo("New Subject Added Successfully!");
		$page = 'subject/subjects';
		$this->load->view('template', compact('page'));

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
            $row[] = $subject->subcode;
            $row[] = $subject->descriptions;
            $row[] = '
            			<button type="button" class="btn btn-default btn-warning btn-sm">
						  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</button>

		            	<button type="button" class="btn btn-default btn-danger btn-sm">
						  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
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
