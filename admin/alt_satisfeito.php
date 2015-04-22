<?php 
include_once '../validar.php';
include_once '../validar_admin.php';
?>
<?php
$id = 		$_GET["id"];


    
include_once '../fontes/conexao.php';
$sql= "SELECT insatisfeito FROM matriz WHERE idMatriz =".$id;

$result = mysql_query($sql, $con);
while ($row = mysql_fetch_array($result)){

$insatisfeito = $row["insatisfeito"];
}
if ($insatisfeito==1){
	$satisfeito = 0;
}
if ($insatisfeito==0){
	$satisfeito = 1;

}
//$datatime = date('Y-m-j H:m:s');
$sql2 = "UPDATE matriz SET insatisfeito = ".$satisfeito." WHERE idMatriz =".$id;


			if(mysql_query($sql2, $con)){
				$msg =  "Atualizado com Sucesso.";
				 
				header("location:edit_clientes.php?msg=".$msg);
			}else{
				$msg =  "Erro";
				 
				header("location:edit_clientes.php?msg=".$msg);
				 }
	
	mysql_close($con);
	 


?>