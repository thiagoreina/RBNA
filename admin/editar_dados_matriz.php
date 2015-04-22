<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Cliente</title>


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
                $("#registro").mask("OH999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999");
				$("#site2").mask("http://?",{placeholder:" "});
                $("#telefone1").mask("(99)9999-9999?9");
				$("#telefone2").mask("(99)9999-9999?9");
                
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
<form id="form" name="editar_form" action="att_matriz.php" method="post">
  <span class="title">

  </span>
  <span class="title">

  </span>
  <div class="editar">
   <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC"><div class="solicitacao" >
        <div align="center">
  <?php
include_once '../validar.php';
include_once '../validar_obras.php';
include_once '../fontes/conexao.php';
        $id = $_GET["id"];
        $sql = "select * from matriz where idMatriz = ".$id;
        $result = mysql_query($sql,$con);
        $row = mysql_fetch_array($result);
?> 
          
  <input type="hidden" name="id" value="<?php echo $id ?>"/>
          <span class="texto">Editar Dados Gerais da Matriz</span></div>
      </div></td>
    </tr>
    <tr>
      <td width="130" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Razão Social:</div>
      </div></td>
      <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="razao" type="text" id="razao" size="100" value="<?php echo $row["razao"] ?>" class="required"  placeholder="*" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Nome Fantasia:</div>
      </div></td>
      <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="respnome"></label>
        <label for="label"></label>
        <input name="fantasia" type="text" class="required" id="fantasia" value="<?php echo $row["fantasia"] ?>" size="100" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">CNPJ:</div>
      </div></td>
      <td width="217" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="cnpj" type="text" id="textfield" value="<?php echo $row["cnpj"] ?>" size="25" />
        </div>
      </div></td>
      <td width="137" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">CPF:</div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco"></label>
        </span>
        <input name="cpf" type="text" id="textfield4" value="<?php echo $row["cpf"] ?>" size="25" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Inscrição Municipal:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="inscmunicipal" type="text" id="inscmunicipal" value="<?php echo $row["inscricaoMunicipal"] ?>" size="25" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Inscrição Estadual:</div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="razao"></label>
        </span> <span class="texto">
          <input name="inscestadual" type="text" id="textfield3" value="<?php echo $row["inscricaoEstadual"] ?>" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Telefone:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="ramal"></label>
        <label for="foto"></label>
        <span class="texto">
          <input name="telefone" type="text" class="required" id="textfield6" value="<?php echo $row["telefone"] ?>" size="25" />
        </span></div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Fax:</div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <input name="fax" type="text" id="textfield8" value="<?php echo $row["fax"] ?>" size="25" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Email:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="cpf"></label>
        <input name="email" type="text" class="email" id="email" value="<?php echo $row["email"] ?>" size="25" />
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Site:</div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <input name="site" type="text" id="textfield5" value="<?php echo $row["site"] ?>" size="25" />
      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#E9E9E9">&nbsp;</td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao" style="text-align:right" ><input type="submit" name="submit" id="submit" value="Salvar" /></div></td>
    </tr>
  </table>
  </div>
</form>
</body>
</html>