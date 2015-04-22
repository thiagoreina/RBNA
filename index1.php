<?php include_once 'verifica_logado.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Efetuar Login</title>
<link href="fontes/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--

.verdana {
	font-family: Verdana, Geneva, sans-serif;
	color: #333;
	font-size: 14px;
}
.title {
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
.aviso {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}

a:link {
	color: #FFF;
}
a:visited {
	color: #FFF;
}
a:hover {
	color: #FFF;
}
a:active {
	color: #FFF;
}

-->
</style>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body bgcolor="#EEEEEE" background="imagens/bg2.jpg" class="bg">
<div align="center" class="divlogin" >
  <form name="login" method="post" action="verificalogin.php">
    
   <table width="492" border="0" cellpadding="3" cellspacing="3">
    <tr>
      <td><span class="title">Usuário:</span></td>
      <td><span class="title">Senha:</span></td>
      <td width="47">&nbsp;</td>
    </tr>
    <tr>
      <td><input name="login" type="text" autofocus="autofocus" class="form" size="30" /></td>
      <td><input class="form" name="senha" type="password" size="30" /></td>
      <td width="47"><input type="submit" name="Entrar" id="Entrar" value="Login" /></td>
      </tr>
    <tr>
      <td class="title"><div align="left">
        <input name="lembrar" type="checkbox" id="checkbox" value="1" />
        <span class="textomenor">
          Permanecer Logado
        </span></div>
        <span class="title">
          <label for="checkbox"></label>
        </span></td>
      <td class="textomenor"><a href="javascript:MM_openBrWindow('esqueci_senha.php','edit','scrollbars=yes,width=550,height=150')">Esqueceu a Senha?</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><div align="center" class="aviso">
        <?php
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
        ?>
      </div></td>
      </tr>
</table>
 </form>
</div>
</body>
</html>