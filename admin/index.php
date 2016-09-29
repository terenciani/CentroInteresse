<?php include 'includes/conexao.php'; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Inscrição do Centro Interesse</title>
<link href="bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>
	<div id="container-um" class="thumbnail">
		<div id="container-dois" class="thumbnail">
			<h1>Inscrição do Centro Interesse</h1>
		</div>
		<?php    
			 //abaixo, criamos uma variavel que terá como conteúdo o endereço para onde haverá o redirecionamento:  
			 $redirect = "listar-centro.php";
			 
			 //abaixo, chamamos a função header() com o atributo location: apontando para a variavel $redirect, que por 
			 //sua vez aponta para o endereço de onde ocorrerá o redirecionamento
			 header("location:$redirect");
		?>
	</div>
</body>
</html>