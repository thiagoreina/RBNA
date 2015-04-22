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
<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#EEEEEE">
<table width="780" border="0" align="center" cellpadding="2" cellspacing="2">
  <tr>  </tr>
</table>
<div align="center"></div>
<form id="form" name="criar_setor" method="post" action="gravar_setor.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_admin.php';
include_once '../fontes/conexao.php';
?>


          Cadastrar Setor</div>
      </div></td>
    </tr>
    <tr>
      <td width="35%" bgcolor="#CCCCCC"><div class="solicitacao">
        <div class="texto">Nome do Setor:</div>
      </div></td>
      <td width="65%" bgcolor="#CCCCCC"><div class="solicitacao">
               <label for="setor"></label>
 
          <input name="setor" type="text" class="required" id="setor" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#CCCCCC"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Cadastrar" />
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
<form id="form" name="criar_setor" method="post" action="gravar_setor.php" >

  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td width="67%" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">

          Lista de Setor</div>
      </div></td>
      <td width="17%" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title"> Excluir</div>
      </div></td>
      <td width="16%" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title"> Editar</div>
      </div></td>      
      <?php
$sql = "SELECT * FROM setor ORDER BY setor ";
$result = mysql_query($sql, $con);
$num_rows = mysql_num_rows($result);
while ($row = mysql_fetch_array ($result)){
	?>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC" class="texto"><div class="solicitacao">

	<?php echo $row["setor"] ?>

</div>
      </td>
      <td bgcolor="#CCCCCC" class="texto"><div class="solicitacao"> <div class="solicitacao"><a href="javascript:excluir('<?php echo $row["id"] ?>')"><img src="../imagens/delete.png" width="20" height="20" /></a></th> </div></td>
      <td bgcolor="#CCCCCC" class="texto"><div class="solicitacao"><a href="editar_setor.php?id=<?php echo $row["id"] ?>"><img src="../imagens/edit.png" width="20" height="20" /></a>
        </th>
      </div></td>
    </tr>
    <?php }

?>
  </table></p>
</body>
</html>