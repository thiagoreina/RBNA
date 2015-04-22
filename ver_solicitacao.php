
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <script type="text/javascript" src="js/jquery.validate.js"></script>
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
<link href="../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../jQueryAssets/jquery-ui-1.9.2.accordion.custom.min.js" type="text/javascript"></script>
       
        
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
    <td width="37%" bgcolor="#003366" class="title"><div align="center">Solicitações</div></td>
    <td width="19%" bgcolor="#003366" class="title"><?php 
		include_once 'fontes/conexao.php';
	  
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="centro">
  <table width="100%" border="1">
    <tr>
      <td bgcolor="#0099CC"><div align="center"><span class="title">Solicitações Pendentes Para seu Setor</span></div></td>
    </tr>
  </table>
<?php

  $sqluser = "select * from funcionario where id_funcionario = ".$_SESSION["idfunc"];
  
                $resultuser = mysql_query($sqluser,$con);

                while($rowuser = mysql_fetch_array($resultuser)){
					
				$gerente = $rowuser["gerente"];	
				$setoruser =  $rowuser["id_setor"];
				}
  if($gerente == 0){
	echo "<br><span class='aviso'>Acesso Negado, você não é Gerente do seu Setor<br>
	 <a href='#'>clique aqui para voltar</a></span>";   
  }else{
  

		  
		  
$sql= "select * from solicitacao where id_setor = ".$setoruser." ORDER BY data DESC";
		  
		  $result = mysql_query($sql, $con);
		  echo "  <div id='Accordion1'>
    <h3>";
	
	$num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
		
while ($row = mysql_fetch_array ($result)){
		  $id = $row["id"];
		  $data = $row["data"];
		  $solicitacao = $row["solicitacao"];
		  $pendente = $row["pendente"];
		  $idsetor = $row["id_setor"];
		  $idfuncionario = $row["id_funcionario"];
		  
$sqlautor= "select * from funcionario where id_funcionario = ".$idfuncionario;
		  
		  $resultautor = mysql_query($sqlautor, $con);
		 
		
while ($rowautor = mysql_fetch_array ($resultautor)){
	
	$autor = $rowautor["nome"];
	  
		$autorexp = explode(" ",$autor);
		
		$autor1 = $autorexp[0]." ".$autorexp[1];  
		     
   
   $datatime = explode(" ",$data);
	$datadia = $datatime[0];
	$datahora = $datatime[1];
	
	$dataexp = explode("-",$datadia);
	
	$ano = $dataexp[0];
	$mes = $dataexp[1];
	$dia = $dataexp[2];
	
	$data = $dia."/".$mes."/".$ano;
		  
		  
		  
		  if($pendente == 1){
			$pendente = "<img src='imagens/pending.png' alt='Pendente' width='20' height='20' align='absmiddle' />";  
		  }else{
			  $pendente = "<img src='imagens/accept.png' alt='Pendente' width='20' height='20' align='absmiddle' />"; 
		  }
		  
		   $sqlsetor= "select * from setor where id = ".$idsetor;
		  
		  $resultsetor = mysql_query($sqlsetor, $con);
		  $rowsetor = mysql_fetch_array ($resultsetor);
		  echo "<a href='#' ><span class='textomenorpretoB'>".$pendente." Solicitação De ".$autor1." Para ".$rowsetor["setor"]." ".$data."</span></a></h3>
    <div>
      <p>".$solicitacao."</p>
	  <div align='right' class='textomenorB'><a href='acc_solicitacao.php'><img src='imagens/accept.png' alt='Pendente' width='20' height='20' align='absmiddle' />Solicitação Atendida</a></div>
    </div>
	
	
	";
}
}	
	}else{
		echo "<a href='#'>Nenhuma Solicitação</a></h3>
    <div>
      <p>Este Setor não tem nenhuma solicitação pendente !</p>
    </div>";
		
	}

?>

</div>


  <p>&nbsp;</p>
</div>
<div align="left">
  
</div>
<div class="clear"></div>

<?php 
if ($num_rows > 0) {
	echo "
<div class='centro'>
  <div align='center'>
    <table width='90%' border='0' cellspacing='2'>
      <tr>
        <td colspan='4' bgcolor='#EBEBEB' class='textomenorpretoB'><div align='center'>Legenda</div></td>
      </tr>
      <tr>
        <td width='6%' bgcolor='#EBEBEB'><img src='imagens/pending.png' width='20' height='20'  alt=''/></td>
        <td width='46%' bgcolor='#EBEBEB' class='textomenorpreto'>Soicitação Pendente</td>
        <td width='6%' bgcolor='#EBEBEB'><img src='imagens/accept.png' width='20' height='17'  alt=''/></td>
        <td width='42%' bgcolor='#EBEBEB' class='textomenorpreto'>Soicitação Atendida</td>
      </tr>
    </table>
  </div>
</div>";
}

  }
?>

  <div class="clear"></div>
  
  
  <p>&nbsp;</p><span class="aviso">Intranet RBNA (Acesso Interno)</span></p></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
$(function() {
	$( "#Accordion1" ).accordion({
		collapsible:true,
		active: 100
	}); 
});
</script>
</body>
</html>