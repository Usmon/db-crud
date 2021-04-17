<?php
include "db.php";

$id = $_GET['id'];

if (count($_POST))
{
    $fio = $_POST['fio'];
    $telefon = $_POST['telefon'];
    $manzil = $_POST['manzil'];
    $sana = $_POST['tugilgan_sana'];

    $result = $connection->query("UPDATE `oqituvchilar` SET `fio` = '$fio', `telefon` = '$telefon', `manzil` = '$manzil', `tugilgan_sana` = '$sana' WHERE `id` = $id");
}

$oqituvchi = $connection->query("SELECT * FROM `oqituvchilar` WHERE `id` = $id")->fetch();

?>
<html>
<head>
    <title>O'zgartirish</title>
</head>
<body>
<a href="index.php">Ro'yxat</a>
<hr>
<form method="POST">
    <label>
        FIO:
        <input type="text" value="<?php echo $oqituvchi['fio'] ?>" name="fio">
    </label>
    <br>
    <label>
        Telefon:
        <input type="text" value="<?php echo $oqituvchi['telefon'] ?>" name="telefon">
    </label>
    <br>
    <label>
        Manzil:
        <input type="text" value="<?php echo $oqituvchi['manzil'] ?>" name="manzil">
    </label>
    <br>
    <label>
        Sana:
        <input type="date" value="<?php echo $oqituvchi['tugilgan_sana'] ?>" name="tugilgan_sana">
    </label>
    <br>
    <button type="submit">Yaratish</button>
</form>
</body>
</html>