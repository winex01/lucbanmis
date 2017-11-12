<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_model extends CI_Model {
 
    var $table = 'users';
    
    var $column_order = array(
            null, 
            'users.first_name',
            'users.middle_name',
            'users.last_name',
            'users.gender', 
            'users.birth_date', 
            'users.group_id', 
            'groups.description'
    ); //set column field database for datatable orderable
    
    var $column_search = array(
            'users.first_name',
            'users.middle_name',
            'users.last_name',
            'gender', 
            'users.birth_date', 
            'users.group_id', 
            'groups.description'
    ); //set column field database for datatable searchable 
    
    // var $order = array('users.id' => 'asc'); // default order 
    var $order = array('users.first_name' => 'asc'); // default order 
 
    private function _get_datatables_query()
    {
        $this->db->select('users.id, users.first_name, users.middle_name, users.last_name, users.gender, users.birth_date, users.group_id, groups.description');
        $this->db->from($this->table);
        $this->db->join('groups', 'users.group_id = groups.id');
        $this->db->where('active', true);

        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function changePassword($password)
    {
        $this->db->set('password', md5($password));
        $this->db->where('id', $this->auth->id());
        $this->db->update('users');

        // change storage session of password
        $this->session->set_userdata('password', md5($password));

        // modal info
        flashInfo('Change Password Successfully!');
    }

    public function delete($id)
    {
        if(!empty($id)) {
            $this->db->set('active', false);
            $this->db->where('id', $id);
            $this->db->update('users');
        }
    }

    public function checkUsername($username)
    {
        $this->db->select('*');
        $this->db->where('username', $username);
        $result = $this->db->get('users');

        if ($result->num_rows() > 0){
            return true;
        }

        return false;

    }

    public function insert($data)
    {   
        return $this->db->insert('users', $data);
    }

    public function checkUser($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $result = $this->db->get('users');

        if($result->num_rows() > 0) {
            return true;
        }

        return false;
    }

    public function select($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);

        return $this->db->get()->row_array();
    }

 
    public function update(int $id, array $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        return $this->db->update('users');
    }

}