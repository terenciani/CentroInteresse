<! DOCTYPE html>
<html lang="pt-br">
<head>
<link href="estilo.css" rel="stylesheet">
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

<title>..:: Deletar o CI ::..</title>


<!--  Nucleo do jquery -->
<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<h1 id="admin">

<?php
	include 'includes/conexao.php';
	
	
	
	// Corrige a acentuacao
	mysql_query ( "SET NAMES 'utf8'" );
	mysql_query ( 'SET character_set_connection=utf8' );
	mysql_query ( 'SET character_set_client=utf8' );
	mysql_query ( 'SET character_set_results=utf8' );
	
	
	$id = $_GET['id']; // Recebendo o valor enviado pelo link
	
	$sql = mysql_query("DELETE FROM tb_centro_interesse WHERE id_centro_interesse='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida
	
	
	if ($sql) {
		echo "Registro excluido com sucesso";
		echo "<a href='listar_centro.php'> Clique aqui para voltar</a>";
	}
	
	mysql_close($conexao); 
	
?>
</h1>
</html>