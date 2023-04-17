<?php
	//Conectando ao banco
	include_once("../conexaoBD.php");
	//Tabela no BD
	$tabela="cadastro";
	//define campos do insert
	$campos = "nome, email, telefone, senha";
	
	//se o botão for pressionado
	if (isset($_GET['cadastrar'])) {
		//traz as variáveis do formulário
		$nome = $_GET['nome'];
		$email = $_GET['email'];
        $tel = $_GET['telefone'];
        $senha = $_GET['senha'];
		
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$nome','$email','$tel','$senha')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} 
		else {
			mysqli_close($conexao);
			header ('Location: ../login/login.php');
			exit;
		}
	}	
?>