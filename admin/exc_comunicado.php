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
 include_once '../validar.php';
include_once '../validar_admin.php'; 
?>
<p>&nbsp;</p>
<p>
  <?php
$id = $_GET["id"];

include_once '../fontes/conexao.php';


$sql = "delete from comunicado where id =".$id;



if (mysql_query($sql,$con)){


				$msg =  "Deletado com Sucesso.";
				 
				header("location:edit_comunicado.php?msg=".$msg);
			}else{
				$msg =  "Erro ao Deletar";
				 
				header("location:edit_comunicado.php?msg=".$msg);
				 }
	
	mysql_close($con);

mysql_close($con);
?>
</p>
<p><a href="con_funcionario.php"> Voltar</a></p>
</body>
</html>