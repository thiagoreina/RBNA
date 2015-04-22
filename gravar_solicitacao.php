<?php
// Conexão com o banco de dados
include_once 'fontes/conexao.php';
include_once 'validar.php';


// Se o usuário clicou no botão cadastrar efetua as ações

	
	// Recupera os dados dos campos
	$id_func =	$_POST["idfunc"];
	$id_setor = $_POST["setor"];
	$solicitacao =	 	nl2br($_POST["solicitacao"]);
	

	
	
	setlocale(LC_ALL, 'pt_BR');
$datatime = date('Y-m-j H:m:s');


			// Insere os dados no banco
			$sql = "INSERT INTO rbna5.solicitacao (id, id_funcionario, id_setor, data, solicitacao, pendente) VALUES (NULL, '".$id_func."', '".$id_setor."', '".$datatime."', '".$solicitacao."', '1')";
			
			
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 $msg = "Salvo com sucesso.";
				 header("location:fazer_solicitacao.php?msg=".$msg);
				 
			}else{
				
				echo"Deu ruim<br>".$sql;
				$msg = "Erro ao Salvar.";
				 header("location:fazer_solicitacao.php?msg=".$msg);
				}
?>