<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Funcionoarios</title>
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
<link href="fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#EEEEEE">
<table width="780" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>  </tr>
</table>
<div align="center"></div>
<form id="form" name="editar_senha" method="post" action="att_senha_admin.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_rh.php';
include_once '../fontes/conexao.php';;
header("cache-control: no-cache"); //elimina o cache

$idfunc = $_GET["id"];
$id_session = $_SESSION["idfunc"];

				
 $sql = "select * from usuario where idfunc = ".$idfunc;
 

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);


?>
          Aletrar Senha</div>
      </div></td>
    </tr>
    <tr>
      <td width="28%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Nova Senha:</div>
      </div></td>
      <td width="72%" bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">
        <label for="textfield2"></label>
        <input name="editarpassword" type="password" class="required" id="password" size="25" />
      </span> </div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Confirmar senha:</div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">
        <label for="textfield3"></label>
        <input name="password_again" type="password" class="equalTo" id="password_again" size="25"/>
      </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Cadastrar" />
      </div></td>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <label for="textfield6"></label>
       <input name="id" type="hidden" value="<?php echo $idfunc ?>" />
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