<?php

class CRUD extends CI_Model{

    var $table = "";
    var $key_id = "";
    var $add_rules = array();
    var $edit_rules = array();

    function __construct(){
        parent::__construct();
    }

    function add(){
        $this->form_validation->set_rules($this->add_rules);
        if ($this->form_validation->run()){
            $data = array();
            foreach ($this->add_rules as $one){
                $f = $one['field'];
                $data[$f] = $this->input->post($f);
            }
            $this->db->insert($this->table, $data);
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    function edit($id){
        $this->form_validation->set_rules($this->edit_rules);
        if ($this->form_validation->run()){
            $data = array();
            foreach ($this->edit_rules as $one){
                $f = $one['field'];
                $data[$f] = $this->input->post($f);
            }
            $this->db->where($this->key_id, $data);
            $this->db->update($this->table, $data);
            return true;
        }else{
            return false;
        }
    }

    function del($id){
        $this->db->where($this->table, $id);
        $this->db->dalete($this->table);
    }

    function get($id){
        $this->db->where($this->key_id, $id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }

    function get_list($start_from = FALSE){
        // set list of sort
        $sort_by = $this->session->userdata('sort_by');
        $sort_dir = $this->session->userdata('sort_dir');

        // if not empty value - set param sort
        if (!empty($sort_by)) {
            $this->db->order_by($sort_by, $sort_dir);
        }

        if ($start_from !== FALSE) {
            $this->db->limit($this->config->item('per_page'), $start_from); // limit quantity set quantity of item and position counter
        }

        $query = $this->db->get($this->table);
        return $query->result_array();
    }
}

?>