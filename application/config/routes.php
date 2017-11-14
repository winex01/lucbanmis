<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// default
$route['default_controller']   = 'auth/login';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;


//auth
$route['login']  = 'auth/login';
$route['logout'] = 'auth/logout';

// dashboard
$route['dashboard'] = 'dashboard/dashboards';

// users
$route['addUser']         = 'user/addUser';
$route['users']           = 'user/users';
$route['usersList']       = 'user/ajax_list';
$route['changePassword']  = 'user/changePassword';
$route['deleteUser']      = 'user/delete';
$route['insertUser']      = 'user/insert';
$route['updateUser']	  = 'user/update';
$route['editUser/(:num)'] = 'user/edit/$1';

// students
$route['editStudentPage']   = 'student/editStudentPage';
$route['addNewStudent']   = 'student/addNewStudent';
$route['addStudentPage'] = 'student/addStudentPage';
$route['students']        = 'student/students';
$route['studentsList']   = 'student/ajax_list';

//subjects
$route['deleteSubject']   = 'subject/deleteSubject';
$route['editSubject']     = 'subject/editSubject';
$route['editSubjectPage/(:num)'] = 'subject/editSubjectPage/$1';
$route['addNewSubject']   = 'subject/addNewSubject';
$route['addSubjectPage']  = 'subject/addSubjectPage';
$route['subjects']        = 'subject/subjects';
$route['subjectsList']    = 'subject/ajax_list';

// schoolyear
// $route['schoolYears']      = 'schoolyear/schoolyears';
// $route['schoolYearsList']  = 'schoolyear/ajax_list';
// $route['deleteSchoolYear'] = 'schoolyear/delete';


// reports
$route['printForm137'] = 'report/printForm137';

// cron
$route['gitpull'] = 'cron/gitpull';

$route['test']      = 'test/schoolyears';

$route['sy']      = 'schoolyear/schoolyears';
$route['syList']  = 'schoolyear/ajax_list';
$route['syDelete'] = 'schoolyear/delete';




