<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// butang og active sa link class
if ( ! function_exists('active'))
{
    function active($var = '')
    {
    	 $ci =& get_instance();
    	
    	if (!empty($var)) {
    		if ( $ci->uri->uri_string() == $var ){
    			echo 'active';
    		}	
    	}
    }   
}

// butang for every form para. iwas sa csrf
if ( ! function_exists('csrf'))
{
    function csrf(){

        $ci =& get_instance();
                
        $csrf = array(
                'name' => $ci->security->get_csrf_token_name(),
                'hash' => $ci->security->get_csrf_hash()
        );

        echo '<input type="hidden" name="'.$csrf['name'].'" value="'.$csrf['hash'].'" />';

        
    }   
}


if ( ! function_exists('csrfName'))
{
    function csrfName(){

        $ci =& get_instance();

        echo $ci->security->get_csrf_token_name();
    }   
}

if ( ! function_exists('csrfHash'))
{
    function csrfHash(){

        $ci =& get_instance();

        echo $ci->security->get_csrf_hash();
    }   
}


// get uri
if ( ! function_exists('currentURI'))
{
    function currentURI()
    {
         $ci =& get_instance();
        
        $uri = $ci->uri->uri_string();
        echo '<input type="hidden" name="request" value="'.$uri.'" />';
    }   
}

// flash info 
if ( ! function_exists('flashInfo'))
{
    function flashInfo($msg)
    {
         $ci =& get_instance();
         
         $ci->session->set_flashdata('flashInfo', $msg);
        
    }   
}


if ( ! function_exists('confirmDelete'))
{
    function confirmDelete($var, $url, $disabled = '')
    {
         $ci =& get_instance();
         
        return '<button '.$disabled.' onclick="confirmDelete('.$var.' ,\''.$url.'\')" data-toggle="modal" class="btn btn-default btn-danger btn-sm" data-toggle="tooltip" title="Delete">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>';        
    }   
}

// set select dropdown
if ( ! function_exists('set_dropdown'))
{
    function set_dropdown($name, $value)
    {
         $ci =& get_instance();
         
         echo set_value($name) == $value ? 'selected' : '';
                
    }   
}


