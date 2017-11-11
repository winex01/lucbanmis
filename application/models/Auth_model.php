<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function check($username, $password)
    {

    	$user = $this->db->query("
    			SELECT users.id,
                       users.password, 
    				   users.first_name,
    				   users.middle_name,
    				   users.last_name,
    				   groups.description 
    			FROM users
    			INNER JOIN groups
    			ON users.group_id = groups.id 
    			WHERE username = ?
    			AND password = ?
                AND active 
    			LIMIT 1", [$username, md5($password)]
    	);

    	if($user->num_rows() > 0) {
    		$data = $user->result_array();

    		$this->session->set_userdata($data[0]);
    		return true;
    	}
    	return false;
    }

    public function groupDescription()
    {
        if ($this->notLogged()) { redirect('/'); }

        return $this->session->userdata('description');
    }

    public function id()
    {
        if ($this->notLogged()) { redirect('/'); }

        return $this->session->userdata('id');
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('/');
    }

    public function name()
    {
        if ($this->notLogged()) { redirect('/'); }

        $name = $this->session->userdata('first_name') .' ' .$this->session->userdata('last_name');

        return ucwords($name);
    }

    public function notLogged()
    {
    	if (!$this->session->userdata('id') && !$this->session->userdata('active')) {
    		// $this->session->set_flashdata('info', 'Please login to visit content.');
            return true;
		}

		return false;
    }

    public function password()
    {
        if ($this->notLogged()) { redirect('/'); }

        return $this->session->userdata('password');
    }

    public function redirectIfNotLogged()
    {   
        if ($this->notLogged()) { redirect('/'); }
    }

    public function user()
    {
        if ($this->notLogged()) { redirect('/'); }

        return $this->session->userdata();

    }

    

    

}