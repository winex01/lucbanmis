<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboards()
	{
		$page = 'dashboard/dashboard';
		$this->load->view('template', compact('page'));
	}

}
