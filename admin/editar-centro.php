<! DOCTYPE html>
<html lang="pt-br">
<head>


<meta charset="utf-8"></meta>
<link href="../css/estilo2.css" rel="stylesheet">
<link href="../bootstrap-3.3.6/css/bootstrap.min.css"
	rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>

<title>..:: Editar o CI ::..</title>

</head>

	                                                                          
	<?php
	// Corrige a acentuacao
	mysql_query ( "SET NAMES 'utf8'" );
	mysql_query ( 'SET character_set_connection=utf8' );
	mysql_query ( 'SET character_set_client=utf8' );
	mysql_query ( 'SET character_set_results=utf8' );
	
	include '../includes/conexao.php';
	
	$codigo = $_GET ['id'];
	
	$sql = mysql_query ( "SELECT * FROM tb_centro_interesse WHERE id_centro_interesse =  '" . $codigo . "' " );
	
	$resultado = mysql_fetch_array ( $sql );
	
	$codigocentro = $resultado ['id_centro_interesse'];
	$nome = $resultado ['nome'];
	$descricao = $resultado ['descricao'];
	$horario_inicio = $resultado ['horario_inicio'];
	$horario_termino = $resultado ['horario_termino'];
	$orientador = $resultado ['orientador'];
	$quantidade_vagas = $resultado ['quantidade_vagas'];
	$tipo = $resultado ['tipo'];
	
	?>
	<body>
	<div id="container" class="container">


		<header class="centralizado">
			<h1>Editar Centro</h1>
		</header>

		<form id="form1" name="form1" method="post"
			action="atualizar-centro.php">

			<div class="form-group" style="display: none;">
				<span class="glyphicon glyphicon-user"></span> <label for="txt_codigo">Código:</label>
				<!-- a tag input representa uma entrada de dados do usuario, é necessário informar o tipo desta entrada de dados. -->
				<input type="text" class="form-control" id="txt_codigo"
					name="campoid" value="<?php echo $codigocentro; ?>" />
			</div>
			<div class="form-group">
				<span class="glyphicon glyphicon-user"></span> <label for="txt_nome">Nome:</label>
				<!-- a tag input representa uma entrada de dados do usuario, é necessário informar o tipo desta entrada de dados. -->
				<input type="text" class="form-control" id="txt_nome"
					name="camponome" value="<?php echo $nome; ?>" />
			</div>
			<div class="form-group">
				<span class="glyphicon glyphicon-edit"></span> <label
					for="txt_descricao">Descrição:</label>
				<!-- a tag input representa uma entrada de dados do usuario, é necessário informar o tipo desta entrada de dados. -->
				<textarea class="form-control" rows="5" id="descricao"
					name="campodescricao"  required ><?php echo $descricao; ?></textarea>
			</div>
			<div class="form-group">
				<label for="txt_codigo">horário de início:</label> <input
					type="time" class="form-control" id="txt_name" name="campoinicio"
					value="<?php echo $horario_inicio; ?>" />

			</div>
			<div class="form-group">
				<label for="txt_codigo">horário de término:</label> <input
					type="time" class="form-control" id="txt_name" name="campotermino"
					value="<?php echo $horario_termino; ?>" />

			</div>

			<div class="form-group">
				<span class="glyphicon glyphicon-pencil"></span> <label
					for="txt_orientador">Orientador:</label>
				<!-- a tag input representa uma entrada de dados do usuario, é necessário informar o tipo desta entrada de dados. -->
				<input type="text" class="form-control" id="txt_orientador"
					name="campoorientador" value="<?php echo $orientador; ?>" />
			</div>

			<div class="form-group">
				<label for="txt_vagas">Tipo:</label> <input type="number"
					class="form-control" id="txt_tipo" name="campotipo"
					value="<?php echo $tipo; ?>" />
			</div>
			<div class="form-group">
				<label for="txt_vagas">Quantidade de vagas:</label> <input type="number"
					class="form-control" id="txt_vagas" name="campoqtdvagas"
					value="<?php echo $quantidade_vagas; ?>" />
			</div>


			<div class="form-group centralizado">
				<input type="reset" value="Cancelar" class="btn btn-danger btn-lg" />
				<input type="submit" value="Salvar" class="btn btn-success btn-lg" />

			</div>
		</form>
	</div>
</body>
</html>