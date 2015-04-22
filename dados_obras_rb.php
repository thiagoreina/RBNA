<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<script type="text/javascript">
//Legenda
$(function() {
$('#result').hover(function() { 
    $('#fixo').fadeIn(); 
}, function() { 
    $('#fixo').fadeOut(); 
});
});
</script>
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
$regiao = $_GET["local"]; 
$check = $_GET["check"];
 
 header("cache-control: no-cache");
 if ($regiao != "0"){
	$echoregiao = " na região de ".$regiao;
  $query2 = " and regiao like '".$regiao."'";
 
 }else{
	 $echoregiao = " em Todas as Regiões";
	 $query2 = "";
	 }
 if($check == 0){
	$query = "";
	$filtro = "";
	 
 }elseif($check == 1){
	$query = " and forarbna = 1 ";
	$filtro = "Filtro: <img src='imagens/legenda/gray.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>";
	 
	 
	 }elseif($check == 2){
	$query = " and certrbna = 1 ";	
	$filtro = "Filtro: <img src='imagens/legenda/black.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>"; 
	 
	 }elseif($check == 3){
	$query = " and inadimplentes = 1 ";	 
	$filtro = "Filtro: <img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>";
	 
	 }elseif($check == 4){
	$query = " and insatisfeitos = 1 ";
	
	$filtro = "Filtro: <img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>";	 
	 
	 }else{
		$query = "";
		$filtro = "";
	 }
	 
 include_once 'fontes/conexao.php';
  //elimina o cache
if (!isset($_GET["nome"]) ) {
	$sql = "select * from obras_rb";
}

if (!empty($_GET["nome"])||($_GET["check"])||($_GET["select"])) { //SE NÃO VAZIO

    $nome = $_GET["nome"];



   
	
	 $select = $_GET["select"];
	 
	 
	 $sql = "select * from obras_rb where ".$select." like '%" . $nome . "%'".$query."". $query2."  ORDER BY ".$select." ";
	

    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?>
         <?php
	$result = mysql_query($sql, $con);
	$num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
       
		
		
		if (($num_rows) == 1){
			$aviso = "<div align='center'><span class='aviso'>".$num_rows." Obra Encontrada, Procurado por ".$select." ".$filtro."</span></div>";
		}else{
			$aviso = "<div align='center'><span class='aviso'>".$num_rows." Obras Encontradas, Procurado por ".$select. $echoregiao." ".$filtro."</span></div>";
		}
		echo $aviso;
    }
    
	
	
?>
<div align="center"><table width="670" border="0" cellpadding="2" cellspacing="2">
       

<div align="center" id="result"><table width="95%" border="0" cellspacing="1" cellpadding="2" >
<tr>
      <td bgcolor=#666666 class='textomenorB'>Registro:</td>
    <td  bgcolor=#666666 class='textomenorB'>Embarcação:</td>
    <td  bgcolor=#666666 class='textomenorB'>Tipo:</td>
	<td  bgcolor=#666666 class='textomenorB'>Contratante</td>
    <td  bgcolor=#666666 class='textomenorB'>Região:</td>
    <td  bgcolor=#666666 class='textomenorB'>Detalhes</td>
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
?>'" onMouseOut="javascript:this.style.backgroundColor='#FFFFFF'">
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
 <th width="8%" ><div class="solicitacao" style="height:20px"><span class="textomenorpreto" style="font-weight:normal"><?php
 
 if ($row["regiao"] == "Rio de Janeiro"){
	$local = "RJ"; 
 }else{
 
  $local =  $row["regiao"];
 }
 
 echo $local;
 ?></span></th>
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
		?>
        <p>
        
<div id="fixodados" align="center" ><table width="99%" border="0" cellpadding="2" cellspacing="2">
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
        </p>
         
        <?php
        
    } else {
        echo "<p class='texto' style='text-align: center'> <img src='imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='imagens/alert.png' width='24' height='24' align='absmiddle' /></p>
				<br>
		<p class='textomenorpreto' style='text-align: center'><a href='obras_rb.php'><img src='imagens/refresh.png' width='24' height='24' align='absmiddle' /> Carregar Dados!</a></p>";
    
?> 

    <?php
            echo "";
        }
        echo "";

   } else {
	   echo "<br>
				<br>
		<p class='textomenorpreto' style='text-align: center'><a href='obras_rb.php'><img src='imagens/refresh.png' width='24' height='24' align='absmiddle' /> Carregar Dados!</a></p>";
	   //header("location:dados_obras_rb.php?select=registro&nome=rb");
      }
 ?> 

<?php  
mysql_close($con);

?>
        
 <p>&nbsp;</p>
<div class="clear"> <p>

  </p>
</div>
