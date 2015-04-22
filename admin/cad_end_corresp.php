<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CADASTRAR ENDEREÇO DE CORRESPONDÊNCIA</title>


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
<form id="form" name="editar_form" action="gravar_end_corresp.php" method="post">
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
      
 ?>
        <input type="hidden" name="id" value="<?php echo $id ?>" />
        CADASTRAR ENDEREÇO DE CORRESPONDÊNCIA</div></td>
      </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Logradouro:</div>
      </div></td>
      <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="logradouro" value="" type="text" id="logradouro" size="85" class="required"  />
        </div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="left">CEP:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="nome15"></label>
        <label for="label2"></label>
        <input name="cep" type="text" value="" id="cep" size="25" />
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Numero:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="nome16"></label>
        <label for="label2"></label>
        <input name="numero" type="text" id="numero" value="" size="25" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Complemento:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="complemento" value="" type="text" id="complemento" size="25" />
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Bairro:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco10"></label>
        </span>
        <input name="bairro" type="text" class="required" id="bairro" value="" size="25"  />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Estado:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="estado" type="text" class="required" value="" id="estado" size="25"  />
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Cidade:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco9"></label>
        </span>
        <input name="cidade" type="text" class="required" value="" id="cidade" size="25"  />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">País:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="pais" type="text" class="required" value="" id="pais" size="25"  />
        </div>
      </div></td>
      <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao" style="text-align:right">&nbsp;
        <input type="checkbox" name="repetir" value="1" id="repetir" />
        <label for="repetir"><span class="textomenorpreto">Repetir Endereço para Cobrança </span></label>
      </div></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="site3"></label>
        <div align="center" class="aviso">
          <div align="right">
            <input name="cadastrar" type="submit" id="cadastrar" value="Salvar" />
          </div>
        </div>
      </div></td>
      </tr>
    </table>

  </div>
</form>
</body>
</html>