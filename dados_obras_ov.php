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

<link href="fontes/style.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once 'validar.php';
?>
<?php
//QUANDO SE TRABALHA COM AJAX, DEVE-SE ELIMINAR O CACHE ANTES DE CONSULTAR
header("cache-control: no-cache"); //elimina o cache
if (!isset($_GET["nome"])) {
	$sql = "select * from obras_ov";
}

if (!empty($_GET["nome"])) { //SE NÃO VAZIO

    $nome = $_GET["nome"];
    //echo $nome;


    include_once 'fontes/conexao.php';

    $sql = "select * from obras_ov where registro like '%" . $nome . "%'";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?>
<div align="center"><table width="670" border="0" cellpadding="2" cellspacing="2">
       

<div align="center"><table width="95%" border="0" cellspacing="1" cellpadding="2" >
<tr>
      <td bgcolor=#666666 class='title'>Registro:</td>
    <td  bgcolor=#666666 class='title'>Embarcação:</td>
	<td  bgcolor=#666666 class='title'>Contratante</td>
    <td  bgcolor=#666666 class='title'>Detalhes</td>
    <td  bgcolor=#999999 class='title'>&nbsp;</td>
    <td  bgcolor=#000000 class='title'>&nbsp;</td>
    <td  bgcolor=#FF0000 class='title'>&nbsp;</td>
    <td  bgcolor=#FF00FF class='title'>&nbsp;</td>
    </tr>
<?php
        while ($row = mysql_fetch_array($result)) { ?>
       <tr style="cursor:default" onMouseOver="javascript:this.style.backgroundColor='<?php if ($row['inadimplentes'] == 1){

   echo "#FF5B5B";
	   }else{
		echo "#F4F4F4";   
	  

}
?>'" onMouseOut="javascript:this.style.backgroundColor='#FFFFFF'">
         <td width="10%" class='texto' title="<?php $contagemreg = strlen($row['registro']);

if ($contagemreg > '5') {

   echo $row['registro'];
}
?>"><div class='solicitacao'><?php echo substr($row['registro'],0,5);

if ($contagemreg > '5') {

   echo "..."; 

   

   }

 ?></td>
           <td width="36%" class='texto' title="<?php $contagemembarcacao = strlen($row['embarcacao']);

if ($contagemembarcacao > '25') {

   echo $row['embarcacao'];
}
?>"><div class='solicitacao'><?php echo substr($row['embarcacao'],0,25);

if ($contagemembarcacao > '25') {

   echo "..."; 

   

   }



 ?></td>
		
                  <td width="36%" class='texto' title="<?php $contagemcontratante = strlen($row['contratante']);

if ($contagemcontratante > '25') {

   echo $row['contratante'];
}
?>"><div class='solicitacao'><?php echo substr($row['contratante'],0,25);

if ($contagemcontratante > '25') {

   echo "..."; 

   

   }



 ?></td>
         <th width="10%" class="texto"><a href="javascript:MM_openBrWindow('detalhe_obras_ov.php?id=<?php echo $row["id"] ?>','edit','scrollbars=yes,resizable=no, width=1030,height=540')"><div style="text-align:center" class="solicitacao" align="center"><img src="imagens/detalhe.png" width="20" height="20" align="absmiddle" /></div></a></th>
<th width="2%" class="texto" bgcolor="<?php if ($row['forarbna'] == 1){

   echo "#999999";

}
?>"><div class="solicitacao"> &nbsp;</th>
<th width="2%" class="texto" bgcolor="<?php if ($row['certrbna'] == 1){

   echo "#000000";

}
?>"><div class="solicitacao">&nbsp;</th>
<th width="2%" class="texto" bgcolor="<?php if ($row['inadimplentes'] == 1){

   echo "#FF0000";

}
?>"><div class="solicitacao">&nbsp;</th>
<th width="2%" class="texto" bgcolor="<?php if ($row['insatisfeitos'] == 1){

   echo "#FF00FF";

}
?>"><div class="solicitacao">&nbsp;</th>
<?php
            echo "</tr>";
        }
        echo "</table>";
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

    } else {
       echo "<p class='texto'> <img src='imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
	}
?> 
        

<div class="clear"></div>