<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
 $this->load->view('templates/header');
 $this->load->view('templates/nav');
 
 if (!empty($vars)) {
 	$this->load->view($page, $vars);
 }else {
 	$this->load->view($page);
 }
 
 $this->load->view('templates/footer');