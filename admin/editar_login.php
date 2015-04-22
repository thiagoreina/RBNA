<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Funcionoarios</title>
<script type="text/javascript">
function validarConfirmacao(){
	var senha = document.form.senha.value;
	var confirmar = document.form.confirmar.value;
	if(senha != confirmacao){
		alert("A senha está diferente, por favor digite-a novamente! ")
		document.form.confirmar.focus();
		}
	}
</script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/maskedinput-1.1.2.pack.js"></script>

 <script>
  $(document).ready(function(){
    $("#form").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});
  });
  </script>

        <script type="text/javascript">
            //executar uma função quando a pagina for carregada
            $(document).ready(function(){
                $("#form").validate();
                $("#data").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
                //$("#tel").mask("(99)9999-9999");
                
            }//chave
        )//parentese

        </script>

<script type="text/javascript" src="js/cidades-estados-v0.2.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                new dgCidadesEstados(
                    document.getElementById('estado'),
                    document.getElementById('cidade'),
                    true
                );
            }
        </script>

<style type="text/css">
.aviso {	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}
.title {	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
</style>
<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#EEEEEE">
<table width="780" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>  </tr>
</table>
<div align="center"></div>
<form id="form" name="criar_login" method="post" action="att_login.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_rh.php';
include_once '../fontes/conexao.php';
header("cache-control: no-cache"); //elimina o cache

$idfunc = $_GET["id"];


				
 $sql = "select * from usuario where idfunc = ".$idfunc;
 

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);



	  $perfil = $row["perfil"];
	 
	 
	  switch ($perfil) {
    case "0": $perfilativo = "<div class='user'> Atualizar Conta Para Administrador <input type='image' name='inativo' src='../imagens/admin.png' width='24' height='24' align='absmiddle' value='".$idfunc."' /></div>"; break;
    case "1": $perfilativo = "<div class='admin'> Atualizar Conta Para Usuário <input type='image' name='Ativo' src='../imagens/user.png' width='24' height='24' align='absmiddle' value='".$idfunc."' /></div></div>"; break;
    }; 
	
	?>
          Editar Usuário</div>
      </div></td>
    </tr>
    <tr>
      <td width="28%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">login:</div>
      </div></td>
      <td width="72%" bgcolor="#F7F7F7"><div class="solicitacao">
        <input name="id" type="hidden" value="<?php echo $_GET["id"]; ?>" />
        <label for="login"></label>
        <span class="aviso">
          <input name="editarlogin" type="text" class="required" id="login" value="<?php echo $row["login"]; ?>" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Perfil:</div>
      </div></td>
      <td bgcolor="#F7F7F7"><select name="perfil" class="required" id="setor" >
        <?php
                                
                $sqlselect = "select perfil from usuario where idfunc =".$idfunc;

                $resultselect = mysql_query($sqlselect,$con);

                $rowselect = mysql_fetch_array($resultselect);
                    //administrador
if($rowselect["perfil"] == 1){
	
$msg = "Administrador";
	}

//Usuario Desativado
elseif($rowselect["perfil"] == 2){

		
	$msg = "Desativado";
 	
}
// Usuario Comum
elseif($rowselect["perfil"] == 0){

		$msg = "Normal"; 	
}

//Usuario de RH
elseif($rowselect["perfil"] == 3){
	
$msg = "RH";
}

//Usuario de Obra
elseif($rowselect["perfil"] == 4){

$msg = "Obras";
}
					
					?>
        <option value="<?php echo $rowselect["perfil"] ?>"><?php echo $msg ?></option>
        <option value="">----</option>
       
        <option value="0"/>Normal</option>
        <option value="1"/>Administrador</option>
        <option value="2"/>Desativado</option>
        <option value="3"/>RH</option>
        <option value="4"/>Obras</option>

      </select>    
      </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div align="center"><img src="../imagens/pass.png" width="20" height="20" align="absmiddle" /> <a href="javascript:MM_openBrWindow('editar_senha_admin.php?id=<?php echo $idfunc ?>','edit','width=500,height=200')" class="textomenorpreto">Alterar Senha</a></div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Cadastrar" />
        <input type="reset" name="button2" id="button2" value="Cancelar" />
      </div></td>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <label for="textfield6"></label>
        <div align="center" class="aviso">já existe usuário para este funcionário. você está na pagina de edição
          
        </div>
      </div>
        <div align="center" class="aviso"></div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
<p><?php 

		
?> </p>
</body>
</html>