<?php

class Mdl_set extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load_config();
    }

    private function load_config(){
        $query = $this->db->get('settings');
        $sets = $query->result();
        foreach ($sets as $row){
            $val = $row->value;
            if (is_numeric($val))
                $val = $val + 0;
            $this->config->set_item($row->param, $val);
        }
    }
}
?>