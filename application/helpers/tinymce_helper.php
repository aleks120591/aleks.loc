<?php
// return code of editor with ID atribute
function show_tinymce($id)
{
    $CI = &get_instance();

    $data = array();
    $data['id'] = $id;

    // read code from file
    $code = $CI->load->view('tinymce', $data, TRUE);
    return $code;
}