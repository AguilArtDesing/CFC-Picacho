<!DOCTYPE html>
<html lang="es-CO">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>INICIO | CFC - Picacho</title>

	<!-- Pre-Carga (Pre-Load) de los CSS -->
	<link rel="preload" href="../style/normalize.css" as="style">
	<link rel="stylesheet" href="../style/normalize.css">
	<link rel="preload" href="../style/style.css" as=style>
	<link rel="stylesheet" href="../style/style.css">
	<link rel="preload" href="../style/hamburgers.css" as=style>
	<link rel="stylesheet" href="../style/hamburgers.css">

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
			<span class="header__name">Menú</span>
		</div>
		<a href="../../index.php" class="link__index"><img src="../img/logo.svg" alt="Centro Familiar Cristiano | Picacho" class="header__logo"></a>
		<div class="header__options">
			<a href="https://www.instagram.com/cfcmedellin/" target="_blank"><div class="header__option" title="Instagram"><i class="fab fa-instagram header__option-ref"></i></div></a>
			<a href="https://www.facebook.com/iglesiacfcmedellin" target="_blank"><div class="header__option" title="Facebook"><i class="fab fa-facebook-f header__option-ref"></i></div></a>
			<a href="contact.php"><div class="header__option" title="Contacto"><i class="fas fa-envelope header__option-ref"></i></div></a>
		</div>
	</div>
	<!-- FIN | Header -->

	<!-- INICIO | Sidebar -->
	<div class="sidebar">
		<div class="sidebar__nav-box"></div>
		<div class="sidebar__nav-ref">
			<div class="nav__ref-box">
				<div class="ref__box-option"><a href="gallery.php" class="option" title="Galeria"><i class="fas fa-images"></i></a></div>
				<div class="ref__box-option"><a href="live.php" class="option" title="Live Youtube"><i class="fab fa-youtube"></i></a></div>
				<div class="ref__box-option"><a href="contact.php" class="option" title="Ubicanos"><i class="fas fa-map-marker-alt"></i></a></div>
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
								<div class="nav_item"><a href="aboutme.html" class="nav__link">¿Quienes Somos?</a></div>
								<div class="nav_item"><a href="aboutme.html" class="nav__link">Misión</a></div>
								<div class="nav_item"><a href="aboutme.html" class="nav__link">Visión</a></div>
								<div class="nav_item"><a href="aboutme.html" class="nav__link">Pastores</a></div>
								<div class="nav_item"><a href="aboutme.html" class="nav__link">Canon de Doctrina</a></div>
							</div>
						</div>
						<div class="nav_item container-submenu">
							<a href="#" class="nav__link submenu__btn">Programas <i class="fas fa-chevron-down"></i></a>
							<div class="submenu__container">
								<div class="nav_item"><a href="#" class="nav__link">Mi Altar Familiar</a></div>
								<div class="nav_item"><a href="#" class="nav__link">Matrimonio para TODA la Vida</a></div>
							</div>
						</div>
						<div class="nav__item"><a href="live.php" class="nav__link">Youtube Live</a></div>
						<div class="nav__item"><a href="contact.php" class="nav__link">Contactanos</a></div>
						<div class="nav__item"><a href="contact.php" class="nav__link">Ubicanos</a></div>
						<div class="nav__item"><a href="gallery.php" class="nav__link">Galeria de Imagenes</a></div>
						
					</div>
				</div>
			</div>
			<div class="menu__box menu__box-disable">
				<div>
					<h2><i class="fas fa-calendar-day"></i>Lunes y Martes</h2>
					<h3><i class="far fa-bookmark"></i>Oración / Intercesión</h3>
					<p><i class="far fa-clock"></i><b>HORA: </b><span>5:30</span> PM a <span>6:30</span> PM</p>
					<p>Trae tus <span>PETICIONES</span> al Altar del Señor y el hará conforme a los deseos de tu corazón.</p>
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
					<p>Trae a tu <span>FAMILIA</span> y a tus <span>AMIGOS</span> a la Casa del Señor para que reciban Palabra de Bendición.</p>
					<hr>
				</div>
				<div>
					<h3><i class="fas fa-map-marker-alt"></i>Sede Picacho</h3>
					<p>Cll 106C #85-34 Barrio Picacho - Medellín<br><b>TEL:</b> 301 427 33 48</p>
				</div>
			</div>
		</div>
	</div>
	<!-- FIN | Menu -->

	<!-- INICIO | programs -->
	<div class="programs">
		<div class="programs__box">
			<div class="box"></div>
			<div class="programs__box-title">
				<div class="programs__box-titles">
					<h2>PROGRAMAS</h2>
				</div>
				<div class="programs__box-content">
					<div class="box__objetive"></div>
					<div class="box__objetive-text">
						<h3>MATRIMONIO PARA TODA LA VIDA</h3>
						<p>Es un <b>Programa</b> que tiene como Objetivo conducir a las parejas para que a traves de un estudio semanal puedan avanzar en acuerdo, dialogo, tolerancia, amor y respeto; llevando a las parejas a un nivel de entendimiento y de esta manera ser un ejemplo para sus hijos, lo que los lleve a tener un matrimonio feliz y para toda la vida. <br><br>Este Programa contiene una Lección Semanal que puedes realizar desde la comididad de tu casa con <b>TU PAREJA</b>.</p>
					</div>
				</div>
				<div class="programs__box-content">
					<div class="box__objetive-2"></div>
					<div class="box__objetive-text">
						<h3>MI ALTAR FAMILIAR</h3>
						<p>Es un <b>Programa</b> que tiene como Objetivo Fortalecer, Estructurar y Educar a las Familias, para que puedan avanzar y lograr tener una familia funcional. Esto se logra semanalmente atendiendo cada Familia a través de un material sencillo, para que cada familia se pueda <b>Autoayudar</b> y de esta manera lograr tener familias autonomas y tracendentes. <br><br>Este Programa contiene una Lección Semanal que puedes realizar desde la comididad de tu casa con <b>TU FAMILIA</b>.</p>
					</div>	
				</div>
				<div class="programs__box-form">
					<form method="post" action="">
						<input type="text" name="nombres"placeholder="Nombres / Apellidos">
						<input type="email" name="email" placeholder="Correo Electrónico">
						<input type="number" name="telefono" placeholder="Número de Celular">
						<div class="programs__programs">
							<p>Seleccione el Programa</p>
							<select class="programs__program" name="opcion" id="programs__programs">
								<option value="none">--</option>
								<option value="Matrimonio">Matrimonio para TODA la Vida</option>
								<option value="Familia">Mi Altar Familiar</option>
							</select>
						</div>
						<div>
							<label for="">Semana</label>
							<select name="semana" id="programs__weeks">
								<option value="none">--</option>
								<option value="Semana 1">Semana 1</option>
								<option value="Semana 2">Semana 2</option>
								<option value="Semana 3">Semana 3</option>
								<option value="Semana 4">Semana 4</option>
								<option value="Semana 5">Semana 5</option>
								<option value="Semana 6">Semana 6</option>
								<option value="Semana 7">Semana 7</option>
								<option value="Semana 8">Semana 8</option>
								<option value="Semana 9">Semana 9</option>
								<option value="Semana 10">Semana 10</option>
								<option value="Semana 11">Semana 11</option>
								<option value="Semana 12">Semana 12</option>
								<option value="Semana 13">Semana 13</option>
								<option value="Semana 14">Semana 14</option>
								<option value="Semana 15">Semana 15</option>
								<option value="Semana 16">Semana 16</option>
								<option value="Semana 17">Semana 17</option>
								<option value="Semana 18">Semana 18</option>
								<option value="Semana 19">Semana 19</option>
								<option value="Semana 20">Semana 20</option>
								<option value="Semana 21">Semana 21</option>
								<option value="Semana 22">Semana 22</option>
								<option value="Semana 23">Semana 23</option>
								<option value="Semana 24">Semana 24</option>
								<option value="Semana 25">Semana 25</option>
								<option value="Semana 26">Semana 26</option>
								<option value="Semana 27">Semana 27</option>
								<option value="Semana 28">Semana 28</option>
								<option value="Semana 29">Semana 29</option>
								<option value="Semana 30">Semana 30</option>
								<option value="Semana 31">Semana 31</option>
								<option value="Semana 32">Semana 32</option>
								<option value="Semana 33">Semana 33</option>
								<option value="Semana 34">Semana 34</option>
								<option value="Semana 35">Semana 35</option>
								<option value="Semana 36">Semana 36</option>
								<option value="Semana 37">Semana 37</option>
								<option value="Semana 38">Semana 38</option>
								<option value="Semana 39">Semana 39</option>
								<option value="Semana 40">Semana 40</option>
								<option value="Semana 41">Semana 41</option>
								<option value="Semana 42">Semana 42</option>
								<option value="Semana 43">Semana 43</option>
								<option value="Semana 44">Semana 44</option>
								<option value="Semana 45">Semana 45</option>
								<option value="Semana 46">Semana 46</option>
								<option value="Semana 47">Semana 47</option>
								<option value="Semana 48">Semana 48</option>
								<option value="Semana 49">Semana 49</option>
								<option value="Semana 50">Semana 50</option>
								<option value="Semana 51">Semana 51</option>
								<option value="Semana 52">Semana 52</option>
								<option value="Semana 53">Semana 53</option>
								<option value="Semana 54">Semana 54</option>
								<option value="Semana 55">Semana 55</option>

							</select>
						</div>
						<textarea name="comentario" placeholder="Comentario"></textarea>
						<input type="submit" name="enviar" value="SOLICITAR">
						<?php
						include("../php/suscritos.php");
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- FIN | programs -->
	
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
									<h3><i class="far fa-bookmark"></i>Oración / Intercesión</h3>
									<p><i class="far fa-clock"></i><b>HORA: </b><span>5:30</span> PM a <span>6:30</span> PM</p><br>
									<p>Trae tus <span>PETICIONES</span> al Altar del Señor y el hará conforme a los deseos de tu corazón.</p>
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
									<p>Trae a tu <span>FAMILIA</span> y a tus <span>AMIGOS</span> a la Casa del Señor para que reciban Palabra de Bendición.</p>
								</div>
							</div>
							<div class="footer__slider-content">
								<div>
									<h2><i class="fas fa-calendar-day"></i>Lunes y Martes</h2>
									<h3><i class="far fa-bookmark"></i>Oración / Intercesión</h3>
									<p><i class="far fa-clock"></i><b>HORA: </b><span>5:30</span> PM a <span>6:30</span> PM</p><br>
									<p>Trae tus <span>PETICIONES</span> al Altar del Señor y el hará conforme a los deseos de tu corazón.</p>
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
				<p>Cll 50 #80-20 Calazans - Medellín<br><b>TEL:</b> 502 29 18</p>
				<h3><i class="fas fa-map-marker-alt"></i>Sede Picacho</h3>
				<p>Cll 106C #85-34 Barrio Picacho - Medellín<br><b>TEL:</b> 301 427 33 48</p>
				<h3><i class="fas fa-map-marker-alt"></i>Sede Itagüí</h3>
				<p>Cra 52D #76-20 Diagonal al C.C Platino Itagüí<br><b>TEL:</b> 300 354 96 29</p>
			</div>
			<div class="line__footer"></div>
			<div class="footer__box footer__box-right">
				<h2>NOSOTROS</h2>
				<h3><i class="fas fa-book-open"></i> <a href="aboutme.html">Canon de Doctrina</a></h3>
				<h3><i class="fas fa-map-marker-alt"></i> <a href="contact.php">Nuestra Ubicación</a></h3>
				<h3><i class="fas fa-mobile-alt"></i> <a href="contact.php">Contactanos</a></h3>
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
		<div class="credits__container">© AguilArt Desing 2021 | Todos los Derechos Reservados</div>
	</footer>

	<!-- CDN App Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

	<script src="../js/modernizer.js"></script>
	<script src="../js/button.js"></script>
	<script src="../js/footer.js"></script>
	<script src="../js/goTop.js"></script>
	<script src="../js/menu.js"></script>
	<div id="markwater"></div>
</body>
</html>