<!DOCTYPE html>
<html lang="en">
<head>
	<title>Авторизация</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="post" action="auth_user.php" >
					<span class="login100-form-title p-b-70">
						Добро пожаловать!
					</span>
					<span class="login100-form-avatar">
						<img src="images/logo.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="login" required>
						<span class="focus-input100" data-placeholder="Ваше имя"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100" data-placeholder="Пароль"></span>
					</div>
                                        <?php if (isset($_COOKIE["er"])) { ?>
                                        <div class='er'>
                                            <p> <?php echo $_COOKIE["er"]; 
                                                setcookie ("er", "", time() - 3600);?> </p>
                                        </div>
                                        <?php } ?>
                                    
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Войти
						</button>
					</div>
                                    <br>
					<div class="container-login100-form-btn">
                                                
						<a href='index.php '<button class="login100-form-btn" name="submit2">
							Главная страница
                                                        </button> </a>
					</div>

					<ul class="login-more p-t-190">
						<li>
							<span class="txt1">
								Нет аккаунта?
							</span>

                                                    <a href="reg.php" class="txt2">
								Регистрация
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="js/main_auth.js"></script>

</body>
</html>