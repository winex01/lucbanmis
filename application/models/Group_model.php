<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_model extends CI_Model {

    /**
    * dashboards
    *
    */
    public function accessDashboards()
    {      
        return true;
    }

    /**
    * users
    *
    */
    public function accessUsers()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'administrator':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessViewUsers()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'administrator':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessAddUser()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'administrator':
                    $access = true;
                break;
            
        }

        return $access;
    }

    /**
    * students
    *
    */
    public function accessStudents()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'administrator':
            case 'cashier':
            case 'encoder':
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessViewStudents()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'administrator':
            case 'cashier':
            case 'encoder':
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessAddStudent()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'cashier':
                    $access = true;
                break;
            
        }

        return $access;
    }

    /**
    * subjects
    *
    */
    public function accessSubjects()
    {
        return false;
    }

    public function accessViewSubjects()
    {
        return false;
    }

    public function accessAddSubject()
    {
        return false;
    }





}