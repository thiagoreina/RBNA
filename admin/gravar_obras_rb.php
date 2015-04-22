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
	$contratante = 	$exp[0];					//Vai mudar
	$armador =	$_POST["armador"];
	$regiao = 		$_POST["regiao"];
	$tipoembarcacao = 		$_POST["tipoembarcacao"];
	$pagamento = 		$_POST["pagamento"];
	$areanavegacao =		$_POST["areanavegacao"];
	$bandeira =		$_POST["bandeira"];
	$comprimento =		$_POST["comprimento"];
	$ab =		$_POST["ab"];
	$kw =		$_POST["kw"];
	$obs =		nl2br($_POST["obs"]);
	$pdf = 		$_FILES["pdf"];
	$id_funcionario = $_SESSION["idfunc"];
	$inadimplentes = 0;						//vai mudar tbm	
	$insatisfeitos = 0;						//Aqui tbm
	
	/*Cliente */
$cliente = $_POST['cliente'];

$exp = explode(']',$cliente);

$idexp = $exp[0];

$idCli = explode('[',$idexp);

$idCliente = $idCli[1];


$sqlcliente = "select * from matriz where idMatriz = ".$idCliente;


    $resultcliente = mysql_query($sqlcliente, $con);

if (mysql_num_rows($resultcliente) > 0){
				
	 


	
	/*Fim Cliente*/
	
	
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
	

	
	
	
		


// Parte do PDF

 $link_obra1 = substr($registro,0,2);
   		$link_obra = strtolower($link_obra1);

	
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
$datatime = date('Y-m-j H:i:s');
		
		
		$sql2 ="INSERT INTO log_obras VALUES ('', '".$registro."',
			   '".$datatime."',
				 '".$nome_pdf."',
				   0,
				   ".$id_funcionario.")";
		


		
			// Insere os dados no banco
			$sql ="INSERT INTO obras_rb VALUES ('',
			 '".$idCliente."',
			 '".$registro."',
			  '".$embarcacao."',
			   '".$numerocasco."',
			    '".$contratante."',
				 '".$armador."',
				  '".$regiao."',
				   '".$tipoembarcacao."',
				    '".$pagamento."',
					 '".$areanavegacao."',
					  '".$bandeira."',
					   '".$comprimento."',
					    '".$ab."',
						 '".$kw."',
						 '".$obs."',
						  '".$datatime."',
						   ".$forarbna.",
						    ".$certrbna.",
							 ".$inadimplentes.",
							  ".$insatisfeitos.",
							   	'".$nome_pdf."')";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				mysql_query($sql2, $con);
				 $msg = "Salvo com sucesso.";
			header("location:cad_obras_rb.php?msg=".$msg);
			}else{
				 $msg = "Erro ao Salvar.";
				header("location:cad_obras_rb.php?msg=".$msg);
				}
				
	}}}else{
	$msg = "Cliente Não Encontrado";
				header("location:cad_obras_rb.php?msg=".$msg);

	}

?>