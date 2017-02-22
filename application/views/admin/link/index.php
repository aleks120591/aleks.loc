<?php if (!empty($list)): ?>

    <table border="1" cellpadding="5">

        <tr>
            <th>ID ссылки</th>
            <th>Название ссылки</th>
            <th>URL ссылки</th>
            <th>Кликов</th>
        </tr>

        <?php foreach ($list as $one): ?>
            <tr>
                <td><?php echo anchor('admin/links/show/' . $one['link_id'], $one['link_id']);; ?></td>
                <td><?php echo $one['descr'] ?></td>
                <td><a href="<?php echo $one['url'] ?>" target="_blank"><?php echo $one['url'] ?></a></td>
                <td><?php echo $one['clicks']; ?></td>
            </tr>
        <?php endforeach ?>

    </table>

    <p><?php echo anchor('admin/links/add', 'Добавить новую ссылку'); ?></p>

<?php else: ?>
    <p>В базе нет записей.</p>

<?php endif ?>