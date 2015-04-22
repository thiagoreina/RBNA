<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST["cadastrar"]) {
	
	// Recupera os dados dos campos

	$idfunc = 		$_POST["idfunc"];
	$ficha = 		$_FILES["ficha"];
	$email = 		$_POST["pdf"];






	// Se a foto estiver sido selecionada
	if (!empty($ficha['name'])) {
		

			// Pega extensão da imagem
			preg_match("/\.(pdf){1}$/i", $ficha['name'], $ext);

        	// Gera um nome único para a imagem
        	$nome_ficha = md5($email) . "." . $ext[1];

        	// Caminho de onde ficará a imagem

			$caminho_ficha = "../funcionario/ficha/" . $nome_ficha;
			
		if (file_exists($caminho_ficha)) {
			unlink($caminho_ficha);
			move_uploaded_file($ficha['tmp_name'], $caminho_ficha);
		}else{
			
		move_uploaded_file($ficha['tmp_name'], $caminho_ficha);	
		}


			}else{
	$nome_ficha = "nopdf.pdf";
	}

			// Insere os dados no banco
			
			$sql = "UPDATE funcionario SET ficha = '".$nome_ficha."' WHERE id_funcionario = ".$idfunc;
			
					
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				print "<script type='text/javascript'>";
print "alert('Ficha Atualizada com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
				 }else{
				 echo "Erro ao Salvar.";
				 }

	
}
?>