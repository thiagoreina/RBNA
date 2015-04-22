<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style type="text/css">
<!--
.verdana {
	font-size: 14px;
	font-family: Verdana, Geneva, sans-serif;
	color: #333;
	position: relative;
	text-align: center;
	font-weight: bold;
}
-->
</style>
<script type='text/javascript'>
 function excluir(id){
                if(confirm('Deletado com Sucesso')){
                    //redirecionar para o excluir
                    location.href="editar_cliente.php?id="+id;
                }
            }
</script>
</head>

<body bgcolor="#EEEEEE" class="verdana">
<?php
 include_once '../validar.php';
include_once '../validar_obras.php';
?>
<p>&nbsp;</p>
<p>
  <?php
$id = $_GET["id"];
$idCliente = $_GET["idCliente"];

include_once '../fontes/conexao.php';

$sql = "delete from filial where idfilial = ".$id;


if (mysql_query($sql,$con)){
	$msg = "Filial Deletada Com Sucesso";
header("location:editar_cliente.php?id=".$idCliente."&msgFilial=".$msg);
}else{
	$msg = "Erro ao Deletar";
header("location:editar_cliente.php?id=".$idCliente."&msgFilial=".$msg);
}

mysql_close($con);
?>

</body>
</html>