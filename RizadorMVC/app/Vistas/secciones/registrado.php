<div class="login-page">
	<div class="form">
		<form action="index.php#ReservaYA" method="post">
				<input type="text" name="numCedulaRegistrado" onkeyup="var no_digito = /\D/g; this.value = this.value.replace(no_digito , '');" placeholder="Escriba el número de cedula">

				<div id="contentCaptcha">
					<div class="g-recaptcha" data-sitekey="6Le4_RoUAAAAAP5OXRli6RN6jndLkCaqTITTNqGL"></div>
				</div>
				<input type="submit" value="BUSCAR">
		</form>
	</div>
</div>	