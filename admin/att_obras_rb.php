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
	$id = 			$_POST["id"];
	$registro =		$_POST["registro"];
	$embarcacao =	$_POST["embarcacao"];
	$numerocasco = 	$_POST["numerocasco"];
	$armador =		$_POST["armador"];
	$regiao = 		$_POST["regiao"];
	$tipoembarcacao= $_POST["tipoembarcacao"];
	$pagamento = 	$_POST["pagamento"];
	$areanavegacao =$_POST["areanavegacao"];
	$bandeira =		$_POST["bandeira"];
	$comprimento =	$_POST["comprimento"];
	$ab =			$_POST["ab"];
	$kw =			$_POST["kw"];
	$inadimplentes = 0; //vai mudar
	$insatisfeitos = 0; //vai mudar
	
	$cliente = $_POST['cliente'];
	 


$exp = explode(']',$cliente);

$idexp = $exp[0];
$contratante = $exp[1]; //vai Mudar

$idCli = explode('[',$idexp);

$idCliente = $idCli[1];
	
	
	$obs =			nl2br($_POST["obs"]);
	setlocale(LC_ALL, 'pt_BR');
	$datatime = date('Y-m-j H:i:s');
	
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
	
	
	
    
	 $sqlregistro = "select * from obras_rb where id = ".$id;


    $result = mysql_query($sqlregistro, $con);
	$row = mysql_fetch_array($result); 
$sql3 = "UPDATE log_obras SET registro = '".$registro."' WHERE registro = '".$row["registro"]."'";
mysql_query($sql3,$con);

		

$sql2 = "UPDATE obras_rb SET id_matriz = '".$idCliente."',
registro = '".$registro."',
embarcacao = '".$embarcacao."',
numerocasco = '".$numerocasco."',
contratante = '".$contratante."',
armador = '".$armador."',
regiao = '".$regiao."',
tipoembarcacao = '".$tipoembarcacao."',
pagamento = '".$pagamento."',
areanavegacao = '".$areanavegacao."',
bandeira = '".$bandeira."',
comprimento = '".$comprimento."',
ab = '".$ab."',
kw = '".$kw."',
obs = '".$obs."',
att = '".$datatime."',
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
		}
		
		elseif($row["registro"] == $registro){
				 
	echo "</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p><img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /> Já existe uma embarcação com esse registro (".$registro.") <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />";
				 
	

				}else{
				 echo "Erro ao Salvar.";
				 }
	mysql_close($con);


	

?>

</body>
</html>