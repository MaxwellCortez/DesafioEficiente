<?php
					
if(isset($_POST["Exportar"])){
	// Nome do Arquivo do Excel que será gerado
	$file = new teste();
	$file->generateFile();

}
?>
<html>
	<head>
	</head>
	<body>
		<div class="container-fluid cbcenter">
		<div class="row-fluid">
			<form action="" method="POST">
				<input type="submit" value="Exportar" name="Exportar">
			</form>
		</div>
	</div>
	</body>
</html>