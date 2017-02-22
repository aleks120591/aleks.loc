<?php

class Links extends CI_Controller{

    public function index(){
        var $iname = 'link';
    }

    public function __construct(){
        parent::__construct();
        $mdl_name = 'mdl_'.$this->iname;
        $this->load->model($mdl_name);
    }

    public function edit($id){
        $this->lib_mng->edit($this->iname, $id, 'Редактирование ссылки');
    }

    public function show($id){
        $this->lib_mng->show($this->iname, $id, 'Просмотр ссылки');
    }
}

?>