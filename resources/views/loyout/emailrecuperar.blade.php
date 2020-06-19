
<div class="container">
		<h3>
		<script>
			dataTime();
		</script>
		</h3>

		<br>

		<h1>Hola {{ $msg['email']}}</h1>
		<div class="texto">
			<p>
			Querido usuario de este sistema de la Delegación Municipal de San Pedro, sabemos que no recuerda su contraseña, así que aquí le proporcionamos una contraseña provicional para que pueda ingresar al sistema.
			</p>

			<p>
				Su nueva contraseña es: <strong class="pws"> {{ $pw_enc}}</strong> 
				<br>
				<p class="nota">Todas las contraseñas enviadas son <strong>letras minusculas</strong></p>
			</p>

			<p>
				Para poder cambiar su contraseña contacte al desarrollador para poder lograrlo.
			</p>
		</div>


