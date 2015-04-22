<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Serviço OH</title>


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
                if(confirm('Deseja realmente excluir esse Serviço ?')){
                    //redirecionar para o excluir
                    location.href="exc_tipo_oh.php?id="+id;
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
<form id="form" name="criar_setor" method="post" action="gravar_tipo_oh.php" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_obras.php';
include_once '../fontes/conexao.php';
?>


          Cadastrar Serviço OH</div>
      </div></td>
    </tr>
    <tr>
      <td width="35%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Nome do Serviço:</div>
      </div></td>
      <td width="65%" bgcolor="#F7F7F7"><div class="solicitacao">
               <label for="servico"></label>
 
          <input name="servico" type="text" class="required" id="servico" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
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

          Lista de Serviço OH</div>
      </div></td>
      <td width="17%" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title"> Excluir</div>
      </div></td>
      <td width="16%" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title"> Editar</div>
      </div></td>      
      <?php
$sql = "SELECT * FROM tipo_oh ORDER BY tipo_oh ";
$result = mysql_query($sql, $con);
$num_rows = mysql_num_rows($result);
while ($row = mysql_fetch_array ($result)){
	
	$id = $row["id"];
	
	?>
    </tr>
    <tr>
      <td bgcolor="#F7F7F7" class="texto"><div class="solicitacao">

	<?php echo $row["tipo_oh"] ?>

</div>
      </td>
      <td bgcolor="#F7F7F7" class="texto"><div class="solicitacao">
      
      
        <div align="center">
          <?php
	  if ($id >= 4){
	  echo '<a href="javascript:excluir('.$id.')"><img src="../imagens/delete.png" width="20" height="20" /></a>';
	  }else{
		echo '<a href="#"><img src="../imagens/nodelete.png" width="20" height="20" /></a>';
	  }
      ?>
          
          
          </th> 
        </div>
      </div></td>
      <td bgcolor="#F7F7F7" ><div class="solicitacao">
           <div align="center">
             <?php
	  if ($id >= 4){
	  echo '<a href="editar_tipo_oh.php?id='.$id.'"><img src="../imagens/edit.png" width="20" height="20" /></a>';
	  }else{
		echo '<a href="#"><img src="../imagens/noedit.png" width="20" height="20" /></a>';
	  }
      ?>
             </th>
           </div>
      </div></td>
    </tr>
    <?php }

?>
  </table></p>
</body>
</html>