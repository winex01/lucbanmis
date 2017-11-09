<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//auth
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';

// dashboard
$route['dashboard'] = 'dashboard/dashboards';

// users
$route['addUser'] = 'user/addUser';
$route['users'] = 'user/users';
$route['usersList'] = 'user/ajax_list';

// students
$route['addStudent'] = 'student/addStudent';
$route['students'] = 'student/students';

//subjects
$route['addNewSubject'] = 'subject/addNewSubject';
$route['addSubjectPage'] = 'subject/addSubjectPage';
$route['subjects'] = 'subject/subjects';
$route['subjectsList'] = 'subject/ajax_list';

// reports
$route['printForm137'] = 'report/printForm137';

// default
$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
