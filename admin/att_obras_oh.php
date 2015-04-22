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
<p>
  <?php 
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';
?>
  <?php
  	$id = $_POST["id"];
	$registro =	 	$_POST["registro"];
	$contratante = 	$_POST["contratante"];
	$tipo_oh = 		$_POST["tipo_oh"];
	$regiao = 		$_POST["regiao"];
	$pagamento = 		$_POST["pagamento"];
	$servico =		nl2br($_POST["servico"]);
	$qtddias =		$_POST["qtddias"];
	$obs =		nl2br($_POST["obs"]);
	$telefone1 =		$_POST["telefone1"];
	$telefone2 =		$_POST["telefone2"];
	$email =		$_POST["email"];
	$local =	$_POST["local"];
	$site =		$_POST["site"];
	//$logo =		$_FILLES["logo"];
	//$homologada =		$_POST["homologada"];
	
	
	if(!isset ($_POST["forarbna"])){
		$forarbna = 0;	
	}else{
		$forarbna = $_POST["forarbna"];
	};
	
	//---------
	if(!isset ($_POST["certrbna"])){
		$certrbna = 0;	
	}else{
		$certrbna = $_POST["certrbna"];
	};

	//---------
	if(!isset ($_POST["inadimplentes"])){
		$inadimplentes = 0;	
	}else{
		$inadimplentes = $_POST["inadimplentes"];
	};


	//---------
	if(!isset ($_POST["insatisfeitos"])){
		$insatisfeitos = 0;	
	}else{
		$insatisfeitos = $_POST["insatisfeitos"];
	};
    

		

$sql2 = "UPDATE obras_oh SET contratante = '".$contratante."',
idtipo_oh = '".$tipo_oh."',
regiao = '".$regiao."',
pagamento = '".$pagamento."',
servico = '".$servico."',
qtddias = '".$qtddias."',
obs = '".$obs."',
telefone1 = '".$telefone1."',
telefone2 = '".$telefone2."',
email = '".$email."',
site = '".$site."',
local = '".$local."',
forarbna = ".$forarbna.",
certrbna = ".$certrbna.",
inadimplentes = ".$inadimplentes.",
insatisfeitos = ".$insatisfeitos." WHERE id =".$id;

 
	
		if(mysql_query($sql2, $con)){
				print "<script type='text/javascript'>";
print "alert('Obra Atualizada com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
		}else{
				 echo "Erro ao Salvar.";
				 }
	
	mysql_close($con);


	

?>

</body>
</html>