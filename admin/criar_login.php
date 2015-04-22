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
<form id="form" name="criar_login" method="post" action="gravar_login.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_rh.php';
include_once '../fontes/conexao.php';

$idfunc = $_GET["id"];

$buscasql = mysql_query("select idfunc from usuario where idfunc = '".$idfunc."'", $con);
            $contar = mysql_num_rows($buscasql);
             
            if($contar >= 1){
				header("location:editar_login.php?id=".$idfunc);
			}else{
				


?>
          Criar Login</div>
      </div></td>
    </tr>
    <tr>
      <td width="29%" bgcolor="#EBEBEB"><div class="solicitacao">
        <div class="texto">login:</div>
      </div></td>
      <td width="71%" bgcolor="#EBEBEB"><div class="solicitacao">
        <input name="id" type="hidden" value="<?php echo $_GET["id"]; ?>" />
        <label for="login"></label>
        <span class="aviso">
          <input name="login" type="text" class="required" id="login" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <div class="texto">Perfil:</div>
      </div></td>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <label for="login"></label>
        <label for="perfil"></label>
        <select name="perfil" id="perfil" class="required">
          <option value="">Selecionar</option>
          <option value="0" selected="selected">Usuario</option>
          <option value="1">Administrador</option>
          <option value="2">Desativado</option>
          <option value="3">RH</option>
          <option value="4">Obras</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <div class="texto">Senha:</div>
      </div></td>
      <td bgcolor="#EBEBEB"><div class="solicitacao"><span class="aviso">
        <label for="textfield2"></label>
        <input name="password" type="password" class="required" id="password" size="25" />
      </span> </div></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <div class="texto">Confirmar senha:</div>
      </div></td>
      <td bgcolor="#EBEBEB"><div class="solicitacao"><span class="aviso">
        <label for="textfield3"></label>
        <input name="password_again" type="password" class="equalTo" id="password_again" size="25"/>
      </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Cadastrar" />
        <input type="reset" name="button2" id="button2" value="Cancelar" />
      </div></td>
      <td bgcolor="#EBEBEB"><div class="solicitacao">
        <label for="textfield6"></label>
        <div align="center" class="aviso">
          
        </div>
      </div>
        <div align="center" class="aviso"></div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
<p><?php 

			}
?> </p>
</body>
</html>