<html>
<head>
<meta charset="utf-8"></meta>
<script type="text/javascript" src="../js/jquery-1.12.3.min.js"></script>
<link href="../bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link href="../css/estilo.css" rel="stylesheet" />
<title>Inserir Centro</title>
</head>
<body>
	<div id="container" class="container	">
		<header class="jumbotron teste">
        
			<?php
				include '../includes/conexao.php';
				
				$nome = $_POST ['camponome'];
				$descricao = $_POST ['campodescricao'];
				$inicio = $_POST ['campoinicio'];
				$termino = $_POST ['campotermino'];
				$orientador = $_POST ['campoorientador'];
				$qtdvagas = $_POST ['campoqtdvagas'];
				$tipo = $_POST ['campotipo'];
				
				mysql_query ( "SET NAMES 'utf8'" );
				mysql_query ( 'SET character_set_connection=utf8' );
				mysql_query ( 'SET character_set_client=utf8' );
				mysql_query ( 'SET character_set_results=utf8' );
				
				$resultado = mysql_query ( "INSERT INTO tb_centro_interesse VALUES ('', '$nome', '$descricao', '$inicio', '$termino', '$orientador', $qtdvagas, $tipo)" );
				
				if (mysql_errno ()) {
					$error = "MySQL error " . mysql_errno () . ": " . mysql_error ();
					echo $error;
				} else {
					echo "<h1> Inscrição realizada 	<br /> com sucesso</h1>";
					echo "<a href='http://localhost/CentroInteresse/admin/cadastrar-centro.html'> Clique aqui para cadastrar um novo centro </a>";
				}
				/* Encerra a conexao */
				mysql_close ();
			?>
		</header>
	</div>


<body>

</html>