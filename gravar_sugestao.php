<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>

</head>

<body>
<?php 

include_once 'validar_user.php';
include_once 'fontes/conexao.php';

$sugestao = nl2br($_POST["sugestao"]);
$data = date('Y-m-d H:i:s');;
$idfunc = $_SESSION["idfunc"];
	
	if(!isset ($_POST["anonimo"])){
		$anonimo = 0;	
	}else{
		$anonimo = $_POST["anonimo"];
	};

if(empty ($sugestao)){
	$msg = "O Campo de Sugestões Não Pode Ser Vazio !";
	$cor = "FF0000"; // Vermelho
	header("location:intranet.php?msg=".$msg."&c=".$cor);
}else{


$sql = "INSERT INTO `rbna5`.`sugestao` (`id`, `data`, `msg`, `idfunc`, `anonimo`, `ativo`)
VALUES (NULL , '".$data."', '".$sugestao."', ".$idfunc.",".$anonimo.", 1)";








if 
	(mysql_query($sql, $con))
{
	$msg = "Sua sugestão foi enviada com sucesso !";
	$cor = "033162";
 }else{
	$msg = "Erro ao enviar sugestão !";
	$cor = "FF0000";
}
}

header("location:intranet.php?msg=".$msg."&c=".$cor);



?>
</body>
</html>
