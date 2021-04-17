<?php
    include "db.php";

    if (count($_POST))
    {
        $fio = $_POST['fio'];
        $telefon = $_POST['telefon'];
        $manzil = $_POST['manzil'];
        $sana = $_POST['tugilgan_sana'];

        $result = $connection->query("INSERT INTO `oqituvchilar`(`fio`, `telefon`, `manzil`, `tugilgan_sana`) VALUES('$fio', '$telefon', '$manzil', '$sana')");
    }

?>
<html>
    <head>
        <title>Yaratish</title>
    </head>
    <body>
        <a href="index.php">Ro'yxat</a>
        <hr>
        <form method="POST">
            <label>
                FIO:
                <input type="text" name="fio">
            </label>
            <br>
            <label>
                Telefon:
                <input type="text" name="telefon">
            </label>
            <br>
            <label>
                Manzil:
                <input type="text" name="manzil">
            </label>
            <br>
            <label>
                Sana:
                <input type="date" name="tugilgan_sana">
            </label>
            <br>
            <button type="submit">Yaratish</button>
        </form>
    </body>
</html>