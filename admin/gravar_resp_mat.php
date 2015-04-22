<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Cliente</title>
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
</style>
<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#EEEEEE" class="verdana">
<p>
  <?php 
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';
?>
  <?php
  	$id 		=		$_POST["id"];
	$respnome 		= 	$_POST["respnome"];
	$respemail 	= 		$_POST["respemail"];
	$respcpf 		=	$_POST["respcpf"];
	$respcargo =		$_POST["respcargo"];
	$resptelefone =		$_POST["resptelefone"];
	$respcelular =		$_POST["respcelular"];
	$respsenha = NULL;
	//AND cpf = ".$respcpf."
$sql = "select * from responsavel where email like '".$respemail."'  AND idresponsavel NOT IN(".$id.")";
		
		$result = mysql_query($sql,$con);
		$row = mysql_fetch_array($result);
		
		$emailoriginal = $row["email"];
		
		
		
		$sqlcpf = "select * from responsavel where cpf = '".$respcpf."'  AND idresponsavel NOT IN(".$id.",'NULL')";
		
		$resultcpf = mysql_query($sqlcpf,$con);
		$rowcpf = mysql_fetch_array($resultcpf);
		
		$cpforiginal = $rowcpf["cpf"];
		
		
		
		
		
		/*if($respemail == $emailoriginal && $respcpf == $cpforiginal){
		echo "<p></p><p></p>
		<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Este Email e CPF ja estão Cadastrados para outro Usuário
		<p> <a href='javascript:history.go(-1)'><img src='../imagens/voltar.png' width='25' height='25' align='absmiddle' />Voltar</a></span>";	
			
		}else*/if($respemail == $emailoriginal){
		echo "<p></p><p></p>
		<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Este Email ja está Cadastrado para outro Usuário
		<p> <a href='javascript:history.go(-1)'><img src='../imagens/voltar.png' width='25' height='25' align='absmiddle' />Voltar</a></span>";	
			
		}
		
		
		elseif ( $respcpf <> "" && $respcpf == $cpforiginal){	
		echo "<p></p><br>
		<p></p>
		<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Este CPF ja está Cadastrado para outro Usuário
		<p> <a href='javascript:history.go(-1)'><img src='../imagens/voltar.png' width='25' height='25' align='absmiddle' />Voltar</a></span>";	
			
		
			
		}else{
		
		


$sql2 = "insert into responsavel values(null,null,
   ".$id.",
	 '".$respnome."',
	  '".$respemail."',
	  '".$respcpf."',
	    '".$respcargo."',
		 '".$resptelefone."',
		  '".$respcelular."',
		  '".$respsenha."'
		   )";



	
		if(mysql_query($sql2, $con)){
			
print "<script type='text/javascript'>";
print "alert('Dados Gravados com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
			 
			
	
			}else{
				 echo "<p></p><br>
		
		<p></p>
		<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Erro ao Salvar no Banco de Dados 
		<p> <a href='javascript:history.go(-1)'><img src='../imagens/voltar.png' width='25' height='25' align='absmiddle' />Voltar</a></span>";	
				 }
	
		}
	mysql_close($con);


	

?>

</body>
</html>