<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page_title; ?></title>
</head>
<body>

<p><?php echo anchor('admin', 'Главная'); ?></p>
<p><?php echo anchor('admin/pages', 'Страницы'); ?></p>
<p><?php echo anchor('links', 'Ссылки'); ?></p>
<p><?php echo anchor('admin/settings', 'Настройки'); ?></p>
<p><?php echo anchor('admin/logout', 'Выход'); ?></p>

</body>
</html>