<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Endereço de Correspondencia</title>
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
	$cep 		= 		$_POST["cep"];
	$logradouro =	 	$_POST["logradouro"];
	$numero 	=		$_POST["numero"];
	$complemento=		$_POST["complemento"];
	$bairro 	=		$_POST["bairro"];
	$cidade 	=		$_POST["cidade"];
	$estado 	=		$_POST["estado"];
	$pais 		=		$_POST["pais"];
	
	if (isset ($_POST["repetir"])){
	
	
	$sql2 = "insert into endereco values(null, 1, null, '".$id."',
    '".$cep."',
	 '".$logradouro."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$cidade."',
		  '".$estado."',
		   '".$pais."'
		   )";
		   
		   
		 $sql3 =  "insert into endereco values(null, 2, null, '".$id."',
    '".$cep."',
	 '".$logradouro."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$cidade."',
		  '".$estado."',
		   '".$pais."'
		   )";
		   
		   if((mysql_query($sql2, $con))&&(mysql_query($sql3, $con))){
			
print "<script type='text/javascript'>";
print "alert('Dados Cadastrado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
			
	
			}else{
				 echo $sql2."
		
		<p></p>
		<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Erro ao Salvar no Banco de Dados 
		<p> <a href='javascript:history.go(-1)'><img src='../imagens/voltar.png' width='25' height='25' align='absmiddle' />Voltar</a></span>";	
				 }
		   
		   
	}else{

 $sql2 = "insert into endereco values(null, 1, null, '".$id."',
    '".$logradouro."',
	 '".$cep."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$estado."',
		  '".$cidade."',
		   '".$pais."'
		   )";

	}

	
		if(mysql_query($sql2, $con)){
			
print "<script type='text/javascript'>";
print "alert('Dados Cadastrado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
			
	
			}else{
				 echo $sql2."
		
		<p></p>
		<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Erro ao Salvar no Banco de Dados 
		<p> <a href='javascript:history.go(-1)'><img src='../imagens/voltar.png' width='25' height='25' align='absmiddle' />Voltar</a></span>";	
				 }
	
	
	mysql_close($con);


	

?>

</body>
</html>