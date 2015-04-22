<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Serviço</title>
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
<form id="form" name="attsetor" method="post" action="att_tipo_oh.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_admin.php';
include_once '../fontes/conexao.php';

$id = $_GET["id"];


				
 $sql = "select * from tipo_oh where id = ".$id;
 

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);


?>
          Editar Serviço</div>
      </div></td>
    </tr>
    <tr>
      <td width="28%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Setor:</div>
      </div></td>
      <td width="72%" bgcolor="#F7F7F7"><div class="solicitacao">
        <input name="id" type="hidden" value="<?php echo $_GET["id"]; ?>" />
        <label for="login"></label>
        <span class="aviso">
          <input name="servico" type="text" class="required" id="login" value="<?php echo $row["tipo_oh"]; ?>" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Cadastrar" />
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <label for="textfield6"></label>
        <div align="center" class="aviso"></div>
      </div>
        <div align="center" class="aviso"></div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
<p> </p>
</body>
</html>