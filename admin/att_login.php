<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
<!--
.verdana {
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
	color: #666;
	position: relative;
	text-align: center;
}
-->
</style></head>

<body bgcolor="#EEEEEE" class="verdana">
<?php 
include_once '../validar.php';
include_once '../validar_rh.php';
?>
<?php
$login = 		$_POST["editarlogin"];
$perfil = 		$_POST["perfil"];
$idfunc = 			$_POST["id"];



    
include_once '../fontes/conexao.php';

$buscasql = mysql_query("select login from usuario where login LIKE '".$login."'AND idfunc NOT IN(".$idfunc.")", $con);
            $contar = mysql_num_rows($buscasql);
             
            if($contar >= 1){
				echo "Usuario ja existe";

}else{

$sql2 = "UPDATE usuario SET idfunc = ".$idfunc.",
login = '".$login."',
idfunc = '".$idfunc."',
perfil = '".$perfil."' WHERE idfunc =".$idfunc;


			if(mysql_query($sql2, $con)){
print "<script type='text/javascript'>";
print "alert('Login Alterado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
			}else{
				 echo "Erro ao Salvar.";
				 }
}
	mysql_close($con);
	 


?>
</body>
</html>