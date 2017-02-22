<?php

class Mdl_link extends CRUD{

    var $table = 'links';
    var $key_id = 'link_id';
    var $add_rules = [
        [
            'field' => 'link_id',
            'label' => 'ID ссылки',
            'rules' => 'required | az_numeric | uniq[link_id]',
        ],
        [
            'field' => 'descr',
            'label' => 'Описание',
            'rules' => 'required | valid_title',
        ],
        [
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'required | valid_url',
        ],
    ];
    var $edit_rules = [
        [
            'field' => 'descr',
            'label' => 'Описание',
            'rules' => 'required | valid_title',
        ],
        [
            'field' => 'url',
            'label' => 'URL',
            'rules' => 'required | valid_url',
        ],
    ];
}

?>