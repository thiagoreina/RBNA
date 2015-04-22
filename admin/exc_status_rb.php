
<?php
 include_once '../validar.php';
include_once '../validar_obras.php';

$id = $_GET["id"];
$id_obra =		$_GET["id_obra"];
$id_obra_crypt = base64_encode($id_obra);

include_once '../fontes/conexao.php';
$sqlrelatorio = "select * from statusclasse where id = ".$id;
		$result = mysql_query($sqlrelatorio, $con);
		$row = mysql_fetch_array($result);
		
$pdf = $row["arquivo"];
$obra = $row["obra"];
 $link_obra1 = substr($obra,0,2);
 $link_obra = strtolower($link_obra1);
		
		
		
		
		
$sql = "delete from statusclasse where id = ".$id;


if (mysql_query($sql,$con)){
	$msg = "Status Deletado Com Sucesso";
	$msg = base64_encode($msg);





//delete arquivo
$arquivo = "statusclasse/".$link_obra."/" . $pdf;

if (file_exists($arquivo)) {
unlink($arquivo);

}
//Fim delete Arquivo
header("location:editar_relatorios_rb.php?id=".$id_obra_crypt."&msg=".$msg);



}else{
	$msg = "Erro ao Deletar";
	$msg = base64_encode($msg);
header("location:editar_relatorios_rb.php?id=".$id_obra_crypt."&msg=".$msg);
}



mysql_close($con);
?>

