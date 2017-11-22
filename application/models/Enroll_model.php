<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Enroll_model extends CI_Model {



    var $table = 'subjects';
    

 
    public function addSubject($subcode, $subdes, $active)
    {
        
        $sql = "INSERT INTO subjects (subcode, descriptions, active) VALUES (".$this->db->escape($subcode).", ".$this->db->escape($subdes).", ".$this->db->escape($active).")";
        $this->db->query($sql);
        return $this->db->affected_rows();
    }


 
    public function deleteSubject($id)
    {
        
        $this->db->set('active', false);
        $this->db->where('id', $id);
        $this->db->update('subjects'); // gives UPDATE mytable SET field = field+1 WHERE id = 2

        return $this->db;

    }


      public function editSubject($id, $subcode, $subdes)
    {
        $data = array(
        'subcode' => $subcode,
        'descriptions' => $subdes
        );

        $this->db->where('id', $id);
        $query = $this->db->update('subjects', $data);
        return $this->db;

    }


  public function checkUser($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
         $this->db->where('active', true);
        $result = $this->db->get($this->table);

        if($result->num_rows() > 0) {
            return true;
        }

        return false;
    }

    public function viewSubject($id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('id', $id);

        return $this->db->get()->row_array();
    }




    var $column_order = array(
            null, 
            'id',
            'subcode',
            'descriptions'
      
    ); //set column field database for datatable orderable
    
    var $column_search = array(
            'id',
            'subcode',
            'descriptions'
        
    ); //set column field database for datatable searchable 
    
    var $order = array('id' => 'asc'); // default order 
 
    private function _get_datatables_query()
    {
        $active = true;
        $this->db->where('active =', $active);
        $this->db->from($this->table);

        //$active = 'active';
        //$this->db->from_where('subjects', array('active' => $active));

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

    public function counts()
    {
        $this->db->select('*');
        $this->db->from('subjects');
        $this->db->where('active', true);

        $result = $this->db->get();

        return $result->num_rows();
    }
 
}