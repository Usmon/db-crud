<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'maktab';

$connection = new PDO('mysql:host='.$host.';dbname='.$db_name, $user, $password);

