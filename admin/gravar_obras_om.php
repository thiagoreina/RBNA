<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';

// Se o usuário clicou no botão cadastrar efetua as ações

	
	// Recupera os dados dos campos
	$registro =	 	$_POST["registro"];
	$contratante = 	$_POST["contratante"];
	$regiao = 		$_POST["regiao"];
	$pagamento = 		$_POST["pagamento"];
	$servico =	 	nl2br($_POST["servico"]);
	$qtddias =		$_POST["qtddias"];
	$obs =		nl2br($_POST["obs"]);
		$pdf = 		$_FILES["pdf"];
	$id_funcionario = $_SESSION["idfunc"];
	
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

// Parte do PDF

 $link_obra = substr($registro,0,2);

	
	// Recupera os dados dos campos


	


	 // Se a foto estiver sido selecionada
	if (!empty($pdf['name'])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(pdf){1}$/i", $pdf['name'], $ext);

        	// Gera um nome único para a imagem
        	$nome_pdf = $registro."_".md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_pdf = "obras/obras_".$link_obra."/" . $nome_pdf;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($pdf['tmp_name'], $caminho_pdf);
			
	}else{
	$nome_pdf = "nopdf.pdf";
	}




 $sqlregistro = "select * from obras_".$link_obra." where registro = '".$registro."' ";


    $result = mysql_query($sqlregistro, $con);
	$row = mysql_fetch_array($result); {
	 
	 
	 
	 
	 
	 	if($row["registro"] == $registro){
				 $msg = "REGISTRO RBNA JÁ EXISTE";
				 header("location:cad_obras_".$link_obra.".php?msg=".$msg);
	}else{
	

setlocale(LC_ALL, 'pt_BR');
$datatime = date('Y-m-j H:m:s');
		
		
		$sql2 ="INSERT INTO log_obras VALUES ('', '".$registro."',
			   '".$datatime."',
				 '".$nome_pdf."',
				   ".$forarbna.",
				   ".$id_funcionario.")";
		




		
			// Insere os dados no banco
			$sql ="INSERT INTO obras_om VALUES ('', '".$registro."',
			   '".$contratante."',
				 '".$regiao."',
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
				 header("location:cad_obras_om.php?msg=".$msg);
			}else{
				 $msg = "Erro ao Salvar.";
				 header("location:cad_obras_om.php?msg=".$msg);
				}
	
	}
	}
?>