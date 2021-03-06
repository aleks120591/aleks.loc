<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
    <style type="text/css">
        ul{
            list-style: none;
            margin: 20px 0;
            padding: 0;
        }
        ul li{
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<ul>
    <li><?php echo anchor('admin', 'Главная'); ?></li>
    <li><?php echo anchor('admin/pages', 'Страницы'); ?></li>
    <li><?php echo anchor('links', 'Ссылки'); ?></li>
    <li><?php echo anchor('admin/settings', 'Настройки'); ?></li>
    <li><?php echo anchor('admin/logout', 'Выход'); ?></li>
</ul>
<h1><?php echo $page_title; ?></h1>