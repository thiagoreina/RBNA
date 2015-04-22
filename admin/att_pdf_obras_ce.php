<style type="text/css">
body,td,th {
	color: #CCC;
}
</style>
<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST["cadastrar"]) {
	
	// Recupera os dados dos campos

	$id = 		$_POST["id"];
	$registro = $_POST["registro"];
	$pdf = 		$_FILES["pdf"];


	 // Se a foto estiver sido selecionada
	if (!empty($pdf['name'])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(pdf){1}$/i", $pdf['name'], $ext);

        	// Gera um nome único para a imagem
	$nome_pdf = $registro."_".md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_pdf = "obras/obras_ce/" . $nome_pdf;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($pdf['tmp_name'], $caminho_pdf);
			
	}else{
	$nome_pdf = "nopdf.pdf";
	}
		
		
		 $sqlregistro = "select * from obras_ce where id = ".$id;


    $result = mysql_query($sqlregistro, $con);
	$row = mysql_fetch_array($result); 
$sql3 = "UPDATE log_obras SET pdf = '".$nome_pdf."' WHERE registro = '".$row["registro"]."'";
mysql_query($sql3,$con);
		
		
		
			// Insere os dados no banco
			
			$sql = "UPDATE obras_ce SET pdf = '".$nome_pdf."' WHERE id = ".$id;
			
			
			
			
					
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 print "<script type='text/javascript'>";
print "alert('PDF Atualizado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
				 }else{
				 echo "Erro ao Salvar.";
				 }
		}
	
	
?>