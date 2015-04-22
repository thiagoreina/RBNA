<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {
	
	// Recupera os dados dos campos
	$id_func =	 		$_POST["id"];
	$login =		$_POST["login"];
	$perfil =		$_POST["perfil"];
	$password = 	md5($_POST["password"]);
	
	
$buscasql = mysql_query("select login from usuario where login LIKE '".$login."'", $con);
            $contar = mysql_num_rows($buscasql);
             
            if($contar >= 1){
				echo "Usuario ja existe";

}else{
			// Insere os dados no banco
			$sql ="INSERT INTO usuario VALUES ('', '".$login."', '".$password."', '".$id_func."', '".$perfil."')";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
print "<script type='text/javascript'>";
print "alert('Login Criado com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";

				 
			}else{
				 echo "Erro ao Salvar.";
				 }
		}
}
	
?>