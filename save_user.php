<html >
<head>
  <meta charset="UTF-8">
  <title>Регистрация</title>
    
      <link rel="stylesheet" href="css/reg_style.css">

</head>
<body>
    
</body>
</html>
<?php

    if (isset($_POST['login'])) 
    { 
        $login = $_POST['login']; 
        if ($login == '') 
        { 
            unset($login);
            
        }
       
    } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    
    if (isset($_POST['password'])) 
    { 
        $password=$_POST['password']; 
        if ($password =='') 
        { 
            unset($password);
        } 
    }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!  <a href='reg.php'>Регистранция</a>");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($bd, "SELECT `user_id` FROM `users` WHERE `username`='$login'") or die("Ошибка " . mysqli_error($bd));
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['user_id'])) 
    {   
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.<a href='reg.php'>Вернуться к окну регистрации</a>");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($bd, "INSERT INTO `users` (`username`,`password`) VALUES('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'> Главная страница</a>";
    }
    else 
    {
        echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>