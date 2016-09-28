<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd_centro_de_interesse";

	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "Não foi possível connectar ao servidor";
		exit;
	}
	
	/*Selecione o banco de dados ou morra*/
	$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
?>