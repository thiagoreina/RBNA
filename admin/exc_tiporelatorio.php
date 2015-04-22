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
include_once '../validar_obras.php'; 
?>
<p>&nbsp;</p>
<p>
  <?php
$id = $_GET["id"];
$grupo = $_GET["gr"];

include_once '../fontes/conexao.php';


$sql2 = "select * from relatorio where id_tiporelatorio =".$id;



$resultrow =(mysql_query($sql2,$con));
if (mysql_num_rows($resultrow)>0){
	$msg= " Para ser deletado, este tipo de Relatório não pode está vinculado a nenhum Relatótio.";
	
	$msg = base64_encode($msg);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);

	
	
}else{


$sql = "delete from tiporelatorio where id =".$id;



if (mysql_query($sql,$con)){
$msg = "Deletado com Sucesso!";
 
  $msg = base64_encode($msg);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);

}else{
$msg = "Erro ao Deletar";

$msg = base64_encode($msg);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);
}

mysql_close($con);

}
?>
</p>
<p></p>
</body>
</html>