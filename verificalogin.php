<?php
include_once 'fontes/anti_injection.php';
    //Sessão é um espaço de memória no NAVEGADOR!
    session_start(); //inicia uma sessao

    //md5() -> Criptografia de senha
    $login = anti_injection($_POST["login"]);
    $senha = md5($_POST["senha"]);
	$lembrar = anti_injection($_POST["lembrar"]);
	$ip = $_SERVER["REMOTE_ADDR"];
	$data = date('Y-m-d H:i:s');

if(isset($lembrar)){
 setcookie("lembrar", $senha);
}




    include_once 'fontes/conexao.php';

    //VERIFICAR SE O USUARIO E A SENHA CONFEREM
	

    $sql = "select * from usuario
            where login = '".$login."' and senha = '".$senha."'";

    $result = mysql_query($sql,$con);

    if(mysql_num_rows($result) == 1){ //se encontrou
        //echo "logado";
        
        $row = mysql_fetch_array($result);
		$_SESSION["id_usuario"] = $row["id_usuario"];
        $_SESSION["idfunc"] = $row["idfunc"];
        $_SESSION["perfil"] = $row["perfil"];
		$_SESSION["id"] = $row["idfunc"];
        
        $_SESSION["tempo"] = time(); //guarda o exato momento do login
		
		
		
		$sql2 = "select * from funcionario
            where id_funcionario = '".$_SESSION["id"]."'";

		$result2 = mysql_query($sql2,$con);
		
		$row2 = mysql_fetch_array($result2);
		
		$_SESSION["nome"] = $row2["nome"];
		$_SESSION["gerente"] = $row2["gerente"];
		$_SESSION["id_setor"] = $row2["id_setor"];
		
		
		$sqlLog = "insert into log_acesso values ('', '".$_SESSION["id_usuario"]."','', '".$data."', '".$ip."', 1)";
		
		mysql_query($sqlLog,$con);

    header("location:intranet.php");
	

	}else{
		
		$sqlTentativa = "insert into log_acesso values ('', '','".$login."', '".$data."', '".$ip."', 0)";
		
		mysql_query($sqlTentativa,$con);
		
        $msg = "Login/Senha invalidos!";
        //redirecionar
        //header("location:index.php?msg=".$msg);
        ?>
     <script>location.href='index.php?msg=<?php echo $msg ?>'</script>
        <?php
    }

?>
