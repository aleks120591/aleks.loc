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
        table.border{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        a{
            color: blue;
        }
        input, select{
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<ul>
    <li><?php echo anchor('/', 'Главная'); ?></li>
</ul>
<h1><?php echo $page_title; ?></h1>