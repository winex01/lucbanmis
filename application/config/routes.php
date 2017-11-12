<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//auth
$route['login']  = 'auth/login';
$route['logout'] = 'auth/logout';

// dashboard
$route['dashboard'] = 'dashboard/dashboards';

// users
$route['addUser']        = 'user/addUser';
$route['users']          = 'user/users';
$route['usersList']      = 'user/ajax_list';
$route['changePassword'] = 'user/changePassword';
$route['deleteUser']     = 'user/delete';

// students
$route['editStudentPage']   = 'student/editStudentPage';
$route['addNewStudent']   = 'student/addNewStudent';
$route['addStudentPage'] = 'student/addStudentPage';
$route['students']        = 'student/students';
$route['studentsList']   = 'student/ajax_list';

//subjects
$route['deleteSubject']   = 'subject/deleteSubject';
$route['editSubject']     = 'subject/editSubject';
$route['editSubjectPage'] = 'subject/editSubjectPage';
$route['addNewSubject']   = 'subject/addNewSubject';
$route['addSubjectPage']  = 'subject/addSubjectPage';
$route['subjects']        = 'subject/subjects';
$route['subjectsList']    = 'subject/ajax_list';

// reports
$route['printForm137'] = 'report/printForm137';

// default
$route['default_controller']   = 'auth/login';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;
