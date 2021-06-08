<?php

setcookie ("login", "", time() - 3600);
$new_url = 'index.php';
header('Location: '.$new_url);
exit();
