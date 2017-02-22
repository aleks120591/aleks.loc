<?php

class Pages extends CI_Controller{

    public function show($page_id){
        $this->lib_view->user_page($page_id);
    }

    public function index(){
        redirect('index.html');
    }
}

?>