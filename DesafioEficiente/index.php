<?php
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Desafio Eficiente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" language="javascript"src="js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript"src="js/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery-1.11.3"></script>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
    <style type="text/css">
      
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->

  </head>

  <body>
  </body>
</html>


<?php
include ("file_generate.php");
include ("cabecalho.php");
include ("Classes/PHPExcel.php");
include ("DAO/connection.php");
include ("DAO/crud.php");

$permition = array("home", "compare", "export");

if(!empty($_GET)){
	foreach ($_GET as $key => $value)
		$$key = trim(strip_tags($value));
	
	if(isset($_GET["page"]) && (array_search($_GET["page"], $permition) !== false)){
		include ("/".$value.".php");
	}else {
		header("Location:/home.php");
	}
}else{
	include ("/home.php");
}

include ("/rodape.php");
