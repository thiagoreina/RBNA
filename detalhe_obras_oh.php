
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
body {
	background-color: #F8F8F8;
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
      <td colspan="8" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php
 include_once "fontes/conexao.php";
if (!empty($_GET["id"])){
	
	$id = $_GET["id"];
	
	$sql= "select t.tipo_oh, o.* from obras_oh o
left outer join tipo_oh t on o.idtipo_oh = t.id where o.id = ".$id." ";

}elseif (!empty($_GET["registro"])){

	
	$id = $_GET["registro"];
	
	$sql= "select t.tipo_oh, o.* from obras_oh o
left outer join tipo_oh t on o.idtipo_oh = t.id where o.registro = '".$id."'";

}
	

 $result = mysql_query($sql, $con);
 
 $row = mysql_fetch_array($result);
 
 ?>
          Detalhes da Obra OH<span class="texto"></span></div>
      </div></td>
    </tr>
    <tr>
      <td width="8%" rowspan="3" bgcolor="#DFDFDF"><div class="solicitacao"><img src="logo_homologadas/<?php echo $row['logo'] ?>" width="70" height="70" /></div></td>
      <td width="2%" colspan="2" bgcolor="#DFDFDF"><div class="texto">
        <div class="solicitacao">
          <div class="texto">
            <div align="left"><span class="textomenorpreto">CONTRATANTE:</span></div>
            </div>
          </div>
      </div></td>
      <td width="41%" colspan="5" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"></span><span class="texto"><?php echo $row['contratante'] ?>&nbsp;</span></div>
      </div></td>
    </tr>
    <tr>
      <td height="19" colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto"> SERVIÇO:</span></div>
          </div>
      </div></td>
      <td colspan="5" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"><span class="texto"><?php echo $row['tipo_oh'] ?>&nbsp;</span></div>
      </div></td>
    </tr>
    <tr>
      <td height="19" colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">LOCAL:</span></div>
          </div>
      </div></td>
      <td colspan="5" bgcolor="#EBEBEB"><div class="solicitacao">
        <div class="texto">
          <div align="left"><?php echo $row['local'] ?>&nbsp;</div>
          </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">TELEFONE 1:</span></div>
          </div>
      </div></td>
      <td colspan="4" bgcolor="#EBEBEB"><div class="texto">
          <div align="left"></span></div>
      </div>        <div class="solicitacao">
          <div class="texto">
            <div align="left"><?php echo $row['telefone1'] ?>&nbsp;</div>
          </div>
      </div></td>
      <td width="12%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">TELEFONE 2:</span></div>
          </div>
      </div></td>
      <td width="24%" bgcolor="#EBEBEB"><div class="solicitacao">
        <div class="texto">
          <div align="left"><?php echo $row['telefone2'] ?>&nbsp;</div>
          </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">EMAIL:</span></div>
        </div>
      </div></td>
      <td colspan="4" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a>&nbsp;</div></td>
      <td width="12%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">SITE:</span></div>
          </div>
      </div></td>
      <td width="24%" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left">
          <a href="http://<?php echo $row['site'] ?>" target="_blank"><?php echo $row['site'] ?></a>&nbsp;</div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">REGISTRO RBNA:</span></div>
        </div>
      </div></td>
      <td colspan="4" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"></span><span class="texto"><?php echo $row['registro'] ?>&nbsp;</span></div>
      </div></td>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">ESCRITÓRIO REGIONAL:</span></div>
          </div>
      </div></td>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"></span><span class="texto"><?php echo $row['regiao'] ?>&nbsp;</span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">REGIME DE PAGAMENTO:</span></div>
        </div>
      </div></td>
      <td colspan="4" rowspan="2" bgcolor="#EBEBEB"><div class="solicitacao"><span class="texto"><?php echo $row['pagamento'] ?>&nbsp;</span>
        <div class="texto">
          <div align="left"></div>
        </div></td>
      <td rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">QNT. DIAS:</span></div>
          </div>
      </div></td>
      <td rowspan="2" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"><span class="texto"><?php echo $row['qtddias'] ?>&nbsp;</span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">INFORMAÇÕES ADCIONAIS</span></div>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="6" bgcolor="#EAEAEA"><div class="solicitacao">
        <div align="left">
          <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td width="3%" bgcolor="#999999"><label for="forarbna">
                <?php if ($row['forarbna'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";
}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>
              </label></td>
              <td width="28%" bgcolor="#EAEAEA"><span class="textomenorpreto">Empresa que não está no RBNA</span></td>
              <td width="4%" bgcolor="#000000"><label for="certrbna">
                <?php if ($row['certrbna'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>
              </label></td>
              <td width="26%" bgcolor="#EAEAEA" class="textomenorpreto">Empresa certificada pelo RBNA</td>
              <td width="4%" bgcolor="#FF0000"><label for="inadimplentes">
                <?php if ($row['inadimplentes'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>
              </label></td>
              <td width="16%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
              <td width="4%" bgcolor="#FF00FF"><label for="insatisfeitos">
                <?php if ($row['insatisfeitos'] == 1){

   echo "<img src='imagens/check.png' width='30' height='30' />";

}else{
	echo "<img src='imagens/checkbox.png' width='30' height='30' />";
}
?>
              </label></td>
              <td width="15%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
            </tr>
          </table>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">OBS:</span></div>
        </div>
      </div></td>
      <td colspan="6" bgcolor="#EBEBEB"><div class="solicitacao">
        <div align="left"><span class="texto"><?php echo $row['obs'] ?></span>&nbsp;</div>
      </div></td>
    </tr>
    <tr>
    
      <td colspan="2" bgcolor="#DFDFDF"></td>
      <td colspan="6" bgcolor="#EBEBEB"></td>
    </tr>
  </table>
  <div class="clear">
    <p>&nbsp;</p>
  </div>


</div>
</body>
</html>