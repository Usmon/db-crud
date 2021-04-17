<?php
    include 'db.php';

    $connection
        ->query('INSERT INTO `oqituvchilar` (`fio`, `telefon`, `manzil`) 
            VALUES ("Nodir Abdullayev", "+99894546785", "NY, Test address")');