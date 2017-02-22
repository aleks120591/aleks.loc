<?php

class Lib_view{

    function admin_page($pagename, $data = [], $title = ''){
        $d = [];
        $d['page_title'] = $title;
        $CI = &get_instance();
        $CI->load->view('admin/header.php', $d);
        $CI->load->view('admin/', $pagename, $data);
        $fdata = [];
        $fdata['validation_errors'] = validation_errors();
        $CI->load->view('admin/footer.php', $fdata);
    }
}

?>