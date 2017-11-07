<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{	
		$page = 'welcome_message';

		// bai kung mo pass kag view bai, ang gamita nga variable is $page = 'view'
		$this->load->view('template', compact('page'));

		/* 
			bai kung naa kay ipasa nga variable sa view below example, ang gamita $vars variable
			bai ang pag access nimo sa variable sa view, kay example, name, age. kung unsa iyang key
		*/
		// $vars = [
		// 	'name' => 'First Name',
		// 	'age' => 69
		// ];
		// $this->load->view('template', compact('page', 'vars'));
		
	}
}
