<?php
	include("../config.inc.php");
?>
<html>
<head>
    <title>MeuSite.com</title>
    <link rel="stylesheet" type="text/css" 
          href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/novocss.css">
</head>
<body>
	<?php
		include_once('../topo.php');
		include_once('valida_cookie.inc.php');
	?>
	
	<div class='container'>
	<h1>
		Painel Admin. 
		<span> <a href="?pg=sair" class="btn btn-primary">Sair</a></span>
	</p>
	</h1>
	
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "listar.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
</body>
</html>