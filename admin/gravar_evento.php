<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

	
	$dia = $_POST["Dia"];
	$mes = $_POST["Mes"];
	$ano = $_POST["Ano"];
	$titulo = $_POST["titulo"];
	$pasta = $_POST["nomepasta"];
	$descricao = nl2br($_POST["descricao"]);
	$id_funcionario =	$_POST["id_funcionario"];
	
	
$data = $ano."-".$mes."-".$dia;


			// Insere os dados no banco
			$sql ="INSERT INTO eventos VALUES ('', '".$titulo."', '".$descricao."', '".$data."', '".$pasta."', '".$id_funcionario."')";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 $msg = "Salvo com sucesso.";
				 header("location:cad_evento.php?msg=".$msg);
			}else{
				 $msg = "Erro ao Salvar.";
				 header("location:cad_evento.php?msg=".$msg);
				}
?>