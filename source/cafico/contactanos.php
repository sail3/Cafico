<?php 
$page_title = "Contactanos";
$ruta = "contactanos";
include('templates/header.php');
 ?>
<div class="wrapper">
	<?php include('templates/menu-header.php'); ?>
	<div class="contactanos-content">
		<p class="contacto-info">
			ANTE CUALQUIER DUDA, COMENTARIO Y/O SUGERENCIA NO DUDEN EN CONTACTARNOS,<br>
			DE LA MANERA MAS EFICIENTE ACLARAREMOS SUS INQUIETUDES, PUEDE UBICARNOS CON LOS SIGUIENTES DATOS:<br><br>
			POR FAVOR, TENGA A BIEN ENVIARNOS UN MENSAJE COMPLETANDO LOS SIGUIENTES CAMPOS, SERAN RESPONDIDOS A LA BREVEDAD DADA:<br>
		</p><div class="clear"></div>
		<form id="formulario-contacto" action="contactanos.php" method="post">
			<div class="form-item">
				<label for="txt-nombre">Nombre: </label>
				<input type="textfield" id="txt-nombre"><br>
			</div>
			<div class="form-item">
				<label for="txt-telefono">Telefono: </label>
				<input type="textfield" id="txt-telefono"><br>
			</div>
			<div class="form-item">
				<label for="txt-mail">E-mail: </label>
				<input type="textfield" id="txt-mail"><br>
			</div>
			<div class="form-text-area">
				<label for="txt-mensaje">Mensaje: </label>
				<textarea name="txt-mensaje" id="txt-mensaje" cols="30" rows="10"></textarea><br>
			</div>
			<div class="form-item">
				<button type="submit">ENVIAR</button>
			</div>
		</form>
	</div>
</div>
<?php include('templates/footer.php'); ?>
</body>
</html>