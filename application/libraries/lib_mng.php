<?php

class Lib_mng{

    public function add($name, $title = ''){
        $CI = &get_instance();
        $md = 'mdl_'.$name;
        $CI->load->model($md);
        if ($CI->{$md}->add() !== false){
            redirect('admin/'.$name.'s');
        }else{
            $CI->lib_view->admin_page($name.'/add', array(), $title);
        }
    }

    public function edit($name, $id, $title){
        $CI = &get_instance();
        $md = 'mdl_'.$name;
        $CI->load->model($md);
        $data = $CI->{$md}->get($id);
        if ($CI->{$md}->edit($id) !== false){
            redirect('admin/'.$name.'s');
        }else{
            $CI->lib_view->admin_page($name.'/edit', $data, $title);
        }
    }

    public function show($name, $id, $title){
        $CI = &get_instance();
        $md = 'mdl_'.$name;
        $CI->load->model($md);
        $data = $CI->{$md}->get($id);
        if (empty($data)){
            die('Такой записи нет в базе.');
        }
        $CI->lib_view->admin_page($name.'/view', $data, $title);
    }
}

?>