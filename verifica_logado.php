<?php session_start();

if(isset ($_SESSION["idfunc"])){
	header("location:intranet.php");
	
	
 include_once 'fontes/conexao.php';


$ip = $_SERVER["REMOTE_ADDR"];
$data = date('Y-m-d H:i:s');

 $sql = "select id_usuario from usuario where idfunc = '".$_SESSION["idfunc"]."'";

    $result = mysql_query($sql,$con);

        
        $row = mysql_fetch_array($result);
		$idUsuario = $row["id_usuario"];
       


		$sqlLog = "insert into log_acesso values ('', '".$idUsuario."','', '".$data."', '".$ip."', 1)";
		
	mysql_query($sqlLog,$con);
}

?>