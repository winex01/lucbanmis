<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('box');
	}

	public function dashboards()
	{
		$page = 'dashboard/dashboard';
		$vars = [
			'boxes' => $this->box->all()
		];
		$this->load->view('template', compact('page', 'vars'));
	}

}
