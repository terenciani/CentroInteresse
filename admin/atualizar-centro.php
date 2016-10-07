<html>
<head>
<meta charset="utf-8"></meta>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
<link href="../bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link href="../css/estilo.css" rel="stylesheet" />
<title>atualizar Centro</title>
</head>
<body>
	<div id="container" class="container	">
		<header class="jumbotron teste">
<?php
	$id = $_POST ['campoid'];
	$nome = $_POST ['camponome'];
	$descricao = $_POST ['campodescricao'];
	$horario_inicio = $_POST ['campoinicio'];
	$horario_termino = $_POST ['campotermino'];
	$orientador = $_POST ['campoorientador'];
	$quantidade_vagas = $_POST ['campoqtdvagas'];
	$tipo = $_POST ['campotipo'];
	
	include '../includes/conexao.php';
	
	
	$up = mysql_query("UPDATE tb_centro_interesse SET nome='$nome', descricao='$descricao', horario_inicio='$horario_inicio', horario_termino='$horario_termino', orientador='$orientador', quantidade_vagas='$quantidade_vagas', tipo='$tipo' WHERE id_centro_interesse=$id");
	
	if (mysql_errno ()) {
		$error = "MySQL error " . mysql_errno () . ": " . mysql_error ();
		echo $error;
	} else{
		echo "<h1>Sucesso: Atualizado corretamente!</h1>";
		echo "<a href='http://localhost/Centrointeresse/admin/listar-centro.php'>Clique aqui para voltar a lista</a>";
	}
	
	
	
	mysql_close($conexao);
?>
		</header>
	</div>
<body>
</html>