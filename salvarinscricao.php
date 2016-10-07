<html>
<head>
<meta charset="utf-8"></meta>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
<link href="../bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link href="css/estilo.css" rel="stylesheet" />
<title>salvar inscrição</title>
</head>
<body>
	<div id="container" class="container">
		<header class="jumbotron teste">
<?php
	$podeinserir=true;
	
	$nome = $_POST['nome'];
	$codigo=  $_POST['meucodigo'];
	$turma = $_POST['turma'];
	$opcao1 = $_POST['opcao1'];
	$opcao2 = $_POST['opcao2'];
	
	
	include 'includes/conexao.php';
	
	
	
	$comandosql = "SELECT  quantidade_vagas, tipo FROM tb_centro_interesse WHERE id_centro_interesse = ".$opcao1;
	$resultado = mysql_query($comandosql);
	
	if (mysql_errno()) {
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>";
		echo $error;
	}
	$itembancodados = mysql_fetch_array($resultado);
	$qtdevagas1 = $itembancodados['quantidade_vagas'];
	$tipo1 = $itembancodados['tipo'];
	
	
	$comandosql = "SELECT count(*) as total FROM tb_inscricao WHERE centro_de_interesse_um=".$opcao1;
	$resultado = mysql_query($comandosql);
	$itembancodados = mysql_fetch_assoc($resultado);
	$qtdeinscritosc1 = $itembancodados['total'];
	
	if ($qtdeinscritosc1 >= $qtdevagas1){
		echo "<h1>Não existem vagas na sua primeira opção, tente novamente</h1>";
		echo "<a href='inscricao.php'>Clique aqui para voltar</a>";
		$podeinserir=false;
	} 
		

	$comandosql = "SELECT  quantidade_vagas, tipo FROM tb_centro_interesse WHERE id_centro_interesse = ".$opcao2;
	$resultado = mysql_query($comandosql);
	
	if (mysql_errno()) {
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>";
		echo $error;
	}
	$itembancodados = mysql_fetch_array($resultado);
	$qtdevagas2 = $itembancodados['quantidade_vagas'];
	$tipo2 = $itembancodados['tipo'];
	
	$comandosql = "SELECT count(*) as total FROM tb_inscricao WHERE centro_de_interesse_dois=".$opcao2;
	$resultado = mysql_query($comandosql);
	

	if (mysql_errno()) {
		$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>";
		echo $error;
	}
	$itembancodados = mysql_fetch_assoc($resultado);
	$qtdeinscritosc2 = $itembancodados['total'];
	
	
	if ($qtdeinscritosc2 >= $qtdevagas2){
		echo "<h1>Não existem vagas na sua segunda opção, tente novamente</h1>";
		echo "<a href='inscricao.php'>Clique aqui para voltar</a>";
		$podeinserir=false;
	}
	
	
	
	if ($tipo1 == $tipo2){
		echo "<h1>Selecione opções diferentes</h1>";
		echo "<a href='inscricao.php'>Clique aqui para voltar</a>";
		$podeinserir=false;
	}
	

	$comandosql = "SELECT count(*) as total FROM tb_inscricao WHERE matricula=".$codigo;
	$resultado = mysql_query($comandosql);
	$itembancodados = mysql_fetch_assoc($resultado);
	$qtdecodigodoaluno = $itembancodados['total'];

	if ($qtdecodigodoaluno >=1 ){
		echo "<h1>Esse código do aluno ja esta cadastrado, tente novamente</h1>";
		echo "<a href='inscricao.php'>Clique aqui para voltar</a>";
		$podeinserir=false;
	}
	
	if($podeinserir){	

		$comandosql = "INSERT INTO tb_inscricao VALUES ('','$codigo', '$nome', '$turma', '$opcao1','$opcao2', '2016-08-24', '07:10:00')";		
		 $comandosql;
		
		$resultado = mysql_query($comandosql);

		
		if (mysql_errno()) { 
		  $error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>"; 
		  echo $error; 
		}else{
			echo "<h1>Cadastro Realizado com sucesso</h1>";
			echo "<a href='inscricao.php'>Clique aqui para realizar uma nova inscricao</a>";
		}
	}
	mysql_close();
?>
		</header>
	</div>
<body>
</html>