
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
		<script type="text/javascript" src="dojo/dojo.js"></script>
		<script src = "fontes/jquery-1.9.1.js"> </script>
        <script type="text/javascript" src="dojo/utils.js"></script>
        <script type="text/javascript" src="js/scriptdelista.js"></script>

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
    <td width="37%" bgcolor="#003366" class="title"><div align="center">Departamentos</div></td>
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
<div align="center"><span class="texto">Procurar por:
  <label for="check"></label>
  <select name="select" id="select" onchange="ajax('dados_clientes.php?select='+document.getElementById('select').value+'&amp;nome='+document.getElementById('texto').value+'&amp;check='+document.getElementById('check').value, 'conteudo')">
    <option value="razao" selected="selected">Razão</option>
    <option value="fantasia">Fantasia</option>
    <option value="cnpj">CNPJ</option>
    <option value="cpf">CPF</option>
  </select>
  </span> <span class="texto"> </span>
  <input name="busca" type="text" autofocus="autofocus" id="texto" placeholder="Digite sua busca"  onkeyup="ajax('dados_clientes.php?select='+document.getElementById('select').value+'&amp;nome='+document.getElementById('texto').value+'&amp;check='+document.getElementById('check').value, 'conteudo')" size="40"/>
  <span class="texto">
  <select name="check" id="check" onchange="ajax('dados_clientes.php?select='+document.getElementById('select').value+'&amp;nome='+document.getElementById('texto').value+'&amp;check='+document.getElementById('check').value, 'conteudo')" >
    <option value="0">Status</option>
    <option value="1" style="color:#F00">Inadimplentes</option>
    <option value="2" style="color:#F0F">Insatisfeitos</option>
  </select>
  </span>
  <label for="check"></label>
</div>
<p>
  <div id="conteudo">
  </p>

  <?php

    include_once 'fontes/conexao.php';

    $sql = "select * from matriz ORDER BY razao ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?></p>
  <div align="center" id="result">
    <table width="95%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="36%" bgcolor="#666666" class='title'>Razao Social:</td>
        <td width="33%"  bgcolor="#666666" class='title'>Fantasia:</td>
        <td width="20%"  bgcolor="#666666" class='title'>CPF / CNPJ</td>
        <td width="3%"  bgcolor="#666666" class='title'><div align="center"><img src="imagens/legenda/red.png" width="20" height="20"  alt=""/></div></td>
        <td width="2%"  bgcolor="#666666" class='title'><div align="center"><img src="imagens/legenda/pink.png" width="20" height="20"  alt=""/></div></td>
        <td width="6%"  bgcolor="#666666" class='title'><div align="center">Detalhes&nbsp;</div></td>
      </tr>
      <?php while ($row = mysql_fetch_array($result)) { 
	   
	   if ($row["cnpj"]!=0){
	   $cnpjcpf = "CNPJ: ".$row["cnpj"];
	   
	   }
	   elseif ($row["cpf"] !=0){
	   $cnpjcpf = "CPF: ".$row["cpf"];
	   
	   }else {
		  $cnpjcpf = ""; 
	   }
	  
	   if ($row["inadimplente"]==1){
	   $inadimplente = "<div align='center'><img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente'/></div>";
	   
	   
	   }else{
	   $inadimplente = "<div align='center'><img src='imagens/legenda/unred.png' width='20' height='20'  alt='Cliente Adimplente' title='Cliente Adimplente'/></div>";;
	   }
	   
	   if ($row["insatisfeito"]==1){
	   $insatisfeito = "<div align='center'><img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito'/></div>";
	   
	   }else{
	   $insatisfeito = "<div align='center'><img src='imagens/legenda/unpink.png' width='20' height='20'  alt='Cliente Satisfeito' title='Cliente Satisfeito'/></div>";
	   }
	   
	   
	   ?>
       
      <tr class="Tabelinha-Table" id="zebrada">
        <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'><?php echo $row["razao"] ?></div></td>
        <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'>
          <?php echo $row["fantasia"] ?></td>
        <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'>
          <?php echo $cnpjcpf  ?></td>
        <th bgcolor="#F2F2F2" class="textomenorpreto"><div class='solicitacao'><?php echo $inadimplente  ?></div></th>
        <th bgcolor="#F2F2F2" class="textomenorpreto"><div class='solicitacao'><?php echo $insatisfeito  ?></div></th>
        <th bgcolor="#F2F2F2" class="textomenorpreto"><a href='detalhes_cliente.php?id=<?php echo $row["idMatriz"] ?>')">
          <div class='solicitacao' style="text-align:center"><img src="imagens/detalhe.png" width="22" height="22" /></div>
        </a></th>
        <?php
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
    } else {
         echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhum Cliente Encontrado<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
    
?>
        <?php
}

?>
        <script type="text/javascript">
<!--
//-->
  </script>
      </tr>
    </table>
    <br />
    <p>&nbsp;</p>
  </div>
  <br />
<div class="clear"><p>&nbsp;</p><span class="aviso">Intranet RBNA (Acesso Interno)</span></p></div></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>