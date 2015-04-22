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

<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once '../validar.php';
include_once '../validar_rh.php';
include_once '../fontes/conexao.php';
?>
<?php
//QUANDO SE TRABALHA COM AJAX, DEVE-SE ELIMINAR O CACHE ANTES DE CONSULTAR
header("cache-control: no-cache"); //elimina o cache
if (!isset($_GET["nome"])) {
	$sql = "SELECT * FROM funcionario where desligado = 0 ORDER BY nome ";
}

if (!empty($_GET["nome"])) { //SE NÃO VAZIO

    $nome = $_GET["nome"];
    //echo $nome;





     $sql = "SELECT * FROM funcionario where nome LIKE '%" . $nome . "%' and desligado = 0 ORDER BY nome ";




       $result = mysql_query($sql, $con);
	$num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
   
        ?>

<div align="center"><table width="94%" border="0" cellpadding="2" cellspacing="2">
       
          <tr>
          <td bgcolor=#666666 class='title'>Nome:</td>
    <td  bgcolor=#666666 class='title'>Email:</td>
	<td  bgcolor=#666666 class='title'>Login:</td>
	<td  bgcolor=#666666 class='title'>Editar:</td>
    <td  bgcolor=#666666 class='title'>Desligar:</td>
	<td  bgcolor=#666666 class='title'>Usuario:</td>
    <td  bgcolor=#666666 class='title'>Acesso:</td>
    <td  bgcolor=#666666 class='title'><div align="center"><img src='../imagens/manager.png' width='15' height='15' align="absmiddle" style="border:none" /></div></td>
    	</tr>
<?php
		
        while ($row = mysql_fetch_array($result)) {
         echo "<tr>";
         echo "<td bgcolor=#F7F7F7 class='texto'><div class='solicitacao' style='height:20px;'>" . $row["nome"] . "</td>";
         echo "<td bgcolor=#F7F7F7 class='textomenorpreto'><div class='solicitacao' style='height:20px;'>" . $row["email"] . "</td>";
		 $sqlperfil = "SELECT * FROM usuario where idfunc = ".$row["id_funcionario"];


    $resultperfil = mysql_query($sqlperfil, $con);
	$num_rows_login = mysql_num_rows($resultperfil);
	
	 if ($num_rows_login > 0){
			$imglogin = "../imagens/editlogin.png"; 
			$info = "Editar Login";
		 }else{
			$imglogin = "../imagens/addlogin.png"; 
			$info = "Criar Login";
		 }
		
		 ?> 	
	
         <th bgcolor=#F7F7F7 class="texto"><a href="javascript:MM_openBrWindow('criar_login.php?id=<?php echo $row["id_funcionario"] ?>','edit','width=750,height=200')" onmouseover="tooltip.show('<?php echo $info ?>');" onmouseout="tooltip.hide();" ><div class="solicitacao" style='height:20px;'><img src="
			 
			 <?php echo $imglogin ?>" width="20" height="20" align="absmiddle" style="border:none" /></div></a></th>
		<th bgcolor=#F7F7F7 class="texto"><a href="javascript:MM_openBrWindow('editar_funcionario.php?id=<?php echo $row["id_funcionario"] ?>','edit','width=835,height=260')" onmouseover="tooltip.show('Editar Dados de:  <?php echo $row["nome"] ?>');" onmouseout="tooltip.hide();" ><div class="solicitacao" style='height:20px;'><img src="../imagens/edit.png" width="20" height="20" align="absmiddle" style="border:none" /></div></a></th>
<th bgcolor=#F7F7F7 class="texto"><a href="javascript:excluir('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Desligar <?php echo $row["nome"] ?> da Empresa');" onmouseout="tooltip.hide();" ><div class="solicitacao" style='height:20px;'><img src="../imagens/off.png" width="20" height="20" align="absmiddle" style="border:none" /></div></a></th>
<?php

		  while ($rowperfil = mysql_fetch_array($resultperfil)){
	
		
 
		
		
	 switch ($rowperfil["perfil"]) {
	case "0": $perfil = "Normal"; 			$color = "#F7F7F7"; break;
    case "1": $perfil = "Administrador"; 	$color = "#FF5151"; break;
    case "2": $perfil = "Desativado";		$color = "#858585"; break;
    case "3": $perfil = "RH"; 				$color = "#A9F3D8"; break;
    case "4": $perfil = "Obras"; 			$color = "#AACBF2"; break;
	     };
?>
<td bgcolor=#F7F7F7 class='textomenorpreto'><div class='solicitacao' style='height:20px;'><?php echo $rowperfil["login"]  ?></td>
<td  class='textomenorpreto'><div class='solicitacao' style=" height:20px; background-color:<?php echo $color?>"><?php  
if ($rowperfil["senha"] == "d2a73e86a3bccc79f16f6ee4c9f66c66"){
	
	
	
	echo "<img src='../imagens/pass.png' width='15' height='15' /> ";
	}
	echo $perfil;

 ?></td>
 
 <td bgcolor=#F7F7F7 align="center" class='texto'><a href="javascript:desativar('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Remover <?php echo $row["nome"] ?> da Gerência');" onmouseout="tooltip.hide();" ><?php if ($row["gerente"]== 1){
?><div class='solicitacao' style='height:20px;'><div align="center">
<img src="../imagens/manager.png" width="20" height="20" align="absmiddle" style="border:none" /></div></div></a><?php 

 }else{
	 ?>
<a href="javascript:ativar('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Promover <?php echo $row["nome"] ?> a Gerente');" onmouseout="tooltip.hide();" ><div class='solicitacao' style='height:20px;'><div align="center"><img src="../imagens/no_manager.png" width="15" height="15" align="absmiddle" style="border:none" /></div></div></a><?php 

 }
	  ?></td>
 
 
 
            <?php
            echo "</tr>";
	}
		}
        echo "</table>";
		echo "<div align='center'><span class='aviso'>".$num_rows." Funcionários Cadastrados</span></div>";
        mysql_close($con);
    } else {
        echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhum Funcionário Encontrado<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
    
?> <?php
}
}else{
	
	 echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Favor inserir uma busca<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
}
?> 
<table width="30%" border="0" >
  <tr class="textomenorpreto">
      <td bgcolor="#E5E5E5"><div align="center">Legenda:</div></td>
    <td bgcolor="#E5E5E5" class="solicitacao"><div align="center"></div>      <div align="center"><img src='../imagens/pass.png' width='15' height='15' /> Senha Padrão</div></td>
    <td bgcolor="#F7F7F7" class="solicitacao"><div align="center">Usuario Normal</div></td>
    <td bgcolor="#FF5151"  class="solicitacao"><div align="center"></div>      <div align="center">Administrador</div></td>
    <td bgcolor="#858585"  class="solicitacao"><div align="center"></div>      <div align="center">Usuario Desativado</div></td>
    <td bgcolor="#A9F3D8"  class="solicitacao"><div align="center"></div>      <div align="center">RH</div></td>
    <td bgcolor="#AACBF2" class="solicitacao"><div align="center"></div>      <div align="center">Obras</div></td>
    
    </tr>
</table> 
<script type="text/javascript">
<!--
//-->
  </script>



<p>&nbsp;</p>


    



<p></p>
<div class="clear"></div>

</body>
</html>
        
