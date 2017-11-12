<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('Student_model','Student');
    
        // if (!$this->group->accessAddStudent()) {
        // 	redirect('/');
        // }

    }


	public function students()
	{
		$page = 'student/students';
		$this->load->view('template', compact('page'));
	}


 
	public function deleteStudent($id='')
	{
		$id = $this->input->get('id');
		$this->Student->deleteStudent($id);
		redirect('student/students');

	}


	public function editStudentPage($id='')
	{
		$id = $this->input->get('id');
		$vars['stud'] = $this->Student->viewStudent($id);
		$this->load->view('templates/header');
		$this->load->view('student/editStudent');
		$this->load->view('templates/footer');
		}


	public function editStudent($id='')
	{
		$id = $this->input->post('id');
		$scode = $this->input->post('scode');
		$subdes = $this->input->post('subdes');
		$this->Student->editStudent($id, $scode, $subdes);
		flashInfo("Student Updated Successfully!");
		redirect('student/students');
	}
 	 	

	public function addStudentPage()
	{
		$page = 'student/addStudent';
		$this->load->view('template', compact('page'));
	}

	public function addNewStudent()
	{	
		$fname = $this->input->post('fname');
		$mname = $this->input->post('mname');
		$lname = $this->input->post('lname');
		$gender = $this->input->post('gender');
		$bdate = $this->input->post('bdate');
		$this->Student->addStudent($fname, $mname, $lname, $gender, $bdate);
		flashInfo("New Student Added Successfully!");
	    redirect('student/students');

	}

    public function ajax_list()
    {
        $list = $this->Student->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $Student) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $Student->id;
            $row[] = $Student->fname;
            $row[] = $Student->mname;
            $row[] = $Student->lname;

            $btnEdit = ' <a href="editStudentPage?id='.$Student->id.'"><button type="button" class="btn btn-default 	btn-warning btn-sm">
						  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</button></a>';

			$btnPrint = ' <a href="?id='.$Student->id.'"><button type="button" class="btn btn-default btn-success btn-sm">
						  <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
						</button></a>';

			$btnDelete = ' <a href="deleteStudent?id='.$Student->id.'"><button type="button" class="btn btn-default btn-danger btn-sm">
						  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button></a>';

			// default action
            $action = '';

            if ($this->group->accessEditStudent()) {
            	$action .= $btnEdit;
            }

            if ($this->group->accessPrintStudent()) {
            	$action .= $btnPrint;
            }

            if ($this->group->accessDeleteStudent()) {
            	$action .= $btnDelete;
            }

            $row[] = $action;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->Student->count_all(),
                        "recordsFiltered" => $this->Student->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


}
