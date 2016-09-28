<! DOCTYPE html>
<html lang="pt-br">

<head>
<link href="../css/estilo2.css" rel="stylesheet">
<link href="../bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>

<title>..:: lista do CI ::..</title>

</head>

<body>
	<div id="container" class="container">


		<section>

			<h1 id="admin">Listar Centro de Interesse</h1>
			<div class="table-responsive" id="conteudo">
				<form id="mainform" action="">
					<table width="100%" class="table-striped" id="product-table">

						<thead>
							<tr>


								<th>Nome</th>
								<th>Descricao</th>
									<th>Hora Inicio</th>
									<th>Hora Termino</th>
									<th>Orientador</th>
									<th>Quantidade Vagas</th>
									<th></th>

								

							</tr>
						</thead>
						<tbody>
								<?php
								include '../includes/conexao.php';
								
								// Corrige a acentuacao
								mysql_query ( "SET NAMES 'utf8'" );
								mysql_query ( 'SET character_set_connection=utf8' );
								mysql_query ( 'SET character_set_client=utf8' );
								mysql_query ( 'SET character_set_results=utf8' );
								
								$sql = mysql_query ( "SELECT * FROM tb_centro_interesse" );
								while ( $resultado = mysql_fetch_array ( $sql ) ) {
									$codigocentro = $resultado ['id_centro_interesse'];
									$nome = $resultado ['nome'];
									$descricao = $resultado ['descricao'];
									$horario_inicio = $resultado ['horario_inicio'];
									$horario_termino = $resultado ['horario_termino'];
									$orientador = $resultado ['orientador'];
									$quantidade_vagas = $resultado ['quantidade_vagas'];
									
									echo "<tr>
												<td>" . $nome . "</td>
												<td>" . $descricao . "</td>
												<td>" . $horario_inicio . "</td>
												<td>" . $horario_termino . "</td>
												<td>" . $orientador . "</td>
												<td>" . $quantidade_vagas . "</td>
												<td>	
												<a href='editar-centro.php?id=" . $codigocentro . "' title='Editar' class='glyphicon glyphicon-edit options-edit'></a>
													<a href='deletar-centro.php?id=" . $codigocentro . "' id='link-delete' title='Deletar' class='glyphicon glyphicon-minus-sign options-delet' data-title='Exclusão'></a>
												
												</td>
											  </tr>";
								}
								?>
							</tbody>
					</table>
				</form>
			</div>
		</section>


		<!-- END: footer -->
	</div>
	<script src="../js/jquery-1.12.3.min.js" type="text/java"></script>
	<script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>

</body>
</html>