<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model','user');
    }

	public function users()
	{
		$page = 'user/users';
		$this->load->view('template', compact('page'));
	}


	public function addUser()
	{
		$page = 'user/addUser';
		$this->load->view('template', compact('page'));
	}

    public function ajax_list()
    {
        $list = $this->user->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $user) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $user->first_name;
            $row[] = $user->middle_name;
            $row[] = $user->last_name;
            $row[] = $user->gender;
            $row[] = $user->created_at;
            $row[] = ucfirst($user->description);
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
                        "recordsTotal" => $this->user->count_all(),
                        "recordsFiltered" => $this->user->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }


}
