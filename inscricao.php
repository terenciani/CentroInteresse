<?php include 'includes/conexao.php'; ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Inscrição do Centro Interesse</title>
	<link href="bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script>
	function SomenteNumero(e) {
		var tecla = (window.event) ? event.keyCode : e.which;
		if ((tecla > 47 && tecla < 58))
			return true;
		else {
			if (tecla == 8 || tecla == 0)
				return true;
			else
				return false;
		}
	}
	
	
	function SomenteLetra(e) {
		var tecla = (window.event) ? event.keyCode : e.which;
		if ((tecla > 64 && tecla < 91) || (tecla > 96 && tecla < 123))
			return true;
		else {
			if (tecla == 8 || tecla == 0)
				return true;
			else
				return false;
		}
	}
	function confirmou(form) {
		  if (form.TERMODEDECLARACAO.checked == false) {
			  alert("Você precisa concondar com os termos");
			  document.getElementById("TERMODEDECLARACAO").focus();
				return false;
		  }
		  return true;
	}
</script>
</head>
<body class="corpo">
		<div class="container">
			<h1>Inscrição do Centro Interesse</h1>
		
			
			<form id="formulario" action="salvarinscricao.php"
				onsubmit="return confirmou(this);" role="form" method="POST">
				
				
				<div class="form-group">
					<label for="txt_nome"><span
						class="glyphicon glyphicon-user" aria-hidden="true"></span>
						NOME:</label> <input type="text" class="form-control" id="nome"
						name="nome" onkeypress='return SomenteLetra(event)' required/>
				</div>
				
				
				<div class="form-group">
					<label for="txt_codigo"><span class="glyphicon glyphicon-list-alt"
						aria-hidden="true"></span> CÓDIGO DO ALUNO:</label> <input
						type="text" class="form-control" id="codigo" name="meucodigo"
						onkeypress='return SomenteNumero(event)' required/>
				</div>
				
				
				<div class="form-group">
					<label for="txt_turma"><span class="glyphicon glyphicon-education"
						aria-hidden="true"></span> TURMA:</label> <input type="text"
						class="form-control" id="turma" name="turma" required/>
				</div>
				
				
				<div class="form-group">
					<label for="centrodeinsteresse-um"><span
						class="glyphicon glyphicon-pencil" aria-hidden="true"></span> CENTRO
						DE INTERESSE 1:</label> <SELECT class="form-control"
						ID="centrodeinsteresse-um" name="opcao1">
						<OPTION VALUE="0">Insira...</option>
					 	<?php
							$query = "SELECT * FROM tb_centro_interesse WHERE horario_inicio='12:30:00'";
							$result = mysql_query ( $query );
							while ( $resultado = mysql_fetch_row ( $result ) ) {
								echo "<OPTION VALUE='" . $resultado [0] . "'>" . $resultado [1] . "</option>";
							}
							?>
						</SELECT>
				</div>
				
				
				<div class="form-group">
					<label for="centrodeinsteresse-dois"><span
						class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						CENTRO DE INTERESSE 2:</label> <SELECT class="form-control"
						ID="centrodeinsteresse-dois" name="opcao2">
						<OPTION VALUE="0">Insira...</option>
						<?php
						$query = "SELECT * FROM tb_centro_interesse WHERE horario_inicio='14:10:00'";
						$result = mysql_query ( $query );
						while ( $resultado = mysql_fetch_row ( $result ) ) {
							echo "<OPTION VALUE='" . $resultado [0] . "'>" . $resultado [1] . "</option>";
						}
						?>
					</SELECT><br>
				</div>
				
				
				<h2>
					<INPUT TYPE="checkbox" NAME="TERMODEDECLARACAO"
	ID="TERMODEDECLARACAO" VALUE="IE3" />Declaro estar ciente, que não poderei trocar de centro de interesse entre o semestre.<br>
				</h2>
				
				
				<h2>
					<button type="reset" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> CANCELAR
					</button>
					<button type="submit" class="btn btn-success">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> CONFIRMAR
					</button>
				</h2>
	
	
			</form>
		</div>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
</body>
</html>