	<!DOCTYPE html>
	<html lang="es">
	<head>

		<meta charset="UTF-8">	
		<title>Publicidad Lopez</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="foundation/css/foundation.css" />
		<link rel="stylesheet" href="src/css/style.css">
	    <link href='http://fonts.googleapis.com/css?family=Stalemate' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>	
			  <script src="foundation/js/vendor/modernizr.js"></script>
              <script src="foundation/js/vendor/jquery.js"></script>
			  <script src="foundation/js/foundation/foundation.js"></script>
			  <script src="foundation/js/foundation/foundation.topbar.js"></script>
		@yield('js')
		
	</head>

	<body>

	<div id="cf">

		<header>
			<div class="contain-to-grid">
				<nav class="top-bar" data-topbar role"navigation">
					<ul class="title-area">
						<li class="name"><h1><a href="home">Inicio</a></h1></li>
						<li class="toggle-topbar menu-icon not-click"><a href="#"><span>Menu</span></a></li>
				</ul>
					<section class="top-bar-section">
						
						<ul>
							<li><a href="quienessomos">Quienes somos</a></li>
							<li class="has-dropdown not-click">
								<a href="#">Trabajos realizados</a>
								<ul class="dropdown">
									<li><a href="pancartas">Pancartas</a></li>
									<li><a href="avisos">Avisos</a></li>
									<li><a href="tapetes">Tapetes</a></li>
								</ul>
							</li> 
							<li class=""><a href="contactanos">Contactanos</a></li>
							<li class=""><a href="#">Nose</a></li>
						</ul>
					</section>

				</nav>


				
			</div>
			</header>

			@yield('content')
			</div>
				<footer>

					
						
						<div class="columns small-6 medium-6 large-6">
							Jose Lopez
							<br>
							3124765394
							<br>
							Publicidad Lopez ltda.
						</div>

						<div class="columns small-6 medium-6 large-6">
							publicidadlopez@yahoo.com.ar
							<br>
							Cra20 #50-35
							<br>
							2355042
							<br>
							By Nicolas Lopez
						</div>
						
					
					<!-- </article>
					
				</section> -->
			</footer>




			  <!-- Other JS plugins can be included here -->

			  
			  @yield('scriptsExtras')
			  <script>
			    $(document).foundation();
			  </script>
		
	</body>
	</html>


