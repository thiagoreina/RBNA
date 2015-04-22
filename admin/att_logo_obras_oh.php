<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST["cadastrar"]) {
	
	// Recupera os dados dos campos

	$id = 		$_POST["id"];
	$logo = 		$_FILES["logo"];


	 // Se a foto estiver sido selecionada
	if (!empty($logo["name"])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $logo['name'], $ext);

        	// Gera um nome único para a imagem
        	$nome_logo = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_logo = "../logo_homologadas/" . $nome_logo;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($logo['tmp_name'], $caminho_logo);
			
	}else{
	$nome_logo = "nologo.jpg";
	}
		
			// Insere os dados no banco
			
			$sql = "UPDATE obras_oh SET logo = '".$nome_logo."' WHERE id = ".$id;
			
					
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
print "<script type='text/javascript'>";
print "alert('Logo Atualizada com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
				 }else{
				 echo "Erro ao Salvar.";
				 }
		}
	
	
?>