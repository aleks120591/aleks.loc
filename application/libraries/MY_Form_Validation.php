<?php

class MY_Form_Validation extends CI_Form_Validation {

    function __controller(){
        parent::CI_Form_Validation();
        $CI = &get_instance();
        $CI->lang->load('validation_new');
    }

    function az_numeric($str){
        return (!preg_match("/^([a-z0-9])+$/i", $str)) ? false : true;
    }

    function valid_url($str){
        return (!preg_match('/^(http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:;.?+=&%@!\-\/]))?$/',$str)) ? false : true;
    }

    function valid_title($str){
        return (!preg_match ('/^[А-Яа-яЁё\w\d\s\.\,\+\-\_\!\?\#\%\@\№\/\(\)\[\]\:\&\$\*]{1,250}$/',$str)) ? false : true;
    }

    function uniq($str, $param){
        $CI = &get_instance();
        $tname = str_replace('_id', 's', $param);
        $CI->db->where($param, $str);
        return ($Ci->db->count_all_result($tname) == 0);
    }

}