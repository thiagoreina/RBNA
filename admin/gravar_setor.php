<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {
	
	// Recupera os dados dos campos
	$setor =		$_POST["setor"];
	
	
			// Insere os dados no banco
			$sql ="INSERT INTO setor VALUES ('', '".$setor."')";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 echo "Salvo com sucesso.";
				 
			}else{
				 echo "Erro ao Salvar.";
				 }
		}

	
?>