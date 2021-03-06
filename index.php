<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INICIO | CFC - Picacho</title>

	<!-- Pre-Carga (Pre-Load) de los CSS -->
	<link rel="preload" href="admin/style/normalize.css" as="style">
	<link rel="stylesheet" href="admin/style/normalize.css">
	<link rel="preload" href="admin/style/style.css" as=style>
	<link rel="stylesheet" href="admin/style/style.css">
	<link rel="preload" href="admin/style/hamburgers.css" as=style>
	<link rel="stylesheet" href="admin/style/hamburgers.css">

	<!-- Pre-Carga (Pre-Load) de las Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700;900&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"> 

	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<!-- CDN Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
	<!-- INICIO | Ir Arriba -->
	<div id="go__top"><span class="fas fa-angle-up"></span></div>
	<!-- FIN | Ir Arriba -->

	<!-- INICIO | Header -->
	<div class="header" id="header">
		<div class="header__button">
			<button class="hamburger hamburger--vortex" type="button" id="icono-menu">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<span class="header__name">Men??</span>
		</div>
		<a href="#" class="link__index"><img src="admin/img/logo.svg" alt="Centro Familiar Cristiano | Picacho" class="header__logo"></a>
		<div class="header__options">
			<a href="https://www.instagram.com/cfcmedellin/" target="_blank"><div class="header__option" title="Instagram"><i class="fab fa-instagram header__option-ref"></i></div></a>
			<a href="https://www.facebook.com/iglesiacfcmedellin" target="_blank"><div class="header__option" title="Facebook"><i class="fab fa-facebook-f header__option-ref"></i></div></a>
			<a href="admin/pages/contact.php"><div class="header__option" title="Contacto"><i class="fas fa-envelope header__option-ref"></i></div></a>
		</div>
	</div>
	<!-- FIN | Header -->

	<!-- INICIO | Sidebar -->
	<div class="sidebar">
		<div class="sidebar__nav-box"></div>
		<div class="sidebar__nav-ref">
			<div class="nav__ref-box">
				<div class="ref__box-option"><a href="admin/pages/gallery.php" class="option" title="Galeria"><i class="fas fa-images"></i></a></div>
				<div class="ref__box-option"><a href="admin/pages/live.php" class="option" title="Live Youtube"><i class="fab fa-youtube"></i></a></div>
				<div class="ref__box-option"><a href="admin/pages/contact.php" class="option" title="Ubicanos"><i class="fas fa-map-marker-alt"></i></a></div>
				<div class="ref__box-option"><a href="https://wa.me/573167438852/?text=Que%20sea%20Dios%20Bendiciendo%20su%20Vida%20Pastor%20Ivan" target="_blank" class="option" title="Whatsapp"><i class="fab fa-whatsapp"></i></a></div>
			</div>	
		</div>
	</div>
	<!-- FIN | Sidebar -->
	
	<!-- INICIO | Menu -->
	<div class="nav__menu active" id="menu">
		<div class="box"></div>
		<div class="menu__container">
			<div class="menu__box menu__box-first">
				<div class="box__nav">
					<div class="nav__container">
						<div class="nav_item">
							<a href="#" class="nav__link submenu__btn">Nosotros <i class="fas fa-chevron-down"></i></a>
							<div class="submenu__container">
								<div class="nav_item"><a href="admin/pages/aboutme.html" class="nav__link">??Quienes Somos?</a></div>
								<div class="nav_item"><a href="admin/pages/aboutme.html" class="nav__link">Misi??n</a></div>
								<div class="nav_item"><a href="admin/pages/aboutme.html" class="nav__link">Visi??n</a></div>
								<div class="nav_item"><a href="admin/pages/aboutme.html" class="nav__link">Pastores</a></div>
								<div class="nav_item"><a href="admin/pages/aboutme.html" class="nav__link">Canon de Doctrina</a></div>
							</div>
						</div>
						<div class="nav_item container-submenu">
							<a href="#" class="nav__link submenu__btn">Programas <i class="fas fa-chevron-down"></i></a>
							<div class="submenu__container">
								<div class="nav_item"><a href="admin/pages/programs.php" class="nav__link">Mi Altar Familiar</a></div>
								<div class="nav_item"><a href="admin/pages/programs.php" class="nav__link">Matrimonio para TODA la Vida</a></div>
							</div>
						</div>
						<div class="nav__item"><a href="admin/pages/live.php" class="nav__link">Youtube Live</a></div>
						<div class="nav__item"><a href="admin/pages/contact.php" class="nav__link">Contactanos</a></div>
						<div class="nav__item"><a href="admin/pages/contact.php" class="nav__link">Ubicanos</a></div>
						<div class="nav__item"><a href="admin/pages/gallery.php" class="nav__link">Galeria de Imagenes</a></div>
						
					</div>
				</div>
			</div>
			<div class="menu__box menu__box-disable">
				<div>
					<h2><i class="fas fa-calendar-day"></i>Lunes y Martes</h2>
					<h3><i class="far fa-bookmark"></i>Oraci??n / Intercesi??n</h3>
					<p><i class="far fa-clock"></i><b>HORA: </b><span>5:30</span> PM a <span>6:30</span> PM</p>
					<p>Trae tus <span>PETICIONES</span> al Altar del Se??or y el har?? conforme a los deseos de tu coraz??n.</p>
					<hr>
				</div>
				<div>
					<h2><i class="fas fa-calendar-day"></i>Jueves</h2>
					<h3><i class="far fa-bookmark"></i>Doctrina y Discipulado</h3>
					<p><i class="far fa-clock"></i><b>HORA: </b><span>7:00</span> PM a <span>8:30</span> PM</p>
					<p>Porque la Palabra de Dios es viva y eficaz. Ven todos los Jueves a aprender de las escrituras.</p>
					<hr>
				</div>
				<div>
					<h2><i class="fas fa-calendar-day"></i>Domingos</h2>
					<h3><i class="far fa-bookmark"></i>Cruzada de Fe y Esperanza</h3>
					<p><i class="far fa-clock"></i><b>HORA: </b><span>9:30</span> AM a <span>11:00</span> AM</p>
					<p>Trae a tu <span>FAMILIA</span> y a tus <span>AMIGOS</span> a la Casa del Se??or para que reciban Palabra de Bendici??n.</p>
					<hr>
				</div>
				<div>
					<h3><i class="fas fa-map-marker-alt"></i>Sede Picacho</h3>
					<p>Cll 106C #85-34 Barrio Picacho - Medell??n<br><b>TEL:</b> 301 427 33 48</p>
				</div>
			</div>
		</div>
	</div>
	<!-- FIN | Menu -->
	
	<!-- INICIO | Slider -->
	<div class="slider">
		<div class="slider__box" id="slider">
			<div class="slider__section">
				<img src="admin/img/image-1.jpg" alt="" class="slider__section-img">
				<div class="slider__section-content">
					<div class="box"></div>
					<div class="section__content">
						<h2>Un solo d??a en tus atrios</h2>
						<h3>??Es mejor que mil en cualquier otro lugar!</h3>
						<h4>SALMOS 81:10</h4><p></p>
						<div><a href="https://wa.me/573167438852/?text=Que%20sea%20Dios%20Bendiciendo%20su%20Vida%20Pastor%20Ivan.%20Deseo%20asistir%20a%20la%20iglesia,%20??Me%20facilita%20informaci??n?" target="_blank"><button>??ASISTE!</button></a></div>
					</div>
				</div>
			</div>
			<div class="slider__section">
				<img src="admin/img/image-4.jpg" alt="" class="slider__section-img">
				<div class="slider__section-content">
					<div class="box"></div>
					<div class="section__content">
						<h2>"Pues lo que Dios</h2>
						<h3>ha unido, que no lo separe el hombre"</h3>
						<h4>MATEO 19:6</h4>
						<p><b>PROGRAMA: Matrimonio para TODA la Vida</b></p>
						<div><a href="admin/pages/programs.php"><button>??SOLICITALO!</button></a></div>
					</div>
				</div>
			</div>
			<div class="slider__section">
				<img src="admin/img/image-3.jpg" alt="" class="slider__section-img">
				<div class="slider__section-content">
					<div class="box"></div>
					<div class="section__content">
						<h2>"Cree en el Se??or</h2>
						<h3>Jesucristo, y se salvar??n t?? y tu familia</h3>
						<h4>HECHOS 16:31</h4>
						<p><b>PROGRAMA: Mi Altar Familiar</b></p>
						<div><a href="admin/pages/programs.php"><button>??SOLICITALO!</button></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider__btn-box">
			<div class="slider__btn slider__btn-left" id="btn-left"><i class="fas fa-chevron-left"></i></div>
			<div class="slider__btn slider__btn-right" id="btn-right"><i class="fas fa-chevron-right"></i></div>
		</div>
	</div>
	<!-- FIN | Slider -->

	<!-- INICIO | Footer -->
	<div class="footer">
		<div class="box"></div>
		<div class="footer__container">
			<div class="footer__box">
				<h2>SERVICIOS</h2>
				<div class="footer__box-slider">
					<div class="footer__slider">
						<div class="footer__slider-box">
							<div class="footer__slider-content">
								<div>
									<h2><i class="fas fa-calendar-day"></i>Lunes y Martes</h2>
									<h3><i class="far fa-bookmark"></i>Oraci??n / Intercesi??n</h3>
									<p><i class="far fa-clock"></i><b>HORA: </b><span>5:30</span> PM a <span>6:30</span> PM</p><br>
									<p>Trae tus <span>PETICIONES</span> al Altar del Se??or y el har?? conforme a los deseos de tu coraz??n.</p>
								</div>
							</div>
							<div class="footer__slider-content">
								<div>
									<h2><i class="fas fa-calendar-day"></i>Jueves</h2>
									<h3><i class="far fa-bookmark"></i>Doctrina y Discipulado</h3>
									<p><i class="far fa-clock"></i><b>HORA: </b><span>7:00</span> PM a <span>8:30</span> PM</p><br>
									<p>Porque la Palabra de Dios es viva y eficaz. Ven todos los Jueves a aprender de las escrituras.</p>
								</div>
							</div>
							<div class="footer__slider-content">
								<div>
									<h2><i class="fas fa-calendar-day"></i>Domingos</h2>
									<h3><i class="far fa-bookmark"></i>Cruzada de Fe y Esperanza</h3>
									<p><i class="far fa-clock"></i><b>HORA: </b><span>9:30</span> AM a <span>11:00</span> AM</p><br>
									<p>Trae a tu <span>FAMILIA</span> y a tus <span>AMIGOS</span> a la Casa del Se??or para que reciban Palabra de Bendici??n.</p>
								</div>
							</div>
							<div class="footer__slider-content">
								<div>
									<h2><i class="fas fa-calendar-day"></i>Lunes y Martes</h2>
									<h3><i class="far fa-bookmark"></i>Oraci??n / Intercesi??n</h3>
									<p><i class="far fa-clock"></i><b>HORA: </b><span>5:30</span> PM a <span>6:30</span> PM</p><br>
									<p>Trae tus <span>PETICIONES</span> al Altar del Se??or y el har?? conforme a los deseos de tu coraz??n.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="line__footer"></div>
			<div class="footer__box footer__box-center">
				<h2>SEDES</h2>
				<h3><i class="fas fa-map-marker-alt"></i>Sede Central</h3>
				<p>Cll 50 #80-20 Calazans - Medell??n<br><b>TEL:</b> 502 29 18</p>
				<h3><i class="fas fa-map-marker-alt"></i>Sede Picacho</h3>
				<p>Cll 106C #85-34 Barrio Picacho - Medell??n<br><b>TEL:</b> 301 427 33 48</p>
				<h3><i class="fas fa-map-marker-alt"></i>Sede Itag????</h3>
				<p>Cra 52D #76-20 Diagonal al C.C Platino Itag????<br><b>TEL:</b> 300 354 96 29</p>
			</div>
			<div class="line__footer"></div>
			<div class="footer__box footer__box-right">
				<h2>NOSOTROS</h2>
				<h3><i class="fas fa-book-open"></i> <a href="admin/pages/aboutme.html">Canon de Doctrina</a></h3>
				<h3><i class="fas fa-map-marker-alt"></i> <a href="admin/pages/contact.php">Nuestra Ubicaci??n</a></h3>
				<h3><i class="fas fa-mobile-alt"></i> <a href="admin/pages/contact.php">Contactanos</a></h3>
				<h2 class="footer__right">REDES SOCIALES</h2>
				<h3><i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/iglesiacfcmedellin" target="_blank">Facebook</a></h3>
				<h3><i class="fab fa-instagram"></i> <a href="https://www.instagram.com/cfcmedellin/" target="_blank">Instagram</a></h3>
				<h3><i class="fab fa-youtube"></i> <a href="https://www.youtube.com/channel/UCuTv84Y_jPjIjONggzgyHDA" target="_blank">Youtube</a></h3>
				<h3><i class="fab fa-whatsapp"></i> <a  href="https://wa.me/573167438852/?text=Que%20sea%20Dios%20Bendiciendo%20su%20Vida%20Pastor%20Ivan" target="_blank">Whatsapp</a></h3>
			</div>
		</div>
	</div>
	<!-- FIN | Footer -->
	
	<footer class="credits">
		<div class="box"></div>
		<div class="credits__container">?? AguilArt Desing 2021 | Todos los Derechos Reservados</div>
	</footer>

	<!-- CDN App Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<script src="admin/js/modernizer.js"></script>
	<script src="admin/js/button.js"></script>
	<script src="admin/js/slider.js"></script>
	<script src="admin/js/footer.js"></script>
	<script src="admin/js/goTop.js"></script>
	<script src="admin/js/menu.js"></script>
	<div id="markwater"></div>
</body>
</html>