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
}

?>