
<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Magazine </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="AndreyKrasnov" />

  


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">



	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
        <!-- Всплывающее окно -->
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				<img src="images/logo.png" alt="" class="img-responsive">
			</figure>
                        <?php if (isset($_COOKIE["login"])) { $name = $_COOKIE["login"]; $more = "<a href='exit.php'><h3 class='heading'>Выйти</h3></a>";}
                        else { $name = "Гость"; $more = '<a href="reg.php"><h3 class="heading">Регистация</h3></a>
                        <a href="auth.php"><h3 class="heading">Авторизация</h3></a>';}?> 
                            <h2> Привет, <?php echo $name;?></h2> 
                            <h2> <?php echo $more; ?> </h2>
                    <!--    <?php#  if (empty($_COOKIE["login"])) { $name = "Гость"; } ?> 
                            <h2>Привет  <?php# echo $name; ?> </h2> -->
                        
                </div>


	</div>
	<!-- END #fh5co-offcanvas -->
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
				<ul class="fh5co-social">
					<li><a href="https://twitter.com/yandex?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="icon-twitter"></i></a></li>
					<li><a href="https://ru-ru.facebook.com/yandex/"><i class="icon-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/yandex/?hl=ru"><i class="icon-instagram"></i></a></li>
				</ul>
				<div class="col-lg-12 col-md-12 text-center">
                                   <img class='logo2' src="images/logo2.png" alt="Image" class="img-responsive">
                                    <!--<h1 id="fh5co-logo"><a href="index.php">Яндекс<sup></sup></a></h1>-->
				</div>

			</div>
		
		</div>

	</header>
        <div >
            <dialog>
            <p>Для просмотра статьи необходимо авторизироваться!</p>
            <div id='b'>
              <button id="close" >Закрыть</button>
            </div>
            </dialog>
        </div>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry">
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
                                <figure>    
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/taxi.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show"><img src="images/taxi.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
                                 </figure>
				<span class="fh5co-meta">Свободные водители поблизости</span>
				<h2 class="fh5co-article-title">Yandex Taxi</h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
                                <figure>    
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/music.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show2"><img src="images/music.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Персональные рекомендации</span>
				<h2 class="fh5co-article-title">Yandex Music</h2>
			</article>
			<div class="clearfix visible-xs-block"></div>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
                                <figure>    
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/mail.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show3"><img src="images/mail.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
                                 </figure>
				<span class="fh5co-meta">Электронный ящик без спама и вирусов</span>
				<h2 class="fh5co-article-title">Yandex Mail</h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/pic_3.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show4"><img src="images/pic_3.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Простой и безопасный интернет</span>
				<h2 class="fh5co-article-title">Yandex Browser</h2>
			</article>
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/search.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show5"><img src="images/search.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Ответы на любимые вопросы</span>
				<h2 class="fh5co-article-title">Yandex Search</h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/maps.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show6"><img src="images/maps.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Поиск мест и навигация</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Maps</a></h2>
				
			</article>
			<div class="clearfix visible-xs-block"></div>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/disk.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show7"><img src="images/disk.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Безопасное облако для файлов</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Disk</a></h2>
				
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/market.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show8"><img src="images/market.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">>Товары, цены, отзывы</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Market</a></h2>
				
			</article>
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>



			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/images.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show9"><img src="images/images.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">>Изображение всех цветов и размеров</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Images</a></h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/videos.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show10"><img src="images/videos.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Фильмы, сериалы, телешоу</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Video</a></h2>
			</article>
			<div class="clearfix visible-xs-block"></div>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/poster.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show11"><img src="images/poster.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Развлекательные мероприятия</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Poster</a></h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/news_image.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show12"><img src="images/news_image.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Последние новсти</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex News</a></h2>
			</article>
			<div class="clearfix visible-lg-block visible-md-block visible-sm-block visible-xs-block"></div>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/weather_image.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show13"><img src="images/weather_image.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Прогноз по всему миру</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Weather</a></h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/dzen.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show14"><img src="images/dzen.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Публикации на основе ваших интересов</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">Yandex Dzen</a></h2>
			</article>
			<div class="clearfix visible-xs-block"></div>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/kinopoisk.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show15"><img src="images/kinopoisk.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Сервис для просмотра фильмов</span>
				<h2 class="fh5co-article-title"><a href="taxi.php">KinoPoisk</a></h2>
			</article>
			<article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box">
				<figure>
                                <?php if (isset($_COOKIE['login'])) {?>
					<a href="taxi.php"><img src="images/Realty.jpg" alt="Image" class="img-responsive"></a>
                                <?php } else { ?>
                                        <a href="#" class="show16"><img src="images/Realty.jpg" alt="Image" class="img-responsive"></a>
                                <?php } ?>
				</figure>
				<span class="fh5co-meta">Комнаты, квартиры и дома</span>
                                <h2 class="fh5co-article-title"><a href="taxi.php">Yandex Realty</a></h2>
			</article>
			<div class="clearfix visible-xs-block"></div>
		</div>
	</div>

	<footer id="fh5co-footer">
		<p><small>&copy; 2021. Yandex company. All Rights Reserverd. <br> Designed by <a href="https://vk.com/z10ax" target="_blank">Andrey Krasnov</a></small></p>
	</footer>

        </script>-->
        <script src="js/diol.js"></script>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>
        
        
        
	</body>
</html>

