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
            			
            
            $btnState = $user->id == 1 && strtolower($user->first_name) == 'administrator' ? 'disabled' : '';
            $action = btnEdit($user->id, 'editUser').' '.confirmDelete($user->id, 'deleteUser', $btnState);
            $row[] = $action;

 
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

            redirect($requestFrom);    
        }
        
        // check if current password input if correct
        if (md5($current) != $this->auth->password()){

            $this->session->set_flashdata('modalChangePassword', true);
            $this->session->set_flashdata('error', 'The Current Password field is Incorrect.');
        }else{
            // validation success
            $this->user->changePassword($password);
        }

        redirect($requestFrom);    
    }

    public function delete()
    {
        $id      = $this->input->post('id');
        $request = $this->input->post('request');

        if (!empty($id) && !empty($request)){
            $this->user->delete($id);
            flashInfo('Deleted Successfully!');
        }

        redirect($request);

    }

    public function insert()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('mname', 'Middle Name', 'required');   
        $this->form_validation->set_rules('lname', 'Last Name', 'required');   
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required');   
        $this->form_validation->set_rules('gender', 'Gender', 'required'); #not neccessary
        $this->form_validation->set_rules('group', 'Group', 'required'); #not neccessary
        $this->form_validation->set_rules('uname', 'Username', 'required'); 

        $request = $this->input->post('request');
        $first_name = ucwords($this->input->post('fname'));
        $middle_name = ucwords($this->input->post('mname'));
        $last_name = ucwords($this->input->post('lname'));
        $birth_date = $this->input->post('birthdate');
        $gender = $this->input->post('gender');
        $username = $this->input->post('uname');
        $group_id = $this->input->post('group');
        $password = md5('password');

        if ($this->form_validation->run() == FALSE) {
            $page = 'user/addUser';
            $this->load->view('template', compact('page'));
        }else{
            $exist = $this->user->checkUsername($username);

            if ($exist) {
                $this->session->set_flashdata('info', 'The Username is already in used.');
                $page = 'user/addUser';
                $this->load->view('template', compact('page'));
            }else{
                // success
                $data = compact(
                    'first_name',
                    'middle_name',
                    'last_name',
                    'birth_date',
                    'gender',
                    'group_id',
                    'username',
                    'password'
                );

                if ($this->user->insert($data)){
                    flashInfo("New User Added Successfully!");
                    redirect('users');
                }
            }
            
        }

    }


    public function edit($id)
    {

        // check if user nga e edit, is exist
        if (!$this->user->checkUser($id)) {
            redirect('users');
        }

        $user = $this->user->select($id);
        
        $page = 'user/editUser';
        $vars = $user;
        $this->load->view('template', compact('page', 'vars'));
    }

    public function update()
    {
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('mname', 'Middle Name', 'required');   
        $this->form_validation->set_rules('lname', 'Last Name', 'required');   
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required');   
        $this->form_validation->set_rules('gender', 'Gender', 'required'); #not neccessary

        $request = $this->input->post('request');
        $id = $this->input->post('id');

        $first_name = ucwords($this->input->post('fname'));
        $middle_name = ucwords($this->input->post('mname'));
        $last_name = ucwords($this->input->post('lname'));
        $birth_date = $this->input->post('birthdate');
        $gender = $this->input->post('gender');
        $username = $this->input->post('uname');
        $group_id = $this->input->post('group');


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('editUser/'.$id);
        }


        $data = compact(
            'first_name',
            'middle_name',
            'last_name',
            'birth_date',
            'gender',
            'group_id',
            'username'
        );
        //update and save
        if ($this->user->update($id, $data)) {
            flashInfo($first_name .' '. $last_name .' Account updated Successfully!');
            redirect('users');
        } 

    }


}
