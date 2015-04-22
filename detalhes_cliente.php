
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
<link href="../jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="../jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="../jquery.ui.accordion.min.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../jquery-ui-1.9.2.accordion.custom.min.js" type="text/javascript"></script>
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
<p>
  <?php 
  include_once 'fontes/conexao.php';
  include("fontes/anti_injection.php");



$idCliente = anti_injection($_GET['id']);
  //GABIARRAAAA!
$aspas = "'";

  $sqlMatriz =  "select * from matriz where idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlMatriz, $con));
  $rowMatriz = mysql_fetch_array($result);	   
  
  
  if (mysql_num_rows($result) > 0) {
  
  
  ?>
</p>
<p></p>
<div class="clear">
  <div class="meio">
    <table width="100%" border="0">
      <tr>
        <td colspan="5" bgcolor="#CCCCCC" class="texto"><div align="center">Dados da Matriz</div></td>
      </tr>
      <tr>
        <td width="230" class="textomenorpretoB"><div class="solicitacao">Razão:</div></td>
        <td width="281" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["razao"] ?></div></td>
        <td width="93" class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
        <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["telefone"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Fantasia:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["fantasia"] ?></div></td>
        <td class="textomenorpretoB"><div class="solicitacao">Fax:</div></td>
        <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["fax"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">
          <?php
	   if ($rowMatriz["cnpj"]!=0){
	   echo "CNPJ: ";
	   $pjpf = $rowMatriz["cnpj"];
	   
	   }
	   elseif ($rowMatriz["cpf"] !=0){
	   echo "CPF: ";
	   $pjpf = $rowMatriz["cpf"];
	   
	   }else {
		  echo "CNPJ/CPF"; 
		  $pjpf = "";
	   }
	    ?>
        </div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $pjpf ?></div></td>
        <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
        <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["email"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Inscrição Municipal:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["inscricaoMunicipal"] ?></div></td>
        <td class="textomenorpretoB"><div class="solicitacao">Site:</div></td>
        <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo "<a href='".$rowMatriz["site"]."'>".$rowMatriz["site"]."</a>" ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Inscrição Estadual:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["inscricaoEstadual"] ?></div></td>
        <td colspan="2" class="textomenorpreto"><div class="solicitacao">
          <?php if ($rowMatriz["inadimplente"]== 0){
		 $inadimplente = "Cliente Adimplente<img src='imagens/legenda/unred.png' width='20' height='20'  alt='Cliente Adimplente' title='Cliente Adimplente' align='absmiddle'/>"; 
	  }
	  if ($rowMatriz["inadimplente"]== 1){
		 $inadimplente = "Cliente Inadimplente <img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente' align='absmiddle'/>"; 
	  }
	  
	  echo $inadimplente;
	  
	  ?>
        </div></td>
        <td width="169" class="textomenorpreto"><div class="solicitacao">
          <?php if ($rowMatriz["insatisfeito"]== 0){
		 $insatisfeito = "Cliente Satisfeito <img src='imagens/legenda/unpink.png' width='20' height='20'  alt='Cliente Satisfeito' title='Cliente Satisfeito' align='absmiddle'/>"; 
	  }
	  if ($rowMatriz["insatisfeito"]== 1){
		 $insatisfeito = "Cliente Insatisfeito <img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>"; 
	  }
	  
	  echo $insatisfeito; ?>
        </div></td>
      </tr>
      <tr>
        <td colspan="5" class="textomenorB">&nbsp;</td>
      </tr>
    </table>
    <?php
  $sqlResp =  "select * from responsavel where matriz_idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlResp, $con));
  $rowResp = mysql_fetch_array($result);	   
  
   if (isset ($rowResp["idresponsavel"])){

  ?>
    <table width="100%" border="0">
      <tr>
        <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Dados do Responsável</div></td>
      </tr>
      <tr>
        <td width="34%" class="textomenorpretoB"><div class="solicitacao">Nome:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["nome"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["email"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">CPF:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["cpf"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Cargo:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["cargo"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["telefone"] ?></div></td>
      </tr>
      <tr>
        <td class="textomenorpretoB"><div class="solicitacao">Celular:</div></td>
        <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["celular"] ?></div></td>
      </tr>
      <tr>
        <td rowspan="2" class="textomenorpretoB"><a href="javascript:MM_openBrWindow('editar_resp_matriz.php?id=<?php  echo $rowResp["idresponsavel"] ?>','edit','scrollbars=yes,width=855,height=230')"></a></td>
        <td class="textomenorpreto">&nbsp;</td>
      </tr>
      <tr>
        <td class="textomenorpretoB"></td>
        </tr>
    </table>
   
    <div class="clear"><br />
    </div>
    <?php
   }
  
  $sqlendCorresp =  "select * from endereco where tipo_end_idtipo_end = 1 and matriz_idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlendCorresp, $con));
  $rowendCorresp = mysql_fetch_array($result)	   
  
  
  
  ?>
    <div id="Accordion1">
      <?php
  if (isset ($rowendCorresp["idEndereco"])){
	echo ' <h3><a href="#">Endereço de Correspondência</a></h3>
    <div>
      <table width="100%" border="0">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Endereço de Correspondência</div></td>
        </tr>
        <tr>
          <td width="34%" class="textomenorpretoB"><div class="solicitacao">Logradouro:</div></td>
          <td width="66%" class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["logradouro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Numero:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["numero"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CEP:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["cep"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Bairro:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["bairro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Complemento:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["complemento"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Cidade:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["cidade"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Estado:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["estado"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Pais:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"> '.$rowendCorresp["pais"].'</div></td>
        </tr>
        <tr>
		
		
<br>
		
		
          <td colspan="2" class="textomenorB"><div class="solicitacao" style="text-align:right"></div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>';

   
 
	}else{
	echo '<h3><a href="#">Endereço de Correspondência</a></h3>
    <div>    <table width="100%" border="0">
      <tr>
        <td><div align="center" class="textomenorpretoB"><img src="imagens/alert.png" width="20" height="20"  alt="" align="absmiddle"/> Sem Endereço <img src="imagens/alert.png" width="20" height="20"  alt=""  align="absmiddle"/></div></td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table></div>';
	}
	?>
      <?php
  
  $sqlendCobra =  "select * from endereco where tipo_end_idtipo_end = 2 and matriz_idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlendCobra, $con));
  $rowendCobra = mysql_fetch_array($result)	   
  
  
  
  ?>
      <?php
  if (isset ($rowendCobra["idEndereco"])){
	echo '<h3><a href="#">Endereço de Cobrança</a></h3>
    <div>
      <table width="100%" border="0">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Endereço de Cobrança</div></td>
        </tr>
        <tr>
          <td width="34%" class="textomenorpretoB"><div class="solicitacao">Logradouro:</div></td>
          <td width="66%" class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["logradouro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Numero:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["numero"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CEP:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["cep"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Bairro:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["bairro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Complemento:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["complemento"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Cidade:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["cidade"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Estado:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["estado"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Pais:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"> '.$rowendCobra["pais"].'</div></td>
        </tr>
        <tr>
          <td colspan="2" class="textomenorB"><div class="solicitacao" style="text-align:right"></div></td>
        </tr>
      </table>

    </div>'
	;
  }else{
  
  echo '<h3><a href="#">Endereço de Cobrança</a></h3>
    <div>    <table width="100%" border="0">
      <tr>
        <td><div align="center" class="textomenorpretoB"><img src="imagens/alert.png" width="20" height="20"  alt="" align="absmiddle"/> Sem Endereço <img src="imagens/alert.png" width="20" height="20"  alt=""  align="absmiddle"/></div></td>
      </tr>
      <tr>
        <td><div align="right"><a href="#" class="textomenorB"></div></td>
      </tr>
    </table></div>';
  }
  ?>
    </div>
</div>
  <div class="clear"><br />
  </div>
  
</div>
<p class="textomenorpretoB">
  <?php
            if(isset ($_GET["msgFilial"])){
                echo "<img src='imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/> ". $_GET["msgFilial"]." <img src='imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/>";
            }
        ?>
</p>
<div class="meio">
  <div id="Accordion2">
    <?php 
	$i = 1;
	$sqlFilial =  "select * from filial where matriz_idMatriz = ".$idCliente;
  
  $resultFilial = (mysql_query($sqlFilial, $con));
   if (mysql_num_rows($resultFilial) > 0) {
	   
  while ( $rowFilial = mysql_fetch_array($resultFilial)){	
  
  
  $idfilial = $rowFilial["idfilial"];
  $sqlendFilial =  "select * from endereco where filial_idfilial = ".$idfilial;
  
  $resultendFilial = (mysql_query($sqlendFilial, $con));
  $rowendFilial = mysql_fetch_array($resultendFilial);	   
  
  
  
?>
    <h3><a href="#">Filial <?php echo "[".$i++."] ".$rowFilial["nome"] ?></a></h3>
    <div>
      <p align="right">&nbsp;</p>
      <table width="100%" border="0">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Dados Gerais</div></td>
          <td colspan="3" bgcolor="#CCCCCC" class="texto"><div align="center">Endereço</div></td>
        </tr>
        <tr>
          <td width="180" class="textomenorpretoB"><div class="solicitacao">Nome:</div></td>
          <td width="272" class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["nome"] ?></div></td>
          <td width="152" class="textomenorpretoB"><div class="solicitacao">Logradouro:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["logradouro"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["email"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Numero:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["numero"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CNPJ/CPF:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">
            <?php
	   if ($rowFilial["cnpj"]!=0){
	   $cnpjcpf = "CNPJ: ".$rowFilial["cnpj"];
	   
	   }
	   elseif ($rowFilial["cpf"] !=0){
	   $cnpjcpf = "CPF: ".$rowFilial["cpf"];
	   
	   }else {
		  $cnpjcpf = ""; 
	   }
	   echo $cnpjcpf  ?>
          </div></td>
          <td class="textomenorpretoB"><div class="solicitacao">CEP:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["cep"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Inscrição Municipal:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["inscricaoMunicipal"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Bairro:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["bairro"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Inscrição Estadual:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["inscricaoEstadual"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Complemento:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["complemento"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["telefone"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Cidade:</div></td>
          <td width="35" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["estado"] ?></div></td>
          <td width="264" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["cidade"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Fax:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["fax"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Pais:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["pais"] ?></div></td>
        </tr>
        <?php
  $sqlRespFilial =  "select * from responsavel where filial_idfilial = ".$idfilial;
  
  $resultRespFilial = (mysql_query($sqlRespFilial, $con));
  $rowRespFilial = mysql_fetch_array($resultRespFilial);
     
  if (mysql_num_rows($resultRespFilial) > 0) {
  

  //<table width='100%' border='0'>
  
   	echo "
         <tr>
          <td colspan='2'><a href='#'>
           
          </a></td>
          <td colspan='2'><a href='javascript:excluirFilial('".$idfilial."','".$idCliente."')>
		  
		  
		  
          
		  
		  
		  
		    <div class='solicitacao' style='text-align:center'></td>
          <td colspan='2'></td>
        </tr>
      ";
  
  ?>
      </table>
      </p>
      <table width="100%" border="0">
        <tr>
          <td colspan="4" bgcolor="#CCCCCC" class="texto"><div align="center">Dados do Responsável</div></td>
        </tr>
        <tr>
          <td width="34%" class="textomenorpretoB"><div class="solicitacao">Nome:</div></td>
          <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["nome"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
          <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["email"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CPF:</div></td>
          <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["cpf"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Cargo:</div></td>
          <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["cargo"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
          <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["telefone"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Celular:</div></td>
          <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["celular"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Senha:</div></td>
          <td colspan="3" class="textomenorpreto">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="4" class="textomenorB"><div class="solicitacao" style="height:30px">&nbsp;</div></td>
          </tr>
      </table>
      <?php

  }else if ((mysql_num_rows($resultRespFilial) < 1) && (empty ($rowResp["idresponsavel"]))){
	
	  

	echo "
	
		  <table width='100%' border='0'>
        <tr>
          <td colspan='2'><a href='#'>
            <div class='solicitacao' style='text-align:center'></div>
          </a></td>
          <td colspan='2'></td>
          <td colspan='2'></td>
        </tr>
      </table>
	  <br><br>
	  ";
	
	
  }else{
	  
	   
	echo "
	
		  <table width='100%' border='0'>
        <tr>
          <td colspan='2'><a href='#'>
            <div class='solicitacao' style='text-align:center'></div>
          </a></td>
          <td colspan='2'></td>
          <td colspan='2'></td>
        </tr>
      </table>
	  <br><br>
	  <span class='aviso'><img src='imagens/warning.png' width='20' height='20' align='absmiddle' /> O responsável desta Filial é o mesmo que o da Matriz</span>";

	  
  }
  ?>
    </div>
    <?php
  }
 
  }else{
	echo "<span class='aviso'><img src='imagens/warning.png' width='20' height='20' align='absmiddle' /> Esta Empresa não tem Filial Cadastrada.</span>";  
	  
  }
  
 
	  ?>
  </div>
  <br />
</div>
</p>
<p>&nbsp;</p>
<?php 
	
	}else{
	  echo "<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <p>&nbsp;</p><span class='aviso'><img src='imagens/warning.png' width='30' height='30' align='absmiddle' />Cliente Não Encontrado </span> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>";
  } 
  
  ?>
  <div class="clear">   
 </div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
$(function() {
	$( "#Accordion1" ).accordion({
		collapsible:true,
		active:10
	}); 
});
$(function() {
	$( "#Accordion2" ).accordion({
		collapsible:true,
		active:1000,
		animate:{easing: "linear"}
	}); 
});
</script>
</body>
</html>