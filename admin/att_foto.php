<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST["cadastrar"]) {
	
	// Recupera os dados dos campos

	$idfunc = 		$_POST["idfunc"];
	$foto = 		$_FILES["foto"];


	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../fotos/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			$up = move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			$up;
	}else{
	$nome_imagem = "nophoto.jpg";
	}
		
			// Insere os dados no banco
			
			$sql = "UPDATE funcionario SET foto = '".$nome_imagem."' WHERE id_funcionario = ".$idfunc;
			
					
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				print "<script type='text/javascript'>";
print "alert('Foto Atualizada com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
				 }else{
				 echo "Erro ao Salvar.";
				 }
		}
	
	
?>