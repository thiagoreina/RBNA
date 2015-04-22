<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Documento sem t&iacute;tulo</title>

<script type="text/javascript">
function openWindow(url){
popupWin = window.open(url, 'new_page', 'width=520, height=450')
}
</script>

<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.title {	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
</style>
</head>
<?php 
include_once '../validar.php';
include_once '../validar_obras.php';
?>
<?php
$check = $_GET["check"];
 
 header("cache-control: no-cache");
 if($check == 0){
	$query = "";
	$filtro = "";
	
	}elseif($check == 1){
	$query = " and inadimplente = 1 ";
	$filtro = "Filtro: <img src='imagens/legenda/red.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>";
	 
	 
	 }elseif($check == 2){
	$query = " and insatisfeito = 1 ";	
	$filtro = "Filtro: <img src='imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>"; 
	 
	 }else{
		$query = "";
		$filtro = "";
	 }



if (!isset($_GET["nome"])) {
	$sql = "select * from matriz";
}

if (!empty($_GET["nome"])||($_GET["check"])||($_GET["select"])) { //SE NÃO VAZIO

    $nome = $_GET["nome"];
    //echo $nome;


    include_once '../fontes/conexao.php';
	
	$select = $_GET["select"];
	 
	 
	 $sql = "select * from matriz where ".$select." like '%" . $nome . "%'".$query."  ORDER BY ".$select."" ;
	

    


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        
		?>
        
<div align="center">
  <table width="95%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="35%" bgcolor="#666666" class='title'>Razao Social:</td>
      <td width="30%"  bgcolor="#666666" class='title'>Fantasia:</td>
      <td width="17%"  bgcolor="#666666" class='title'>CPF / CNPJ</td>
      <td width="3%"  bgcolor="#666666" class='title'><div align="center"><img src="../imagens/legenda/red.png" width="20" height="20"  alt=""/></div></td>
      <td width="3%"  bgcolor="#666666" class='title'><div align="center"><img src="../imagens/legenda/pink.png" width="20" height="20"  alt=""/></div></td>
      <td width="6%"  bgcolor="#666666" class='title'>Editar&nbsp;</td>
      <td width="6%"  bgcolor="#666666" class='title'>Excluir</td>
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
	   $inadimplente = "<a href='javascript:inadimplente(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente'/></div>";
	   
	   
	   }else{
	   $inadimplente = "<a href='javascript:adimplente(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/unred.png' width='20' height='20'  alt='Cliente Adimplente' title='Cliente Adimplente'/></div>";;
	   }
	   
	   if ($row["insatisfeito"]==1){
	   $insatisfeito = "<a href='javascript:insatisfeito(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito'/></div>";
	   
	   }else{
	   $insatisfeito = "<a href='javascript:satisfeito(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/unpink.png' width='20' height='20'  alt='Cliente Satisfeito' title='Cliente Satisfeito'/></div>";
	   }
	   
	   
	   ?>
    <tr>
      <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'><?php echo $row["razao"] ?></div></td>
      <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'>
        <?php echo $row["fantasia"] ?></td>
      <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'>
        <?php echo $cnpjcpf  ?></td>
      <th bgcolor="#F2F2F2" class="textomenorpreto"><div class='solicitacao'><?php echo $inadimplente  ?></div></th>
      <th bgcolor="#F2F2F2" class="textomenorpreto"><div class='solicitacao'><?php echo $insatisfeito  ?></div></th>
      <th bgcolor="#F2F2F2" class="textomenorpreto"><a href= 'editar_cliente.php?id=<?php echo $row["idMatriz"] ?>'>
        <div class='solicitacao' style="text-align:center"><img src="../imagens/edit.png" width="20" height="20" /></div>
      </a></th>
      <th bgcolor="#F2F2F2" class="texto"><a href="javascript:excluir('<?php echo $row["idMatriz"] ?>')">
        <div class="solicitacao" style="text-align:center"><img src="../imagens/delete.png" width="20" height="20" /></div>
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
</div>
<?php
      } else {
       echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhum Cliente Encontrado<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>".$sql;
	   
    

}
echo $select ."<br>".
		$nome ."<br>".
		$query ."<br>"
		;
?>
        
