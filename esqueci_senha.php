<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recuperação de Senha</title>


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

            function excluir(id){
                if(confirm('Deseja realmente excluir esse Setor ?')){
                    //redirecionar para o excluir
                    location.href="exc_setor.php?id="+id;
                }
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
<link href="fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#FFFFFF">
<table width="780" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>  </tr>
</table>
<div align="center"></div>
<form id="form" name="criar_setor" method="post" action="resetar_senha.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#0E223A"><div class="solicitacao">
        <div align="center" class="title">


          Recuperação da Senha</div>
      </div></td>
    </tr>
    <tr>
      <td width="30%" bgcolor="#0E223A"><div class="solicitacao">
        <div class="texto"><span class="title">Digite seu Email:</span></div>
      </div></td>
      <td width="70%" bgcolor="#0E223A"><div class="solicitacao"><span class="aviso">
               <label for="email"></label>
 
          <input name="email" type="text" class="required email" id="email" size="50" />
        </span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#0E223A"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Enviar Email" />
        </div>
      <div align="center" class="aviso"></div></td>
    </tr>
  </table>
  <div align="center"></div>
  <div align="center"></div>
</form>
<p><table width="780" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>  </tr>
</table>
<div align="center"></div>
</p>
</body>
</html>