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
include_once '../validar_obras.php';
?>
<?php
//QUANDO SE TRABALHA COM AJAX, DEVE-SE ELIMINAR O CACHE ANTES DE CONSULTAR
header("cache-control: no-cache"); //elimina o cache
if (!isset($_GET["nome"])) {
	$sql = "select * from obras_oi";
}

if (!empty($_GET["nome"])) { //SE NÃO VAZIO

    $nome = $_GET["nome"];
    //echo $nome;


    include_once '../fontes/conexao.php';

    $sql = "select * from obras_oi where registro like '%" . $nome . "%' ORDER BY registro";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?>
<div align="center"><table width="95%" border="0" cellpadding="2" cellspacing="2">
       
          <?php
		echo "<tr>
          <td bgcolor=#666666 class='title'>Registro:</td>
    <td  bgcolor=#666666 class='title'>Contratante:</td>
	<td  bgcolor=#666666 class='title'>Região:</td>
    <td  bgcolor=#666666 class='title'>Editar</td>
    <td  bgcolor=#666666 class='title'>Excluir</td>
    	</tr>";

       while ($row = mysql_fetch_array($result)) {
         echo "<tr>";
         echo "<td bgcolor=#F2F2F2 class='texto'><div class='solicitacao'>" . $row["registro"] . "</td>";
         echo "<td bgcolor=#F2F2F2 class='texto'><div class='solicitacao'>" . $row["contratante"] . "</td>";
		 echo "<td bgcolor=#F2F2F2 class='texto'><div class='solicitacao'>" . $row["regiao"] . "</td>";?>
        <th bgcolor=#F2F2F2 class="texto"><div class="solicitacao"><a href="javascript:MM_openBrWindow('editar_obras_ow.php?id=<?php echo $row["id"] ?>','edit','width=920,height=500')"><img src="../imagens/edit.png" width="20" height="20" /></a></th>
<th bgcolor=#F2F2F2 class="texto"><div class="solicitacao"><a href="javascript:excluir('<?php echo $row["id"] ?>')"><img src="../imagens/delete.png" width="20" height="20" /></a></th>
            <?php
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
    } else {
       echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
    
?> <?php
}
}
?>
        
