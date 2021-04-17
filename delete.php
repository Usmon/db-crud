<?php
    include "db.php";

    $id = $_GET['id'];

    $connection->query("DELETE FROM `oqituvchilar` WHERE `id` = $id");

?>
<html>
    <head>
        <title>O'chirish</title>
    </head>
    <body>
        <a href="index.php">Ro'yxat</a>
        <h2>Ma'lumot o'chirildi!</h2>
    </body>
</html>
