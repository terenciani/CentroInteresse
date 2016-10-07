<! DOCTYPE html>
<html lang="pt-br">
<head>


<meta charset="utf-8"></meta>

<link href="../bootstrap-3.3.6/css/bootstrap.min.css"
	rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link href="../css/style.css" rel="stylesheet">
<title>..:: Editar o CI ::..</title>

</head>

	                                                                          
	<?php
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
	<body class="corpo">
	
	 <div class="container">
		<header class="centralizado">
			<h1>Editar Centro</h1>
		</header>

		<form id="form1" name="form1" method="post"
			action="atualizar-centro.php">
			
			<input type="hidden" class="form-control" id="nome" name="campoid" value="<?php echo $codigocentro; ?>" />
			<div class="form-group">
				 <span class="glyphicon glyphicon-user"></span> <label for="txt_nome">NOME :</label>
				<input type="text" class="form-control" id="nome" name="camponome" value="<?php echo $nome; ?>" required/>
			</div>
			
			
			
			<div class="form-group">
				 <span class="glyphicon glyphicon-edit"></span> <label for="txt_descricao">DESCRIÇÃO :</label>
				<textarea class="form-control " rows="3" id="descricao" name="campodescricao"  required ><?php echo $descricao; ?></textarea>
			</div>
			
			<div class="row"> 
				<div class="col-md-6">
					<div class="form-group">
						  <label class="glyphicon glyphicon-time font-negrito" for="txt_codigo"> HORARIO DE ÍNICIO :</label> <input
							type="time" class="form-control " id="horario_inicio" name="campoinicio" value="<?php echo $horario_inicio; ?>" required/>
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="form-group">
						 <label class="glyphicon glyphicon-time font-negrito" for="txt_codigo"> HORARIO DE TERMINO :</label> <input
							type="time" class="form-control " id="horario_inicio" name="campotermino" value="<?php echo $horario_termino; ?>" required/>
					</div>
				</div>
			</div>
			
			
			<div class="form-group">
				 <span class="glyphicon glyphicon-pencil"></span> <label for="txt_orientador">ORIENTADOR :</label>
				<input type="text" class="form-control" id="orientador" name="campoorientador" value="<?php echo $orientador; ?>" required/>
			</div>
			
			
			
			<div class="form-group">
				 <label class="glyphicon glyphicon-tags font-negrito" for="txt_vagas"> TIPO :</label> <input type="number"
					class="form-control " id="tipo" name="campotipo" value="<?php echo $tipo; ?>" required/>
			</div>
			
			
			
			<div class="form-group">
				 <label class="glyphicon glyphicon-th-list font-negrito" for="txt_vagas"> QUANTIDADE DE VAGAS :</label> <input type="number"
					class="form-control " id="vagas" name="campoqtdvagas" value="<?php echo $quantidade_vagas; ?>" required/>
			</div>
		
		
		
			<div class="form-group centralizado">
			
				<h2>
					<button type="reset" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> CANCELAR
					</button>
					<button type="submit" class="btn btn-success">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> CONFIRMAR
					</button>
				</h2>
			</div>
		</form>
	</div>
</body>
</html>