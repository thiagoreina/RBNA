
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
	color: #FFF;
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
    <td width="36%" bgcolor="#003366" class="title">Intranet RBNA</td>
    <td width="37%" bgcolor="#003366"><div align="center"><span class="textomenor">
      <?php 
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
			
        ?>
    </span></div></td>
    <td width="19%" bgcolor="#003366" class="title"><?php 
	  
	  $nome = explode(" ", $_SESSION["nome"]);
	  
	  
	  echo "Olá ".$nome[0] . " ";?></td>
    <td width="8%" bgcolor="#003366"><div align="center">
      <div align="center"><a href="logout.php" class="title"><span class="title">Sair</span></span></a></div></td>
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
      <div align="center"></div></td>
  </tr>
</table>
</div>


<p><span class="aviso">
  </span></p>
<div class="centro">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
     <tr>
       <td bgcolor="#003366"><div align="center"><span class="title">Eventos</span></div></td>
     </tr>
   </table>
   <?php
   include_once 'fontes/conexao.php';
$sqleventos = "SELECT * FROM eventos ORDER by DATA DESC";
$resulteventos = mysql_query($sqleventos, $con);
while ($roweventos = mysql_fetch_array ($resulteventos)){
	
$imagem = $roweventos["imagens"]; 
$dataevento = $roweventos["data"];

$dteventformat = explode("-",$dataevento);
	
	$anoevent = $dteventformat[0];
	$mesevent = $dteventformat[1];
	$diaevent = $dteventformat[2];
	
	$dataformatev = $diaevent."/".$mesevent."/".$anoevent;
	
	
	?>
   <table width="100%" border="0" cellpadding="2" cellspacing="2">
     <tr>
       <td bgcolor="#999999" class="textomenor"><div class="solicitacao">
         <div align="center" class="textomenor">Data do Evento: <?php echo $dataformatev ?></div>
       </div></td>
       <td width="56%" bgcolor="#CCCCCC" class="textomenor"><div align="center"><span class="texto"><strong><?php echo $roweventos["titulo"] ?></strong></span></div></td>
       <td width="25%" bgcolor="#999999" class="textomenor"><div class="solicitacao">
         <?php $sqlfuncionario = "SELECT nome FROM funcionario where id_funcionario =" .$roweventos["id_funcionario"];
$resultfuncionario = mysql_query($sqlfuncionario, $con);
while ($rowfuncionario = mysql_fetch_array ($resultfuncionario)){
	
	
?>
        Postado por: <?php echo $rowfuncionario["nome"]; }?></div></td>
     </tr>
     <tr>
       <td width="19%" bgcolor="#CCCCCC" class="textomenor"><div align="center">
       <span class="solicitacao">
       <?php 
		if(empty($imagem)){
		echo "<img src='imagens/nophoto.jpg' width='185' height='150' alt='perfil' />";
		
		}else{
			echo "<img src='img_eventos/".$imagem."/thumbs.jpg' width='185' height='150' alt='Foto de exibição' />";
		}
		
		?>
       </span></div></td>
       <td colspan="2" rowspan="2" bgcolor="#E9E9E9" class="textomenorpreto"><div class="solicitacao"><?php echo $roweventos["descricao"] ?></div></td>
     </tr>
     <tr>
       <td bgcolor="#E9E9E9"><div class="solicitacao">	<?php 
	   if(empty($imagem)){
		echo " ";
		
		}else{
			echo "<a href='galeria/galeria/fotos.php?id=".$imagem."'>Ver mais</a>";
		}
        ?> 
        </div></td>
     <?php }
	  ?></tr>
    </table>
 </div>
 <p>&nbsp;</p>
<div class="clear"><p>&nbsp;</p></div></div>
</p><span class="aviso">Intranet RBNA (Acesso Interno)</span>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>