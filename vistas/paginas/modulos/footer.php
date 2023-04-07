<!--=====================================
CONTÁCTENOS
======================================-->

<div class="contactenos container-fluid bg-white py-4" id="contactenos">
	
	<div class="container text-center">
		
		<h1 class="py-sm-4">CONTÁCTENOS</h1>

		<form method="post">

			<div class="input-group input-group-lg">
				
				<input type="text" class="form-control mb-3 mr-2 form-control-lg" placeholder="Nombre" name="nombreContactenos" required>

				<input type="text" class="form-control mb-3 ml-2 form-control-lg" placeholder="Apellido" name="apellidoContactenos" required>

			</div>

			<div class="input-group input-group-lg">
				
				<input type="text" class="form-control mb-3 mr-2 form-control-lg" placeholder="Móvil" name="movilContactenos" required>

				<input type="text" class="form-control mb-3 ml-2 form-control-lg" placeholder="Correo Electrónico" name="emailContactenos" required>

			</div>

			<textarea class="form-control" rows="6" placeholder="Escribe aquí tu mensaje" name="mensajeContactenos" required></textarea>

			<button type="submit" class="btn btn-dark my-4 btn-lg py-3 text-uppercase w-50">ENVIAR</button>
			
			<?php

				$contactenos = new ControladorUsuarios();
				$contactenos -> ctrFormularioContactenos();
			
			?>

		</form>

	</div>

</div>

<!--=====================================
MAPA
https://www.google.com/maps/place/Sheraton+Lima+Hotel+%26+Convention+Center/@-12.0917202,-77.0366091,13z/data=!4m11!1m2!2m1!1sHoteles!3m7!1s0x9105c8c6cfd5a029:0x21e996eeb5d06b7d!5m2!4m1!1i2!8m2!3d-12.0572872!4d-77.0370224
======================================-->
<div class="mapa container-fluid bg-white p-0">
	
	<iframe src="https://www.google.com/maps/place/Hotel+Restaurant+Transmontano/@8.1282978,-63.5351171,17z/data=!4m6!3m5!1s0x8dce86fd85db8a6f:0x371c342299ce74f7!8m2!3d8.1282978!4d-63.5329284!16s%2Fg%2F11bwkb8c8t" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	<div class=" p-4 info"> 

		<h3 class="mt-4"><strong>VISITANOS</strong></h3>
		<p></p>

		<p>
		<br>
		<br>
		Av. Upata Edif. Siracrusa Local 01<br>
		0285 - 6178299
		</p>

		<p class="pb-4">Email: hoteltransmontano@outlook.com<br>
		</p>

	</div>	

</div>

<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid p-0">

	<div class="grid-container">
			
		<div class="grid-item d-none d-lg-block pt-2"></div>

		<div class="grid-item d-none d-lg-block pt-2">
			
			<p>Copyright © 2023 HOTEL RESTAURANTE TRANSMONTANO . Todos los derechos reservados.</p>

		</div>

		<div class="grid-item pt-2">
			
			<ul class="py-1">

				<li>
					<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white float-left mx-3"></i></a>
				</li>

				<li>
					<a href="#" target="_blank"><i class="fab fa-twitter lead text-white float-left mx-3"></i></a>
				</li>

				<li>
					<a href="#" target="_blank"><i class="fab fa-youtube lead text-white float-left mx-3"></i></a>
				</li>


				<li>
					<a href="#" target="_blank"><i class="fab fa-instagram lead text-white float-left mx-3"></i></a>
				</li>	
			
			</ul>	

		</div>

	</div>

</footer>

<!--=====================================
REDES SOCIALES MÓVIL
======================================-->

<ul class="redesMovil p-2 nav nav-justified">

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-twitter lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-youtube lead text-white"></i></a>
	</li>

	<li class="nav-item">
		<a href="#" target="_blank"><i class="fab fa-instagram lead text-white"></i></a>
	</li>	

</ul>	
