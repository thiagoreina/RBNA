
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
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>
<?php 
include_once 'validar_user.php';
?>



<body background="imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#003468" class="title">Intranet RBNA</td>
      <td width="37%" bgcolor="#003468"><div align="center"><span class="textomenor">
        <?php 
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
			
        ?>
      </span></div></td>
      <td width="19%" bgcolor="#003468" class="title"><?php 
	  
	  $nome = explode(" ", $_SESSION["nome"]);
	  
	  
	  echo "Olá ".$nome[0] . " ";?></td>
      <td width="8%" bgcolor="#003468"><div align="center"><a href="logout.php" class="title"><span class="title">Sair</span></a></div></td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#0099CC"><div align="center">
        <ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="intranet.php">P&aacute;gina Inicial</a></li>
          <li><a href="#" class="MenuBarItemSubmenu">Obras</a>
            <ul>
              <li><a href="obras_rb.php">RB</a></li>
              <li><a href="obras_ce.php">CE</a></li>
              <li><a href="obras_oa.php">OA</a></li>
              <li><a href="obras_ov.php">OV</a></li>
              <li><a href="obras_ow.php">OW</a></li>
              <li><a href="obras_oh.php">OH</a></li>
              <li><a href="obras_oi.php">OI</a></li>
              <li><a href="obras_og.php">OG</a></li>
              <li><a href="obras_om.php">OM</a></li>
              <li><a href="obras_ot.php">OT</a></li>
              <li><a href="obras_od.php">OD</a></li>
              <li><a href="obras_ok.php">OK</a></li>
            </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="#">Administra&ccedil;&atilde;o</a>
            <ul>
              <li><a href="funcionarios.php">Funcion&aacute;rios</a></li>
              <li><a href="rh.php">RH</a></li>
              <li><a href="fazer_solicitacao.php">Fazer Solicita&ccedil;&atilde;o</a></li>
              <li><a href="comunicados.php">Comunicados</a></li>
            </ul>
          </li>
          <li><a href="#" class="MenuBarItemSubmenu">Derpartamentos</a>
            <ul>
              <li><a href="dqua.php">DQUA</a></li>
              <li><a href="dcor.php">DCOR</a></li>
              <li><a href="dtec.php">DTEC</a></li>
              <li><a href="dcom.php">DCOM</a></li>
              <li><a href="dpdr.php">DPDR</a></li>
              <li><a href="aomi.php">AOMI</a></li>
              <li><a href="dadf.php">DADF</a></li>
              <li><a href="dtre.php">DTRE</a></li>
              <li><a href="dapr.php">DAPR</a></li>
              <li><a href="dvin.php">DVIN</a></li>
              <li><a href="dcer.php">DCER</a></li>
              <li><a href="ce.php">CE</a></li>
            </ul>
          </li>
          <li><a href="eventos.php">Eventos</a></li>
          <li><a href="javascript:MM_openBrWindow('editar_senha.php?id=<?php echo $_SESSION["idfunc"] ?>','edit','width=500,height=200')">Alterar Senha</a></li>
          <li><a href="admin/index.php">Painel de Controle</a></li>
        </ul>
      </div>
        <div align="center"></div>
        <div align="center"> </div>        <div align="center"> </div></td>
</tr>
    </table>
</div>


<span class="aviso">
  </span><?php
		include_once 'fontes/conexao.php';
	$mesatual = date("m");
	$diaatual = date("d");


    switch ($mesatual) {
    case "01": $mesnome = "Janeiro"; break;
    case "02": $mesnome = "Fevereiro"; break;
    case "03": $mesnome = "Março"; break;
    case "04": $mesnome = "Abril"; break;
    case "05": $mesnome = "Maio"; break;
    case "06": $mesnome = "Junho"; break;
    case "07": $mesnome = "Julho"; break;
    case "08": $mesnome = "Agosto"; break;
    case "09": $mesnome = "Setembro"; break;
    case "10": $mesnome = "Outubro"; break;
    case "11": $mesnome = "Novembro"; break;
    case "12": $mesnome = "Dezembro"; break;
    };?>	

<?php
$sqlcon = "SELECT * FROM comunicado where ativo = 1 ORDER BY data ";
$resultcon = mysql_query($sqlcon, $con);
$num_rows = mysql_num_rows($resultcon);
while ($rowcon = mysql_fetch_array ($resultcon)){
$datacon = $rowcon["data"];
$comunicadocon = $rowcon["comunicado"];
$id_funcionariocon = $rowcon["id_funcionario"];
$ativocon = $rowcon["ativo"];
$idcon = $rowcon["id"];
//	$divnome = explode(" ",$nome);

	$datatimecon = explode(" ",$datacon);
	$datadiacon = $datatimecon[0];
	$datahoracon = $datatimecon[1];
	
	$dataexpcon = explode("-",$datadiacon);
	
	$anocon = $dataexpcon[0];
	$mescon = $dataexpcon[1];
	$diacon = $dataexpcon[2];
	
	

    switch ($mescon) {
    case "01": $mesnomecon = "Janeiro"; break;
    case "02": $mesnomecon = "Fevereiro"; break;
    case "03": $mesnomecon = "Março"; break;
    case "04": $mesnomecon = "Abril"; break;
    case "05": $mesnomecon = "Maio"; break;
    case "06": $mesnomecon = "Junho"; break;
    case "07": $mesnomecon = "Julho"; break;
    case "08": $mesnomecon = "Agosto"; break;
    case "09": $mesnomecon = "Setembro"; break;
    case "10": $mesnomecon = "Outubro"; break;
    case "11": $mesnomecon = "Novembro"; break;
    case "12": $mesnomecon = "Dezembro"; break;
    };
	
	$dataformatcon = "Dia ".$diacon. " de ".$mesnomecon. " de " .$anocon ;
	
		$horaexpcon = explode(":",$datahoracon);
	
	$horacon = $horaexpcon[0];
	$minutocon = $horaexpcon[1];
	$segundocon = $horaexpcon[2];
	
	$horaformatcon = " as ".$horacon.":".$minutocon. ":" .$segundocon ;
	
$sqlfunccon = "SELECT nome FROM funcionario where id_funcionario = "
.$id_funcionariocon;
$resultfunccon = mysql_query($sqlfunccon, $con);

	while ($rowfunccon = mysql_fetch_array ($resultfunccon)){

$nomefunccon = $rowfunccon["nome"];

	

?>
<div class="centro">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td bgcolor="#0099CC"><div align="center"><span class="title">Comunicados</span>
        <?php	
include_once 'fontes/conexao.php';
$sqlcon = "SELECT * FROM comunicado where ativo = 1 ORDER BY data desc ";
$resultcon = mysql_query($sqlcon, $con);
$num_rows = mysql_num_rows($resultcon);
while ($rowcon = mysql_fetch_array ($resultcon)){
$datacon = $rowcon["data"];
$comunicadocon = $rowcon["comunicado"];
$id_funcionariocon = $rowcon["id_funcionario"];
$ativocon = $rowcon["ativo"];
$idcon = $rowcon["id"];
//	$divnome = explode(" ",$nome);

	$datatimecon = explode(" ",$datacon);
	$datadiacon = $datatimecon[0];
	$datahoracon = $datatimecon[1];
	
	$dataexpcon = explode("-",$datadiacon);
	
	$anocon = $dataexpcon[0];
	$mescon = $dataexpcon[1];
	$diacon = $dataexpcon[2];
	
	

    switch ($mescon) {
    case "01": $mesnomecon = "Janeiro"; break;
    case "02": $mesnomecon = "Fevereiro"; break;
    case "03": $mesnomecon = "Março"; break;
    case "04": $mesnomecon = "Abril"; break;
    case "05": $mesnomecon = "Maio"; break;
    case "06": $mesnomecon = "Junho"; break;
    case "07": $mesnomecon = "Julho"; break;
    case "08": $mesnomecon = "Agosto"; break;
    case "09": $mesnomecon = "Setembro"; break;
    case "10": $mesnomecon = "Outubro"; break;
    case "11": $mesnomecon = "Novembro"; break;
    case "12": $mesnomecon = "Dezembro"; break;
    };
	
	$dataformatcon = "Dia ".$diacon. " de ".$mesnomecon. " de " .$anocon ;
	
		$horaexpcon = explode(":",$datahoracon);
	
	$horacon = $horaexpcon[0];
	$minutocon = $horaexpcon[1];
	$segundocon = $horaexpcon[2];
	
	$horaformatcon = " as ".$horacon.":".$minutocon. ":" .$segundocon ;
	
$sqlfunccon = "SELECT nome FROM funcionario where id_funcionario = "
.$id_funcionariocon;
$resultfunccon = mysql_query($sqlfunccon, $con);

	while ($rowfunccon = mysql_fetch_array ($resultfunccon)){

$nomefunccon = $rowfunccon["nome"];

	
?>
      </div></td>
    </tr>
  </table>
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="64%" bgcolor="#80C2E3" class="textomenorpreto"> Eviado Por: <em><strong><?php echo $nomefunccon;  ?></strong></em></td>
      <td width="36%" bgcolor="#80C2E3" class="textomenorpreto"><?php echo $dataformatcon ?><?php echo $horaformatcon ?></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#F3F3F3" class="textomenorpreto"><div align="center"><?php echo $comunicadocon ?> </div></td>
    </tr>
    <?php } 
	  }
	}
}

	  ?>
  </table>
</div>
<div class="clear"><p>&nbsp;</p></div></div>
</p><span class="aviso">Intranet RBNA (Acesso Interno)</span>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>