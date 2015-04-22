
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>
<link href="fontes/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.verdana {
	font-family: Verdana, Geneva, sans-serif;
	color: #333;
	font-size: 14px;
}
.title {
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
.aviso {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}
a:link {
	color: #000;
}
a:visited {
	color: #000;
}
a:hover {
	color: #000;
}
a:active {
	color: #00F;
}
a {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<?php 
include_once 'validar.php';
?>



<body class="bg">
<div align="center" class="total">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php
 include_once "fontes/conexao.php";
 if (!empty($_GET["id"])){
	
	$id = $_GET["id"];
	
	$sql= "select * from obras_og where id = ".$id;

}elseif (!empty($_GET["registro"])){

	
	$id = $_GET["registro"];
	
	$sql= "select * from obras_og where registro = '".$id."'";

}

 $result = mysql_query($sql, $con);
 
 $row = mysql_fetch_array($result);
 ?>
          Detalhes da Obra <?php echo $row['registro'] ?><span class="texto"></span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">CONTRATANTE:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="texto">
        <div class="solicitacao"></span><?php echo $row['contratante'] ?></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">EMBARCAÇÃO:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><span class="solicitacao"><span class="texto"><?php echo $row['embarcacao'] ?></span></span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">REGISTRO RBNA:</span></div>
      </div></td>
      <td width="27%" bgcolor="#F7F7F7"><div class="solicitacao">
        <span class="texto"><?php echo $row['registro'] ?></span></div>
      </td>
      <td width="16%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">ESCRITÓRIO REGIONAL:</span></div>
      </div></td>
      <td width="39%" bgcolor="#F7F7F7"><div class="texto">
        <div class="solicitacao"><?php echo $row['regiao'] ?></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">REGIME DE PAGAMENTO:</span></div>
      </div></td>
      <td bgcolor="#F7F7F7">
            <div class="solicitacao"><span class="texto"><?php echo $row['pagamento'] ?></span></div></td>
      <td width="16%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">QNT. DIAS:</span></div>
      </div></td>
      <td width="39%" bgcolor="#F7F7F7"><div class="solicitacao"><span class="texto"><?php echo $row['qtddias'] ?></span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"></td>
      <td bgcolor="#F7F7F7"></td>
      <td bgcolor="#DFDFDF"></td>
      <td bgcolor="#F7F7F7"></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">INFORMAÇÕES ADCIONAIS</span></div>
      </div></td>
      <td colspan="3" bgcolor="#EAEAEA"><div class="solicitacao">
        <table width="100%" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td bgcolor="#999999"><?php if ($row['forarbna'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";
}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>              <label for="forarbna"></label></td>
            <td bgcolor="#EAEAEA"><span class="textomenorpreto">Embarcação que não está no RBNA</span></td>
            <td bgcolor="#000000"><?php if ($row['certrbna'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";
}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>              <label for="certrbna"></label></td>
            <td bgcolor="#EAEAEA" class="textomenorpreto">Embarcação certificada pelo RBNA</td>
            <td bgcolor="#FF0000"><?php if ($row['inadimplentes'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>              <label for="inadimplentes"></label></td>
            <td bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
            <td bgcolor="#FF00FF"><?php if ($row['insatisfeitos'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";
}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>              <label for="insatisfeitos"></label></td>
            <td bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">SERVIÇO:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><span class="solicitacao"><span class="texto"><?php echo $row['servico'] ?></span>
        <div class="texto"></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">OBS:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><span class="solicitacao"><span class="texto"><?php echo $row['obs'] ?></span>
      <div class="texto"></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"></td>
      <td colspan="3" bgcolor="#F7F7F7"></td>
    </tr>
  </table>
  <div class="clear">
    <p>&nbsp;</p>
  </div>


</div>
</body>
</html>