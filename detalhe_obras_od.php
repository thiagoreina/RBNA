
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
<div align="center"><span class="title">
  <?php
 include_once "fontes/conexao.php";
  if (!empty($_GET["id"])){
	
	$id = $_GET["id"];
	
	$sql= "select * from obras_od where id = ".$id;

}elseif (!empty($_GET["registro"])){

	
	$id = $_GET["registro"];
	
	$sql= "select * from obras_od where registro = '".$id."'";

}

 $result = mysql_query($sql, $con);
 
 $row = mysql_fetch_array($result);
 ?>
</span></div>
<div class="clear">
    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="4" bgcolor="#666666"><div class="solicitacao">
          <div align="center" class="title"> Detalhes da Obra <?php echo $row['registro'] ?><span class="texto"></span></div>
        </div></td>
      </tr>
      <tr>
        <td width="9%" bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">EMBARCAÇÃO:</div>
        </div></td>
        <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="texto"><?php echo $row['embarcacao'] ?></div>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">REGISTRO RBNA:</div>
        </div></td>
        <td width="17%" bgcolor="#E9E9E9"><div class="solicitacao">
          <label for="nome"></label>
          <label for="label"></label>
          <span class="texto"><?php echo $row['registro'] ?></span></div></td>
        <td width="28%" bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">Nº CASCO:</div>
        </div></td>
        <td width="33%" bgcolor="#E9E9E9"><div class="solicitacao">
          <label for="nome3"></label>
          <label for="label"></label>
          <span class="texto"><?php echo $row['numerocasco'] ?></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpreto"><span class="textomenorpretoB">CONTRATANTE:</span></div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="texto"><?php echo $row['contratante'] ?></div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">ARMADOR:</div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
          <label for="numerocasco"></label>
          </span><span class="texto"><?php echo $row['armador'] ?></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">ESCRITÓRIO REGIONAL:</div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="texto">
            <label for="regiao"></label>
            <?php echo $row['regiao'] ?></div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">TIPO EMBARCAÇÃO:</div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
          <label for="embarcacao"></label>
          </span>
          <label for="tipoembarcacao"></label>
          <span class="texto"><?php echo $row['tipoembarcacao'] ?></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpreto"><span class="textomenorpretoB">REGIME DEPAGAMENTO:</span></div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <label for="ramal"></label>
          <label for="foto"></label>
          <span class="texto"><?php echo $row['pagamento'] ?></span></div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">QTD. DIAS:</div>
        </div></td>
        <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="texto"><?php echo $row['qtddias'] ?></span></div></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">INFORMAÇÕES ADCIONAIS</div>
        </div></td>
        <td colspan="3" bgcolor="#E9E9E9"><label for="obs"></label>
          <div class="solicitacao">
            <table width="100%" border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td width="4%" bgcolor="#999999"><?php if ($row['forarbna'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";
}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>                  <label for="forarbna"></label></td>
                <td width="23%" bgcolor="#EAEAEA"><span class="textomenorpreto">Embarcação que não está no RBNA</span></td>
                <td width="4%" bgcolor="#000000"><?php if ($row['certrbna'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>                  <label for="certrbna"></label></td>
                <td width="22%" bgcolor="#EAEAEA" class="textomenorpreto">Embarcação certificada pelo RBNA</td>
                <td width="4%" bgcolor="#FF0000"><?php if ($row['inadimplentes'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>                  <label for="inadimplentes"></label></td>
                <td width="21%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
                <td width="4%" bgcolor="#FF00FF"><?php if ($row['insatisfeitos'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>                  <label for="insatisfeitos"></label></td>
                <td width="18%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
              </tr>
            </table>
          </div></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">SERVIÇO:</div>
        </div></td>
        <td colspan="3" bgcolor="#E9E9E9"><span class="texto"><?php echo $row['servico'] ?></span></td>
      </tr>
      <tr>
        <td bgcolor="#E9E9E9"><div class="solicitacao">
          <div class="textomenorpretoB">OBS:</div>
        </div></td>
        <td colspan="3" bgcolor="#E9E9E9"><span class="texto"><?php echo $row['servico'] ?></span></td>
      </tr>
      <tr>
        <td colspan="4" bgcolor="#E9E9E9"></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </div>


</div>
</body>
</html>