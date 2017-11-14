<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group_model extends CI_Model {

    // list of all groups
    public function groups()
    {
        return $this->db->query("
            SELECT id, description
            FROM groups
        ")->result();

    }

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
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessEditStudent()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessPrintStudent()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'administrator':
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessDeleteStudent()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'registrar':
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
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessViewSubjects()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }

    public function accessAddSubject()
    {
        $access = false;
        switch ($this->auth->groupDescription()) {
            case 'registrar':
                    $access = true;
                break;
            
        }

        return $access;
    }





}