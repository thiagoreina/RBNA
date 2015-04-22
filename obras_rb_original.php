
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>

<script type="text/javascript">

function habilitaText(obj,id) {
if(obj.changed == true){
document.getElementById(id).disabled = true; 



}else{
document.getElementById(id).disabled = false;
}
}

</script>
<script type="text/javascript">
 var elem = document.getElementById("select");
var selectVal = elem.options[elem.selectedIndex].value;
</script>

      <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
      <script type="text/javascript">

            function excluir(id){
                if(confirm('Deseja realmente excluir essa Obra ?')){
                    //redirecionar para o excluir
                    location.href="exc_obras_rb.php?id="+id;
                }
            }

        </script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
        <script type="text/javascript" src="dojo/dojo.js"></script>
         <script src = "http://code.jquery.com/jquery-1.9.1.js"> </script>
        <script src="fontes/alt.js" type="text/javascript"></script>
		<script type="text/javascript" src="dojo/utils.js"></script>

<link href="fontes/alt.css" rel="stylesheet" type="text/css" />
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
</head>

<?php 
include_once 'validar.php';
?>

<div id="fixo" align="center" ><table width="99%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="8" bgcolor="" class="titulo-topo"><div align="center"><span class="title"><span class="texto">Legenda</span></span></div></td>
    </tr>
    <tr>
      <td width="2%"   ><img src="imagens/legenda/gray.png" width="20" height="20"  alt="Embarcações que não estão no RBNA" title="Embarcações que não estão no RBNA"/></td>
      <td width="30%"  class="textomenor"><span class="textomenorpreto">Embarcações que não estão no RBNA</span></td>
      <td width="2%" ><img src="imagens/legenda/black.png" width="20" height="20"  alt="Embarcações certificadas pelo RBNA" title="Embarcações certificadas pelo RBNA"/></td>
      <td width="28%"  class="textomenorpreto">Embarcações certificadas pelo RBNA</td>
      <td width="2%"  ><img src="imagens/legenda/red.png" width="20" height="20"  alt="Clientes inadimplentes" title="Clientes inadimplentes"/></td>
      <td width="18%"  class="textomenorpreto">Clientes inadimplentes</td>
      <td width="2%"  ><img src="imagens/legenda/pink.png" width="20" height="20"  alt="Clientes insatisfeitos" title="Clientes insatisfeitos"/></td>
      <td width="16%"  class="textomenorpreto">Clientes insatisfeitos</td>
    </tr>
  </table></div>

<body background="imagens/bg1.jpg" class="bg" >
<div align="center" class="total">

<div align="center">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
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
    <div align="center"></div>    <div align="center"> </div></td>
</tr>
</table>
<p> </p>
      
        <div class="solicitacao"><div align="center"><span class="texto">Procurar por:
          <label for="check"></label>
          <select name="select" id="select" >
<option value="embarcacao" selected="selected">Embarcação</option>
<option value="registro">Registro</option>
            <option value="contratante">Contratante</option>
            <option value="tipoembarcacao">Tipo</option>
        </select>
        </span>
            
<span class="texto"> </span><span class="texto">
<select name="check" id="check"  >
  <option value="0">Status</option>
  <option value="1" style="color:#666">Fora RBNA</option>
  <option value="2" style="color:#000">Cert. RBNA</option>
  <option value="3" style="color:#F00">Inadimplentes</option>
  <option value="4" style="color:#F0F">Insatisfeitos</option>
</select>
<select name="regiao" id="regiao" >
  <option selected="selected" value="0" >Região</option>
  <option value="rio de janeiro">Rio de Janeiro</option>
  <option value="belem">Belem</option>
  <option value="manaus">Manaus</option>
</select>
<input name="busca" type="text" autofocus="autofocus" id="texto" placeholder="Digite sua busca" size="40"/> 
</span>
<label for="check"></label>
<a href="#"><img src="imagens/buscar.png" width="79" height="22"  alt="" onclick="ajax('dados_obras_rb.php?select='+document.getElementById('select').value+'&nome='+document.getElementById('texto').value+'&check='+document.getElementById('check').value+'&local='+document.getElementById('regiao').value, 'conteudo')" align="absmiddle"/></a> </div>
<div id="conteudo"></span>

<?php

    include_once 'fontes/conexao.php';

    $sql = "select * from obras_rb ORDER BY registro ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
		

        ?>
        

<div align="center" id="result"><table width="95%" border="0" cellspacing="1" cellpadding="2" >
<tr>
      <td bgcolor=#666666 class='textomenorB'>Registro:</td>
    <td  bgcolor=#666666 class='textomenorB'>Embarcação:</td>
    <td  bgcolor=#666666 class='textomenorB'>Tipo:</td>
	<td  bgcolor=#666666 class='textomenorB'>Contratante:</td>
    <td  bgcolor=#666666 class='textomenorB'>Detalhe:</td>
    <td  bgcolor=#666666 class='textomenorB'>PDF:</td>
    <td  bgcolor=#666666 class='textomenorB'><img src='imagens/legenda/gray.png' width='20' height='20'  alt='Embarcação não está no RBNA' title='Embarcação que não está no RBNA'/></td>
    <td  bgcolor=#666666 class='textomenorB'><img src='imagens/legenda/black.png' width='20' height='20'  alt='Embarcação certificada pelo RBNA' title='Embarcação certificada pelo RBNA'/></td>
    <td  bgcolor=#666666 class='textomenorB'><img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente'/></td>
    <td  bgcolor=#666666 class='textomenorB'><img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito'/></td>
    </tr>
<?php
        while ($row = mysql_fetch_array($result)) { 
		
		 $registro = $row['registro'];
		$link_obra1 = substr($registro,0,2);
   		$link_obra = strtolower($link_obra1);
		?>
       <tr style="cursor:default" onMouseOver="javascript:this.style.backgroundColor='<?php if ($row['inadimplentes'] == 1){

   echo "#FF5B5B";
	   }else{
		echo "#EAEAEA";   
	  

}
?>'" onMouseOut="javascript:this.style.background='none'">
        <td width="7%" class='textomenorpretoB' title="<?php $contagemreg = strlen($row['registro']);

if ($contagemreg > '5') {

   echo $row['registro'];
}
?>"><div class='solicitacao' style="height:20px"><?php echo substr($row['registro'],0,5);

if ($contagemreg > '5') {

   echo "..."; 

   

   }

 ?></td>
           <td width="25%" class='textomenorpreto' title="<?php $contagemembarcacao = strlen($row['embarcacao']);

if ($contagemembarcacao > '25') {

   echo $row['embarcacao'];
}
?>"><div class="solicitacao" style="height:20px" ><?php echo substr($row['embarcacao'],0,25);

if ($contagemembarcacao > '25') {

   echo "..."; 

   

   }



 ?></td>
 
 
 <td width="25%" class='textomenorpreto' title="<?php $contagemtipo = strlen($row['tipoembarcacao']);

if ($contagemtipo > '25') {

   echo $row['tipoembarcacao'];
}
?>"><div class="solicitacao" style="height:20px" ><?php echo substr($row['tipoembarcacao'],0,25);

if ($contagemtipo > '25') {

   echo "..."; 

   

   }



 ?></td>
 
 
		
                  <td width="38%" class="textomenorpreto" title="<?php $contagemcontratante = strlen($row['contratante']);

if ($contagemcontratante > '35') {

   echo $row['contratante'];
}
?>"><div class="solicitacao" style="height:20px"><?php echo substr($row['contratante'],0,35);

if ($contagemcontratante > '35') {

   echo "..."; 

   

   }
$dataatt = $row["att"];   
 
$timestamp1 = strtotime($dataatt);

$dataformat =date('d/m/Y H:i:s', $timestamp1);


 ?></td>
         <th width="8%" class="textomenorpreto"><div class="solicitacao" style="height:20px"><a href="javascript:MM_openBrWindow('detalhe_obras_rb.php?id=<?php echo $row["id"] ?>','edit','width=1020,height=330')" onmouseover="tooltip.show('Ultima Atualização: <br> <?php echo $dataformat ?>');" onmouseout="tooltip.hide();">
         <div align="center"><img src="imagens/detalhe.png" style="border:none" width="20" height="20" align="absmiddle" /></div></a></div></th>
         <th width="6%" class="texto"><div class="solicitacao" style="height:20px">
           <div align="center"><a href="admin/obras/obras_<?php echo $link_obra ?>/<?php echo $row["pdf"]  ?>" target="_blank"><img src="imagens/pdf.png" style="border:none" width="20" height="20" /></a></div>
         </div></th>
<th width="3%" class="texto"><div class="solicitacao" align="center" style="width:20px ; height:20px"> <?php if ($row['forarbna'] == 1){

   echo "<img src='imagens/legenda/gray.png' width='20' height='20'  alt='Embarcação não está no RBNA' title='Embarcação que não está no RBNA'/>";

}else{
echo "&nbsp;";	
}
?></th>
<th width="3%" class="texto" bgcolor=""><div class="solicitacao" align="center" style="width:20px ; height:20px"><?php if ($row['certrbna'] == 1){

   echo "<img src='imagens/legenda/black.png' width='20' height='20'  alt='Embarcação certificada pelo RBNA' title='Embarcação certificada pelo RBNA'/>";

}else{
echo "&nbsp;";	
}
?></th>
<th width="3%" class="texto" bgcolor=""><div class="solicitacao" align="center" style="width:20px ; height:20px"><?php if ($row['inadimplentes'] == 1){

   echo "<img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente'/>";

}else{
echo "&nbsp;";	
}
?></th>
<th width="3%" class="texto" bgcolor=""><div  class="solicitacao" align="center" style="width:20px ; height:20px"><?php if ($row['insatisfeitos'] == 1){

   echo "<img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito'/>";

}else{
echo "&nbsp;";	
}
?></th>
<?php
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
    } else {
       echo "<p class='texto'> <img src='imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
}    
?> 
<script type="text/javascript">
<!--
//-->
  </script>

</tr>
</table>
  <p>&nbsp;</p>
</div></div></div>





<p>&nbsp;</p>
<div class="clear"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>