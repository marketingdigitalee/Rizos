<div class="login-page">
	<div class="form">

	<form action="config.php" method="post">
		<input type="text" name="numCedulaRegistrado" placeholder="Escriba el número de cédula" onkeyup="var no_digito = /\D/g; this.value = this.value.replace(no_digito , '');">
		<br/> <br/>
		
			<button>
				<input type="submit" value="Buscar">
			</button>
		</div>
		
	</form>
	</div>
</div>