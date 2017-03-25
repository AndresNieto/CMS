<?php ob_start() ?>

<div>
	<h1>MENU</h2>
	<h2><a href="/moe/index.php/ingresarpaciente">INGRESAR PACIENTE</h2>
</div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>