<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// reports
$route['printForm137/:any'] = 'report/printForm137';

// users
$route['addUser'] = 'user/addUser';
$route['user'] = 'user/users';

//subjects
$route['addSubject'] = 'subject/addSubject';
$route['subject'] = 'subject/subjects';

// students
$route['addStudent'] = 'student/addStudent';
$route['studentRecord'] = 'student/studentRecord';

$route['home'] = 'info/home';
$route['contact'] = 'info/contact';
$route['about'] = 'info/about';

// default
$route['default_controller'] = 'info/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
