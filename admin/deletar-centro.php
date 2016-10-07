<html>
<head>
<meta charset="utf-8"></meta>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
<link href="../bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link href="../css/estilo.css" rel="stylesheet" />
<title>salvar inscrição</title>
</head>
<body>
	<div id="container" class="container">
		<header class="jumbotron teste">
<?php
	include '../includes/conexao.php';
	
	
	
	// Corrige a acentuacao
	mysql_query ( "SET NAMES 'utf8'" );
	mysql_query ( 'SET character_set_connection=utf8' );
	mysql_query ( 'SET character_set_client=utf8' );
	mysql_query ( 'SET character_set_results=utf8' );
	
	
	$id = $_GET['id']; // Recebendo o valor enviado pelo link
	
	$sql = mysql_query("DELETE FROM tb_centro_interesse WHERE id_centro_interesse='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida
	
	
	if ($sql) {
		echo "<h1>Registro excluido com sucesso<h1>";
		echo "<a href='listar-centro.php'> Clique aqui para voltar</a>";
	}
	
	mysql_close($conexao); 
	
?>
		</header>
	</div>
<body>
</html>