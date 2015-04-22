<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {
	
	// Recupera os dados dos campos
	$tipo =		$_POST["tipo"];
	$grupo =		$_POST["grupo"];
	
	$sql2 = "select * from tiporelatorio where tipo LIKE '".$tipo."' and grupo LIKE '".$grupo."'";
$result =(mysql_query($sql2,$con));
if (mysql_num_rows($result)>0){
	
	$msg= "Este Tipo já Existe! ";
	
	$msg = base64_encode($msg);
	$grupo = base64_encode($grupo);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);

	
	
}else{



			// Insere os dados no banco
			$sql ="INSERT INTO tiporelatorio VALUES ('','".$grupo."', '".$tipo."')";
		
			// Se os dados forem inseridos com sucesso
			if (mysql_query($sql,$con)){
$msg = "Cadastrado com Sucesso!";
 
  $msg = base64_encode($msg);
  $grupo = base64_encode($grupo);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);

}else{
$msg = "Erro ao Gravar";

	$msg = base64_encode($msg);
 	$grupo = base64_encode($grupo);
    //echo $msg;
    header("location:cad_tiporelatorio.php?gr=".$grupo."&msg=".$msg);
}
		}

}
?>