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
		echo "Sucesso: Atualizado corretamente!";
	}
	
	
	
	mysql_close($conexao);
?>