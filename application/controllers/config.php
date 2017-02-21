<?php

class Config extends CI_Controller{

    public function index(){
        $this->load->model('mdl_set');
        echo $this->config->item('per_page');
    }
}
?>