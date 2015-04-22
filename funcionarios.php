
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
    <td width="8%" bgcolor="#003468"><div align="center"><a href="logout.php" class="title"><span class="title">Sair</span></a></td>
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
 </p>
 <table width="100%" border="0">
  <tr>
    <td class="titulo-topo" bgcolor="#0099CC"><div align="center">Lista Funcionários</div></td>
  </tr>
</table>

<?php
$sql = "select * from funcionario where desligado = 0 ORDER BY nome ";
$result = mysql_query($sql, $con);
$num_rows = mysql_num_rows($result);
while ($row = mysql_fetch_array ($result)){

$datanasc = $row["data_nasc"];
$nome = $row["nome"];
$email = $row["email"];
$foto = $row["foto"];
$matricula = $row["matricula"];
$setor = $row["id_setor"];
$celular = $row["celular"];
$ramal = $row["ramal"];
$ficha = $row["ficha"];

$gerente = $_SESSION["gerente"];

$setor_gerente = $_SESSION["id_setor"]; 
	$divnome = explode(" ",$nome);


	$data = explode("-",$datanasc);
	
	$ano = $data[0];
	$mes = $data[1];
	$dia = $data[2];
	





?>


  <table width="95%" height="201" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="3" bgcolor="#CCCCCC"><div class="solicitacao">
            <div align="center" class="texto"><?php echo $nome ?></div>
        </div></td>
      </tr>
      <tr>
        <td width="307" rowspan="8"><div class="foto"><?php 
		if(empty($foto)){
		echo "<img src='imagens/nophoto.jpg' width='300' height='250' alt='perfil' />";
		
		}else{
			echo "<img src='fotos/".$foto."' width='300' height='250' alt='Foto de exibição' />";
		}
		
		?></div></td>
        <td width="173" bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Nome: </div></td>
        <td width="450" bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $nome ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Matricula: </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $matricula ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Setor: </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php 
		$sqlsetor = "select * from setor where id = ".$setor;
		$resultsetor = mysql_query($sqlsetor, $con);
		while ($rowsetor = mysql_fetch_array ($resultsetor)){
		echo $rowsetor["setor"];		
		
		 ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Ramal: </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $ramal ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Aniversario:</div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"> dia
            <?php 
		
			echo $dia."/".$mes;

			?>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><div class="texto">Email:</div></td>
        <td bgcolor="#EEEEEE" class="texto">
          <div class="solicitacao"><span class="texto"><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></span>
        </div></td>
    </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><div class="texto">Celular:</div></div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><a href="mailto:<?php echo $email ?>"><?php echo $celular ?></a>&nbsp; </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto">&nbsp;</td>
        <td bgcolor="#EEEEEE" class="texto"><?php
		//se for admin Mostra todas as fichas
		if ($_SESSION["perfil"] == 1){
			echo "<a href='/intranet/funcionario/ficha/".$ficha."' style='color:blue' target='_blank'><img src='imagens/pdf.png' width='20' height='20' align='absmiddle' />Ficha do Funcionário</a>";
		
		}
		//Se nao for admin e for gerente, mostra a ficha de todos os funcionarios do setor
		else if ($gerente == 1 && $rowsetor["id"] == $setor_gerente){
			echo "<a href='/intranet/funcionario/ficha/".$ficha.".pdf' style='color:blue' target='_blank'><img src='imagens/pdf.png' width='20' height='20' align='absmiddle' />Ficha do Funcionário</a>";
		
		}
		}
		 ?></td>
      </tr>
      <?php
	  
	  }


 ?>
 </table>
<div class="clear">
  <p></p></div></div>
</p><span class="aviso">Intranet RBNA (Acesso Interno)</span>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>