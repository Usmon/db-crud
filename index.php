<?php
    include 'db.php';

    $list = $connection->query('SELECT * FROM `oqituvchilar` ORDER BY `id` DESC')->fetchAll();


//    var_dump($list);
?>
<html>
    <head>
        <title>O'qituvchilar</title>
    </head>
    <body>
        <a href="create.php">+ Yaratish</a>
        <hr>
        <table border="2" width="100%">
            <thead>
                <th>ID</th>
                <th>FIO</th>
                <th>Telefon</th>
                <th>Amallar</th>
            </thead>
            <tbody>
            <?php foreach($list as $row): ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['fio'] ?></td>
                    <td><?php echo $row['telefon'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>">O'zgartirish</a> |
                        <a onclick="return confirm('Aniqmi?')" href="delete.php?id=<?php echo $row['id'] ?>">O'chirish</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>