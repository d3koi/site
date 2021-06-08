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
    $er = '';
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
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 
    $result = mysqli_query($bd, "SELECT * FROM `users` WHERE `username`='$login'") or die("Ошибка " . mysqli_error($bd)); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result);
    if (empty($myrow['username']))
    {
    //если пользователя с введенным логином не существует
        $new_url = 'auth.php';
        $er = "Извините, введённый вами логин неверный";
        setcookie("er", $er);
        header('Location: '.$new_url);
        exit();
//        exit ("Извините, введённый вами логин неверный. <a href='auth.php'> Вернуться </a>");
    }
    else {
         if ($myrow['password']==$password) {
 
        setcookie("login", $myrow['username'], time() + 3600);
               
//        echo "Вы успешно вошли на сайт! <a href='index.php'>Главная страница</a>";
        $new_url = 'index.php';
        header('Location: '.$new_url);
        exit();
        }
        else {
           //если пароли не сошлись
               $new_url = 'auth.php';
               $er = "Извините, введённый вами пароль неверный.";
               setcookie("er", $er);
               header('Location: '.$new_url);
               exit();
       //    exit ("Извините, введённый вами пароль неверный. <a href='auth.php'> Вернуться </a>");
           }
    }
    ?>