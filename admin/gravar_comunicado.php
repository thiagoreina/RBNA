<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

// Se o usuário clicou no botão cadastrar efetua as ações

	
	// Recupera os dados dos campos
	$id_funcionario =	$_POST["id_funcionario"];
	$comunicado =	 	nl2br($_POST["comunicado"]);

	
	if (!isset($_POST["checkbox"])){
	$ativo = 0;
	}else{
	$ativo = 			$_POST["checkbox"];
	
	}
	setlocale(LC_ALL, 'pt_BR');
$datatime = date('Y-m-j H:m:s');


			// Insere os dados no banco
			$sql ="INSERT INTO comunicado VALUES ('', ".$id_funcionario.", '".$datatime."', '".$comunicado."', '".$ativo."')";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 $msg = "Salvo com sucesso.";
				 header("location:cad_comunicado.php?msg=".$msg);
			}else{
				 $msg = "Erro ao Salvar.";
				 header("location:cad_comunicado.php?msg=".$msg);
				}
?>