<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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