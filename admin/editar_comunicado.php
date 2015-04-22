<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Comunicado</title>


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
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999");
                
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
<form id="form" name="editar_form" action="att_comunicado.php" method="post">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="4" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_rh.php';
?>
          <?php
        $id = $_GET["id"];
		
        include_once '../fontes/conexao.php';

        $sql = "select * from comunicado where id = ".$id;

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);
			
			$comunicado = str_replace("<br />", "", $row["comunicado"]);
	
        ?>
          Editar Comunicado</div>
      </div></td>
    </tr>
    <tr>
      <td width="25%" rowspan="2" bgcolor="#CCCCCC"><div class="solicitacao">
        <div class="texto">Comunicado:</div>
      </div></td>
      <td rowspan="2" bgcolor="#CCCCCC"><div class="solicitacao">
        <input type="hidden" name="id" value="<?php echo $row["id"] ?>"/>
        <label for="nome"></label>
        <label for="comunicado"></label>
        <textarea name="comunicado" cols="45" rows="5" id="comunicado"><?php echo $comunicado ?></textarea>
      </div></td>
      <td rowspan="2" bgcolor="#CCCCCC">&nbsp;</td>
      <td width="25%" bgcolor="#CCCCCC"><div class="solicitacao">
        <label for="nome2"></label>
        <label for="comunicado"></label>
        <label for="ativar"></label>
        <select name="ativar" id="ativar" class="required">
          <option selected="selected" value="">Selecionar</option>
          <option value="1">Ativar</option>
          <option value="0">Desativar</option>
        </select>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Salvar" id="cadastrar" />
        <input type="reset" name="button2" id="button2" value="Cancelar" />
      </div></td>
      <td colspan="3" bgcolor="#CCCCCC"><div class="solicitacao">
        <label for="textfield6"></label>
</td>
      
      </td>
    </tr>
  </table>
  <input type="hidden" readonly="readyonly" name="idsuite" value="<?php echo $row["id_funcionario"] ?>"/>
  <br/>
</form>


</body>
</html>