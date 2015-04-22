<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';

// Se o usuário clicou no botão cadastrar efetua as ações

	
	// Recupera os dados dos campos
	$registro =	 	$_POST["registro"];
	$embarcacao =	 		$_POST["embarcacao"];
	$numerocasco = 	$_POST["numerocasco"];
	$contratante = 	$_POST["contratante"];
	$armador =	$_POST["armador"];
	$regiao = 		$_POST["regiao"];
	$tipoembarcacao = 		$_POST["tipoembarcacao"];
	$pagamento = 		$_POST["pagamento"];
	$servico =		nl2br($_POST["servico"]);
	$qtddias = 		$_POST["qtddias"];
	$obs =		nl2br($_POST["obs"]);
	$forarbna = $_POST["forarbna"];
	$certrbna = $_POST["certrbna"];
	$inadimplentes = $_POST["inadimplentes"];
	$insatisfeitos = $_POST["insatisfeitos"];

if(!isset ($_POST["forarbna"])){
		$forarbna = 0;	
	}else{
		$forarbna = $_POST["forarbna"];
	};
	
	//---------
	if(!isset ($_POST["certrbna"])){
		$certrbna = 0;	
	}else{
		$certrbna = $_POST["certrbna"];
	};

	//---------
	if(!isset ($_POST["inadimplentes"])){
		$inadimplentes = 0;	
	}else{
		$inadimplentes = $_POST["inadimplentes"];
	};


	//---------
	if(!isset ($_POST["insatisfeitos"])){
		$insatisfeitos = 0;	
	}else{
		$insatisfeitos = $_POST["insatisfeitos"];
	};
	

 $sqlregistro = "select * from obras_od where registro = '".$registro."' ";


    $result = mysql_query($sqlregistro, $con);
	$row = mysql_fetch_array($result); {
	 
	 
	 
	 
	 
	 	if($row["registro"] == $registro){
				 $msg = "REGISTRO RBNA JÁ EXISTE";
				 header("location:cad_obras_od.php?msg=".$msg);
	}else{
	



		
			// Insere os dados no banco
			$sql ="INSERT INTO obras_od VALUES ('', '".$registro."',
			 '".$embarcacao."',
			  '".$numerocasco."',
			   '".$contratante."',
			    '".$armador."',
				 '".$regiao."',
				  '".$tipoembarcacao."',
				   '".$pagamento."',
				    '".$servico."',
					 '".$qtddias."',
					   '".$obs."',
						 ".$forarbna.",
						  ".$certrbna.",
						   ".$inadimplentes.",
						    ".$insatisfeitos.",
							 '".$nome_pdf."')";
		
			// Se os dados forem inseridos com sucesso
		if(mysql_query($sql, $con)){
			mysql_query($sql2, $con);
				 $msg = "Salvo com sucesso.";
				 header("location:cad_obras_od.php?msg=".$msg);
			}else{
				echo $sql;
				/* $msg = "Erro ao Salvar.";
				 header("location:cad_obras_od.php?msg=".$msg);
				*/}
	
	}
	}
?>