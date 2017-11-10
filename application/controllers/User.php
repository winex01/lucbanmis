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
            $row[] = date('M. d Y', strtotime($user->birth_date));
            $row[] = ucfirst($user->description);
            $row[] = '
            			<button type="button" class="btn btn-default btn-warning btn-sm" data-toggle="tooltip" title="Edit">
						  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						</button>

		            	<button type="button" class="btn btn-default btn-danger btn-sm" data-toggle="tooltip" title="Delete">
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

    public function changePassword()
    {

        $requestFrom = $this->input->post('request');

        $this->form_validation->set_rules('current', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        
        $current = $this->input->post('current');
        $password = $this->input->post('password');

        // if fail validation
        if ($this->form_validation->run() == FALSE)
        {
            // create flash variable to open modal when validation fails
            $this->session->set_flashdata('modalChangePassword', true);
            $this->session->set_flashdata('error', validation_errors());
        }
        
        // check if current password input if correct
        if (md5($current) != $this->auth->password()){

            $this->session->set_flashdata('modalChangePassword', true);
            $this->session->set_flashdata('error', 'The Current Password field is Incorrect.');
        }

        // validation success
        $this->user->insert($password);
        redirect($requestFrom);

    }

}
