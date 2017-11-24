<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// schoolyear
$route['schoolyears']      = 'schoolyear/schoolyears';
$route['schoolyearsList']  = 'schoolyear/ajax_list';
$route['deleteSchoolYear'] = 'schoolyear/delete';


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
$route['deleteStudent/(:num)']   = 'student/deleteStudent/$1';
$route['editStudentPage/(:num)'] = 'student/editStudentPage/$1';
$route['addNewStudent']          = 'student/addNewStudent';
$route['addStudentPage']         = 'student/addStudentPage';
$route['students']               = 'student/students';
$route['studentsList']           = 'student/ajax_list';

//subjects
$route['deleteSubject']          = 'subject/deleteSubject';
$route['editSubject']            = 'subject/editSubject';
$route['editSubjectPage/(:num)'] = 'subject/editSubjectPage/$1';
$route['addNewSubject']          = 'subject/addNewSubject';
$route['addSubjectPage']         = 'subject/addSubjectPage';
$route['subjects']               = 'subject/subjects';
$route['subjectsList']           = 'subject/ajax_list';


//enrolls
$route['enrolled']            = 'enroll/enrolled';
$route['enrollsList']         = 'enroll/ajax_list';

// enrolled students
$route['viewEnrolled/(:num)'] = 'enrolledStudents/index/$1';
