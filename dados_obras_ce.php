<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
        
<script type="text/javascript">
function openWindow(url){
popupWin = window.open(url, 'new_page', 'width=520, height=450')
}
</script>
<script type="text/javascript" src="dojo/dojo.js"></script>
         <script src = "http://code.jquery.com/jquery-1.9.1.js"> </script>
		<script src="fontes/alt.js" type="text/javascript"></script>
        <script type="text/javascript" src="dojo/utils.js"></script>
<link href="fontes/alt.css" rel="stylesheet" type="text/css" />
<link href="fontes/style.css" rel="stylesheet" type="text/css" />

</head>
<?php 
include_once 'validar.php';
?>
<?php
//QUANDO SE TRABALHA COM AJAX, DEVE-SE ELIMINAR O CACHE ANTES DE CONSULTAR
header("cache-control: no-cache"); //elimina o cache
if (!isset($_GET["nome"])) {
	$sql = "select * from obras_ce";
}

if (!empty($_GET["nome"])) { //SE NÃO VAZIO

    $nome = $_GET["nome"];
	 $select = $_GET["select"];
    //echo $nome;


    include_once 'fontes/conexao.php';

    $sql = "select * from obras_ce where ".$select." like '%" . $nome . "%' ORDER BY ".$select." ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?>
         <?php
	$result = mysql_query($sql, $con);
	$num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
       
		
		
		if (($num_rows) == 1){
			$aviso = "<div align='center'><span class='aviso'>".$num_rows." Obra Encontrada, Procurado por ".$select."</span></div>";
		}else{
			$aviso = "<div align='center'><span class='aviso'>".$num_rows." Obras Encontradas, Procurado por ".$select."</span></div>";
		}
		echo $aviso;
			
    }
    
?>
<div align="center"><table width="670" border="0" cellpadding="2" cellspacing="2">
       
     <?php
/*
    include_once 'fontes/conexao.php';

    $sql = "select * from obras_ce ORDER BY registro ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        */?>
<div align="center" id="result"><table width="95%" border="0" cellspacing="1" cellpadding="2" >
<tr>
      <td bgcolor=#666666 class='title'>Registro:</td>
    <td  bgcolor=#666666 class='title'>Embarcação:</td>
	<td  bgcolor=#666666 class='title'>Contratante</td>
    <td  bgcolor=#666666 class='title'>Detalhes</td>
    <td  bgcolor=#666666 class='title'>PDF:</td>
    <td  bgcolor=#999999 class='title'>&nbsp;</td>
    <td  bgcolor=#000000 class='title'>&nbsp;</td>
    <td  bgcolor=#FF0000 class='title'>&nbsp;</td>
    <td  bgcolor=#FF00FF class='title'>&nbsp;</td>
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
?>'" onMouseOut="javascript:this.style.backgroundColor='#FFFFFF'">
         <td width="7%" class='texto' title="<?php $contagemreg = strlen($row['registro']);

if ($contagemreg > '5') {

   echo $row['registro'];
}
?>"><div class='solicitacao'><?php echo substr($row['registro'],0,5);

if ($contagemreg > '5') {

   echo "..."; 

   

   }

 ?></td>
           <td width="25%" class='texto' title="<?php $contagemembarcacao = strlen($row['embarcacao']);

if ($contagemembarcacao > '22') {

   echo $row['embarcacao'];
}
?>"><div class="solicitacao" style="height:20px"><?php echo substr($row['embarcacao'],0,22);

if ($contagemembarcacao > '22') {

   echo "..."; 

   

   }



 ?></td>
		
                  <td width="38%" class='textomenorpreto' title="<?php $contagemcontratante = strlen($row['contratante']);

if ($contagemcontratante > '35') {

   echo $row['contratante'];
}
?>"><div class='solicitacao' style="height:20px"><?php echo substr($row['contratante'],0,35);

if ($contagemcontratante > '35') {

   echo "..."; 

   

   }


$dataatt = $row["att"];   
 
$timestamp1 = strtotime($dataatt);

$dataformat =date('d/m/Y H:i:s', $timestamp1);

 ?></td>
         <th width="8%" class="texto"><a href="javascript:MM_openBrWindow('detalhe_obras_ce.php?id=<?php echo $row["id"] ?>','edit','width=1020,height=430')" onmouseover="tooltip.show('Ultima Atualização: <br> <?php echo $dataformat ?>');" onmouseout="tooltip.hide();"><div class="solicitacao" style="height:20px">
         <div align="center"><img src="imagens/detalhe.png" width="20" height="20" align="absmiddle" /></div></div></a></th>
         <th width="6%" class="texto">
           <a href="admin/obras/obras_<?php echo $link_obra ?>/<?php echo $row["pdf"]  ?>" target="_blank"><div class="solicitacao" style="height:20px"><div align="center"><img src="imagens/pdf.png" width="20" height="20" /></div></div></a>
         </th>
         

<th width="3%" class="texto"><div class="solicitacao"> <?php if ($row['forarbna'] == 1){

   echo "<img src='imagens/legenda/gray.png' width='20' height='20'  alt='Embarcação não está no RBNA' title='Embarcação que não está no RBNA' align='middle'/>";

}else{
echo"&nbsp;";	
}
?></th>
<th width="3%" class="texto" bgcolor=""><div class="solicitacao" align="center"><?php if ($row['certrbna'] == 1){

   echo "<img src='imagens/legenda/black.png' width='20' height='20'  alt='Embarcação certificada pelo RBNA' title='Embarcação certificada pelo RBNA' align='middle'/>";

}else{
echo"&nbsp;";	
}
?></th>
<th width="3%" class="texto" bgcolor=""><div class="solicitacao"><?php if ($row['inadimplentes'] == 1){

   echo "<img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente'/>";

}else{
echo"&nbsp;";	
}
?></th>
<th width="3%" class="texto" bgcolor=""><div  class="solicitacao"><?php if ($row['insatisfeitos'] == 1){

   echo "<img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito'/>";

}else{
echo"&nbsp;";	
}
?></th>
<?php
            echo "</tr>";
        }
        echo "</table>";
		?>
        <p></p>

  <?php
        mysql_close($con);
    } else {
        echo "<p class='texto'> <img src='imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
    
?> <?php


?>  
<script type="text/javascript">
<!--
//-->
  </script>
    <?php
            echo "";
        }

	    echo "";

}else {
        echo  header("location:dados_obras_ce.php?select=registro&nome=ce");
		
		
		
		//"<p class='texto'> <img src='imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
	}
?> 
<p>&nbsp;</p>
<div class="clear">
<p>&nbsp;</p>

</div>
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
