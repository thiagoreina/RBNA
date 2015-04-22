
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>

        
      
      
      
      
      <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
      <script type="text/javascript">

            function excluir(id){
                if(confirm('Deseja realmente excluir essa Obra ?')){
                    //redirecionar para o excluir
                    location.href="exc_obras_rb.php?id="+id;
                }
            }

        </script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
        <script type="text/javascript" src="dojo/dojo.js"></script>
        <script type="text/javascript" src="dojo/utils.js"></script>
<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
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
	color: #000;
}
a:visited {
	color: #000;
}
a:hover {
	color: #000;
}
a:active {
	color: #00F;
}
a {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="menu_relatorio/SpryMenuBar.js" type="text/javascript"></script>
<link href="menu_relatorio/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once '../validar.php';
include_once '../validar_obras.php';
?>



<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA </td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title">Obras RB</div></td>
      <td width="19%" bgcolor="#FF0000" class="title"><?php 
	  $nome = explode(" ", $_SESSION["nome"]);
	  
	  
	  echo "Olá ".$nome[0] . " ";?></td>
      <td width="8%" bgcolor="#FF0000"><a href="logout.php">Sair</a></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#0099CC"><div align="center">
        <ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="index.php">Pagina Inicial</a></li>
          <li><a href="#" class="MenuBarItemSubmenu">Obras</a>
            <ul>
              <li><a href="#" class="MenuBarItemSubmenu">RB</a>
                <ul>
                  <li><a href="edit_obras_rb.php">Editar</a></li>
                  <li><a href="cad_obras_rb.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">CE</a>
                <ul>
                  <li><a href="edit_obras_ce.php">Editar</a></li>
                  <li><a href="cad_obras_ce.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OA</a>
                <ul>
                  <li><a href="edit_obras_oa.php">Editar</a></li>
                  <li><a href="cad_obras_oa.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OV</a>
                <ul>
                  <li><a href="edit_obras_ov.php">Editar</a></li>
                  <li><a href="cad_obras_ov.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OW</a>
                <ul>
                  <li><a href="edit_obras_ow.php">Editar</a></li>
                  <li><a href="cad_obras_ow.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OH</a>
                <ul>
                  <li><a href="edit_obras_oh.php">Editar</a></li>
                  <li><a href="cad_obras_oh.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OI</a>
                <ul>
                  <li><a href="edit_obras_oi.php">Editar</a></li>
                  <li><a href="cad_obras_oi.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OG</a>
                <ul>
                  <li><a href="edit_obras_og.php">Editar</a></li>
                  <li><a href="cad_obras_og.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OM</a>
                <ul>
                  <li><a href="edit_obras_om.php">Editar</a></li>
                  <li><a href="cad_obras_om.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OT</a>
                <ul>
                  <li><a href="edit_obras_ot.php">Editar</a></li>
                  <li><a href="cad_obras_ot.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OD</a>
                <ul>
                  <li><a href="edit_obras_od.php">Editar</a></li>
                  <li><a href="cad_obras_od.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="#" class="MenuBarItemSubmenu">OK</a>
                <ul>
                  <li><a href="edit_obras_ok.php">Editar</a></li>
                  <li><a href="cad_obras_ok.php">Cadastrar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="#">Administra&ccedil;&atilde;o</a>
            <ul>
              <li><a href="funcionario.php" class="MenuBarItemSubmenu">Funcionarios</a>
                <ul>
                  <li><a href="cad_funcionario.php">Cadastrar</a></li>
                  <li><a href="con_funcionario.php">Editar</a></li>
                  <li><a href="funcionario_desligado.php">Desligados</a></li>
                </ul>
              </li>
              <li><a href="#">RH</a></li>
              <li><a href="#">Fazer Solicita&ccedil;&atilde;o</a></li>

              <li><a href="#" class="MenuBarItemSubmenu">Comunicado</a>
                <ul>
                  <li><a href="cad_comunicado.php">Cadastrar</a></li>
                  <li><a href="edit_comunicado.php">Editar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#" class="MenuBarItemSubmenu">Derpartamentos</a>
            <ul>
              <li><a href="dqua.php">DQUA</a></li>
              <li><a href="dcor.php">DCOR</a></li>
              <li><a href="dtec.php">DTEC</a></li>
              <li><a href="dcom.php">DCOM</a></li>
              <li><a href="dpdr.php">DPDR</a></li>
              <li><a href="aomi.php">AOMI</a></li>
              <li><a href="dadf.php">DADF</a></li>
              <li><a href="dtre.php">DTRE</a></li>
              <li><a href="dapr.php">DAPR</a></li>
              <li><a href="dvin.php">DVIN</a></li>
              <li><a href="dcer.php">DCER</a></li>
              <li><a href="ce.php">CE</a></li>
            </ul>
          </li>
          <li><a href="#" class="MenuBarItemSubmenu">Clientes</a>
            <ul>
              <li><a href="edit_clientes.php">Editar</a></li>
              <li><a href="cad_matriz.php">Cadastrar</a></li>
              <li><a href="user_clientes.php">Lista de Usu&aacute;rios</a></li>
            </ul>
          </li>
          
          <li><a href="../intranet.php">Pagina do Usu&aacute;rio</a></li>
        </ul>
      </div>
      <div align="center"></div></td>
</tr>
</table>
      <p> </p>
      <div align="center">
        <div class="solicitacao"><span class="texto">Procurar por:</span>
                   <label for="select"></label>
          <select name="select" id="select" onchange="ajax('dados_obras_rb.php?select='+document.getElementById('select').value+'&nome='+document.getElementById('texto').value, 'conteudo')">
<option value="embarcacao" selected="selected">Embarcação</option>
<option value="registro">Registro</option>
            <option value="contratante">Contratante</option>
          </select>
        </span>
            
<span class="texto"> </span>
<input type="text" size="40" id="texto"  onkeyup="ajax('dados_obras_rb.php?select='+document.getElementById('select').value+'&nome='+document.getElementById('texto').value, 'conteudo')"/>
        </div>
        <div class="clear"></div>
</div>
<label>
<?php     include_once '../fontes/conexao.php' ?><div id="conteudo"> </p></span>
 
<?php



    $sql = "select * from obras_rb ORDER BY registro ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?>
         
<div align="center"><table width="95%" border="0" cellpadding="2" cellspacing="2">
       
         
		<tr>
          <td width="10%" bgcolor=#666666 class='title'>Registro:</td>
    <td width="30%"  bgcolor=#666666 class='title'>Embarcação:</td>
	<td width="40%"  bgcolor=#666666 class='title'>Contratante</td>
	<td width="10%"  bgcolor=#666666 class='title'>Relatórios</td>
    <td width="5%"  bgcolor=#666666 class='title'>Editar</td>
    <td width="5%"  bgcolor=#666666 class='title'>Excluir</td>
    	</tr>

       <?php while ($row = mysql_fetch_array($result)) { 
	   $idrb = base64_encode($row["id"]);
	   ?>
         <tr>
         <td bgcolor="#F2F2F2" class='texto'><div class='solicitacao'> <?php echo $row["registro"] ?>
           </div></td>
         <td bgcolor=#F2F2F2 class='texto'><div class='solicitacao'><?php echo $row["embarcacao"] ?></td>
		 <td bgcolor=#F2F2F2 class='texto'><div class='solicitacao'><?php echo $row["contratante"] ?> </td>
		 <td bgcolor=#F2F2F2 class='texto'><a href="editar_relatorios_rb.php?id=<?php echo $idrb ?>"><div class="solicitacao">
		   <div align="center"><img src="../imagens/report.png" width="20" height="20" /></div></div></a></td>
           
           
         <th bgcolor=#F2F2F2 class="texto"><a href="javascript:MM_openBrWindow('editar_obras_rb.php?id=<?php echo $row["id"] ?>','edit','width=920,height=530')">
         <div class="solicitacao">
           <div align="center"><img src="../imagens/edit.png" width="20" height="20" /></div>
         </div></a></th>
<th bgcolor=#F2F2F2 class="texto"><a href="javascript:excluir('<?php echo $row["id"] ?>')">
<div class="solicitacao">
  <div align="center"><img src="../imagens/delete.png" width="20" height="20" /></div>
</div></a></th>


            <?php
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
    } else {
 echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhuma Obra encontrada<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
    
?> <?php
}

?>  
<script type="text/javascript">
<!--
//-->
  </script>


</table>
</div>

    



<p>&nbsp;</p>
<div class="clear"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>