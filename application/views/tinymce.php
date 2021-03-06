<!-- TINYMCE -->
<script type="text/javascript" src="<?php echo base_url()?>js/tinymce/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/tinymce/langs/ru.js"></script>
<script type="text/javascript">
    tinyMCE.init({
        // general options
        mode : "exact",
        elements:   "<?php echo $id?>",
        theme : "advanced",
        language: "ru",
        plugins : "",
        height : "380",
        document_base_url: "<?php echo base_url()?>",
        relative_urls : false,
        convert_urls : false,
        plugins : "safari,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager",
        // theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
        external_image_list_url: "<?php echo base_url(); ?>admin/images/imglist"
    });
</script>
<!-- /TINYMCE -->