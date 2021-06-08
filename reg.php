<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="post" action="save_user.php" >
					<span class="login100-form-title p-b-70">
						Регистрация аккаунта!
					</span>
					<span class="login100-form-avatar">
                                            <img src="images/logo.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="login">
						<span class="focus-input100" data-placeholder="Желаемое имя"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Пароль"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Регистрация
						</button>
					</div>
                                    <br>
					<div class="container-login100-form-btn">
                                                
						<a href='index.php '<button class="login100-form-btn" name="submit2">
							Главная страница
                                                        </button> </a>
					</div>

					<ul class="login-more p-t-190">
<!--						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>-->

						<li>
							<span class="txt1">
								Уже есть аккаунт?
							</span>

                                                    <a href="auth.php" class="txt2">
								Войти
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