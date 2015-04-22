<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
<!--
.verdana {
	font-size: 14px;
	font-family: Verdana, Geneva, sans-serif;
	color: #333;
	position: relative;
	text-align: center;
	font-weight: bold;
}
-->
</style>
</head>

<body bgcolor="#EEEEEE" class="verdana">
<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_admin.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {
	
	// Recupera os dados dos campos
	$servico =		$_POST["servico"];
	
	
			// Insere os dados no banco
			$sql ="INSERT INTO tipo_oh VALUES ('', '".$servico."')";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 header("location:cad_tipo_oh.php");
				 
				 
			}else{
				 echo "Erro ao Salvar.";
				 }
		}

	
?>
</p>
<p><a href="cad_tipo_oh.php"> Voltar</a></p>
</body>
</html>