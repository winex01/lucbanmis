<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SchoolYear extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('SchoolYear_model','schoolYear');
	}

	public function schoolyears()
	{
		$page = 'schoolyear/schoolyears';
		$this->load->view('template', compact('page'));
	}

	public function ajax_list()
    {
        $list = $this->schoolYear->get_datatables();
        $data = array();
        $no = $_POST['start'];

        foreach ($list as $schoolYear) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $schoolYear->school_year;
            $row[] = $schoolYear->description;
	            			
            $action = btnEdit($schoolYear->id, 'editUser').' '.confirmDelete($schoolYear->id, 'deleteSchoolYear');
            $row[] = $action;
            
            $row[] = $action;

 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->schoolYear->count_all(),
                        "recordsFiltered" => $this->schoolYear->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function delete()
    {
        $id      = $this->input->post('id');
        $request = $this->input->post('request');

        if (!empty($id) && !empty($request)){
            $this->schoolYear->delete($id);
            flashInfo('Deleted Successfully!');
        }

        redirect($request);

    }

    public function tests()
    {
        echo 'test';
    }

}
