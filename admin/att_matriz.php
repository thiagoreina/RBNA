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
</style></head>

<body bgcolor="#EEEEEE" class="verdana">
<p>
  <?php 
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';
?>
  <?php
  	$id 		=		$_POST["id"];
	$razao 		= 		$_POST["razao"];
	$fantasia 	= 		$_POST["fantasia"];
	$cnpj 		=		$_POST["cnpj"];
	$cpf 		=		$_POST["cpf"];
	$inscmunicipal= 	$_POST["inscmunicipal"];
	$inscestadual =		$_POST["inscestadual"];
	$telefone =			$_POST["telefone"];
	$fax =				$_POST["fax"];
	$email =			$_POST["email"];
	$site =				$_POST["site"];
    

		

$sql2 = "UPDATE matriz SET razao = '".$razao."',
fantasia = '".$fantasia."',
cnpj = '".$cnpj."',
cpf = '".$cpf."',
inscricaoMunicipal = '".$inscmunicipal."',
inscricaoEstadual = '".$inscestadual."',
telefone = '".$telefone."',
fax = '".$fax."',
email = '".$email."',
site = '".$site."' WHERE idMatriz =".$id;

 
	
		if(mysql_query($sql2, $con)){
				 print "<script type='text/javascript'>";
print "alert('Dados Atualizado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";
				 
			
	
			}else{
				 echo "Erro ao Salvar.<br>".$sql2;
				 }
	
	mysql_close($con);


	

?>

</body>
</html>