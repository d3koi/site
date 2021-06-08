<?php

    $bd = mysqli_connect('localhost', 'root', '', 'users');
    mysqli_set_charset($bd, "utf-8");
    
    if (mysqli_connect_errno()) {
        echo 'Ошибка подключения к базе данных' . mysqli_connect_error();
    }
            

?> 