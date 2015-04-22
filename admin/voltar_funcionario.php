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
include_once '../validar_rh.php';
?>
<p>&nbsp;</p>
<p>
  <?php
$id = $_GET["id"];

include_once '../fontes/conexao.php';


$sql = "UPDATE funcionario SET desligado = 0 WHERE id_funcionario =".$id;



if (mysql_query($sql,$con)){

print "<script type='text/javascript'>";
print "alert('Este Funcionário foi reincluido ao quadro de Funcionários.')";
print "</script>"; 
print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=funcionario_desligado.php'>";
}else{
echo "Erro!";
}


mysql_close($con);
?>
</p>
<p><a href="con_funcionario.php"> Voltar</a></p>
</body>
</html>