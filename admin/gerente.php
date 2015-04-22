<?php 
include_once '../validar.php';
include_once '../validar_admin.php';
?>
<?php
$id = 		$_GET["id"];


    
include_once '../fontes/conexao.php';
$sql= "SELECT gerente FROM funcionario WHERE id_funcionario =".$id;

$result = mysql_query($sql, $con);
while ($row = mysql_fetch_array($result)){

$gerente = $row["gerente"];
}
if ($gerente==1){
	$promove = 0;
}
if ($gerente==0){
	$promove = 1;

}
//$datatime = date('Y-m-j H:m:s');
$sql2 = "UPDATE funcionario SET gerente = ".$promove." WHERE id_funcionario =".$id;


			if(mysql_query($sql2, $con)){
				$msg =  "Atualizado com Sucesso.";
				 
				header("location:con_funcionario.php?msg=".$msg);
			}else{
				$msg =  "Erro";
				 
				header("location:con_funcionario.php?msg=".$msg);
				 }
	
	mysql_close($con);
	 


?>