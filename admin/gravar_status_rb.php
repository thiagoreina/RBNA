<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {
	
	// Recupera os dados dos campos
	//$id_tipo =		$_POST["tipo"];
	$pdf =		$_FILES["pdf"];
	$id_obra =		$_POST["idObra"];
	$obra =			$_POST["obra"];
	$id_usuario =	$_SESSION["idfunc"];
	//$ciclo =		1;
	$data = date("Y-m-d H:i:s");
	$id_filial = NULL;






// Parte do PDF

 $link_obra1 = substr($obra,0,2);
 $link_obra = strtolower($link_obra1);

	
	// Recupera os dados dos campos


	


	 // Se a foto estiver sido selecionada
	if (!empty($pdf['name'])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(pdf){1}$/i", $pdf['name'], $ext);

        	// Gera um nome único para a imagem
        	$nome_pdf = $obra."_".md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_pdf = "statusclasse/".$link_obra."/" . $nome_pdf;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($pdf['tmp_name'], $caminho_pdf);
			
	}else{
	$nome_pdf = "nopdf.pdf";
	}



//fim pdf	 
        
		$sqlObra = "select id_matriz from obras_rb where id =".$id_obra;
		$resultObra = mysql_query($sqlObra, $con);
		$rowObra = mysql_fetch_array($resultObra);
		
	$id_matriz = $rowObra["id_matriz"];
		


	
	
			// Insere os dados no banco
			$sql ="INSERT INTO statusclasse VALUES ('', ".$id_matriz.",
			 NULL,
			  ".$id_obra.",
			   ".$id_usuario.",
			    '".$nome_pdf."',
				 '".$data."',
				  '".$obra."')";
			
			
			
			
		
			// Se os dados forem inseridos com sucesso editar_relatorios_rb.php?id=".$id_obra_crypt

		

	
	if (mysql_query($sql,$con)){
$msg = "Salvo com Sucesso!";
 
  $msg = base64_encode($msg);
 $id_obra_crypt = base64_encode($id_obra);    
 header("location:editar_relatorios_rb.php?id=".$id_obra_crypt."&msg=".$msg);


}else{
$msg = "Erro ao Gravar, Tente Novamente";

	$msg = base64_encode($msg);
	$id_obra_crypt = base64_encode($id_obra);
    header("location:editar_relatorios_rb.php?id=".$id_obra_crypt."&msg=".$msg);
	
}
	
	}
?>