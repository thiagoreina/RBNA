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
<?php $idMatriz = $_GET["id"] ?>
<form id="form" name="editar_form" action="gravar_filial.php" method="post">
  <span class="title">

  </span>
  <span class="title">

  </span>
  <div class="editar">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="4" bgcolor="#CCCCCC"><div align="center" class="texto">
      Cadastrar Filial</div></td>
    </tr>
    <tr>
      <td width="13%" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Nome:</div>
      </div></td>
      <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="nome" type="text" id="nome" value="" size="103" class="required" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Email:</div>
      </div></td>
      <td width="33%" bgcolor="#E9E9E9"><div class="solicitacao"> <span class="aviso">
        <label for="nome12"></label>
        <label for="label"></label>
        <input name="email" type="text" class="email" id="email" value="" size="35"  />
      </span></div></td>
      <td width="20%" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Fax:</div>
        </div>
      </div></td>
      <td width="34%" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco2"></label>
        </span>
        <input name="fax" type="text" id="fax" value="" size="25" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">CNPJ/CPF:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <select name="selectcpnj" id="selectcnpj">
            <option value="1">CNPJ</option>
            <option value="2">CPF</option>
        </select>
          <input name="cnpjcpf" type="text" id="cnpjcpf" value="" size="25" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Inscrição Municipal:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco6"></label>
        </span>
        <input name="inscmunicipal" type="text" id="inscmunicipal" value="" size="25" />
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Telefone:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="telefone" type="text" id="tel" value="" size="25" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Inscrição Estadual:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="respnome"></label>
        </span> <span class="texto">
        <input name="inscestadual" type="text" id="inscestadual" value="" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Logradouro:</div>
      </div></td>
      <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <select name="logradouro1" id="select">
            <option value="Av.">Avenida</option>
            <option value="Est.">Estrada</option>
            <option value="Pça.">Praça</option>
            <option value="Pr.">Praia</option>
            <option value="Qd.">Quadra</option>
            <option value="Rod.">Rodovia</option>
            <option value="R.">Rua</option>
            <option value="Tv.">Travessa</option>
            <option value="Vd.">Viaduto</option>
            <option value="Vl.">Vila</option>
          </select>
          <input name="logradouro2" type="text" id="razao3" size="87" class="required"  />
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
        <label for="nome10"></label>
        <label for="label2"></label>
        <input name="cep" type="text" id="cep" size="25" />
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Numero:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="nome11"></label>
        <label for="label2"></label>
        <input name="numero" type="text" id="numero" size="25" />
      </div></td>
      </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Complemento:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="complemento" type="text" id="textfield9" size="25" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Bairro:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco4"></label>
        </span>
        <input name="bairro" type="text" class="required" id="textfield11" size="25"  />
      </div></td>
      </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Estado:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="estado" type="text" class="required" id="estado" size="25"  />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">
          <div align="right">Cidade:</div>
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco8"></label>
        </span>
        <input name="cidade" type="text" class="required" id="textfield" size="25" />
      </div></td>
      </tr>
    <tr>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">País:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="pais" type="text" class="required" id="pais" size="25"  />
        </div>
      </div></td>
      <td colspan="2" bgcolor="#E9E9E9">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="site"></label>
        <div align="center" class="aviso">
          <div align="right">
          <input type="hidden" name="idMatriz" value="<?php echo $idMatriz ?>"/>
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