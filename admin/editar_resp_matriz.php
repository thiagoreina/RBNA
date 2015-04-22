<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Cliente</title>


        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../js/maskedinput-1.1.2.pack.js"></script>

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
                $("#registro").mask("OH999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99) 9999-9999");
				$("#site2").mask("http://?",{placeholder:" "});
                $("#telefone1").mask("(99) 9999-9999?9");
				$("#telefone2").mask("(99) 9999-9999?9");
                
            }//chave
        )//parentese

        </script>
        

<style>
            label.error{
	color: red;
	font-size: 10px;
	margin-left: 5px;
	font-family: Verdana, Geneva, sans-serif;
            }
        </style>
        
<style type="text/css">
<!--
.verdana {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	color: #FFF;
}
.verdanainten {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
.geral {	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #333;
}
.msg {font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}
.sbtitulo {	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #CCC;
	position: relative;
}
.aviso {	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}
.title {	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
-->
</style>
<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#EEEEEE">  
<form id="form" name="editar_form" action="att_responsavel.php" method="post">
  <span class="title">

  </span>
  <span class="title">

  </span>
  <div class="editar">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC"><div align="center" class="texto">
        <?php 
include_once '../validar.php';
include_once '../validar_obras.php';

        $id = $_GET["id"];
		
        include_once '../fontes/conexao.php';

        $sql = "select * from responsavel where idresponsavel = ".$id;

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);
		
		
		
			
	
	
	
        ?><input type="hidden" name="id" value="<?php echo $id ?>"/>
        Editar Responsável da Matriz</div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Nome:</div>
      </div></td>
      <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="respnome" type="text" id="respnome" value="<?php echo $row["nome"] ?>" size="100" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Email:</div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"> <span class="aviso">
        <label for="nome12"></label>
        <label for="label"></label>
        <input name="respemail" type="text" class="email" id="respemail" value="<?php echo $row["email"] ?>" size="35"  />
      </span></div></td>
      <td colspan="2" bgcolor="#E9E9E9">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">CPF:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="respcpf" type="text" id="cpf" value="<?php echo $row["cpf"] ?>" size="25" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Cargo:</div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco6"></label>
        </span>
        <input name="respcargo" type="text" id="respcargo" value="<?php echo $row["cargo"] ?>" size="25" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Telefone:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="resptelefone" type="text" id="tel" value="<?php echo $row["telefone"] ?>" size="25" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Celular:</div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="respnome"></label>
        </span> <span class="texto">
        <input name="respcelular" type="text" id="telefone1" value="<?php echo $row["celular"] ?>" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="site"></label>
        <div align="center" class="aviso">
          <div align="right">
            <input name="cadastrar" type="submit" id="cadastrar" value="Salvar" />
          </div>
        </div>
      </div>
        <div align="center" class="aviso"></div></td>
    </tr>
    </table>
  </div>
</form>
</body>
</html>