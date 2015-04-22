<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar PDF</title>


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
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999");
                
            }//chave
        )//parentese

        </script>
        <script type="text/javascript">
function openWindow(url){
popupWin = window.open(url, 'new_page', 'width=520, height=450')
}
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
<form action="att_pdf_obras_oh.php" method="post" enctype="multipart/form-data" name="form" id="form">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_obras.php';
include_once '../fontes/conexao.php';
?>
          <?php
        $id = $_GET["id"];
		
        

        $sql = "select * from obras_oh where id = ".$id;

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);
		
		$registro = $row["registro"] ;
				
		?>
          Alterar PDF da Obra <?php echo $registro ?></div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><div class="solicitacao" align="center">
        <div class="texto"></div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><div class="solicitacao"> 
        
        <div class="texto">
          <label for="foto"></label>
          <div align="center">TROCAR PDF:

            <input type="file" name="pdf" id="pdf" />
          </div>
        </div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><div class="solicitacao">
        <label for="textfield4"></label>
        <div align="center"><span class="aviso">
          Se não selecionar nenhum PDF, o PDF será removido</span>
          <input type="submit" name="cadastrar" value="Cadastrar" />
          <input type="reset" name="button2" id="button2" value="Cancelar" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
  </table>
  <input type="hidden" name="id" id="id" value="<?php echo $row["id"] ?>"/>
  <br/>
</form>


</body>
</html>