
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<title>Intranet RBNA</title>

        
      
      
      
      
      <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
      <script type="text/javascript">
			function insatisfeito(id){
                if(confirm('Deseja Alterar Cliente para Satisfeito ?')){
                    //redirecionar para o excluir
                    location.href="alt_satisfeito.php?id="+id;
                }
            }
			function satisfeito(id){
                if(confirm('Deseja Alterar Cliente para Insatisfeito ?')){
                    //redirecionar para o excluir
                    location.href="alt_satisfeito.php?id="+id;
                }
            }
			
			function inadimplente(id){
                if(confirm('Deseja Alterar Cliente para Adimplente ?')){
                    //redirecionar para o excluir
                    location.href="alt_adimplente.php?id="+id;
                }
            }
			
			function adimplente(id){
                if(confirm('Deseja Alterar Cliente para Inadimplente ?')){
                    //redirecionar para o excluir
                    location.href="alt_adimplente.php?id="+id;
                }
            }
			
            function excluir(id){
                if(confirm('Deseja realmente excluir esse Cliente ?')){
                    //redirecionar para o excluir
                    location.href="exc_cliente.php?id="+id;
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
         <script src = "../fontes/jquery-1.9.1.js"> </script>
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
</head>
<?php 
include_once '../validar.php';
include_once '../validar_obras.php';
?>

<div id="fixomenor" align="center" ><table width="99%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="4" bgcolor="" class="titulo-topo"><div align="center"><span class="title"><span class="texto">Legenda</span></span></div></td>
    </tr>
    <tr>
      <td width="2%"   ><img src="../imagens/legenda/red.png" width="20" height="20"  alt="Embarcações que não estão no RBNA" title="Embarcações que não estão no RBNA"/></td>
      <td width="46%"  class="textomenor"><span class="textomenorpreto">Cliente Inadimplente</span></td>
      <td width="2%" ><img src="../imagens/legenda/pink.png" width="20" height="20"  alt="Embarcações certificadas pelo RBNA" title="Embarcações certificadas pelo RBNA"/></td>
      <td  class="textomenorpreto">Cliente Insatisfeito</td>
    </tr>
    <tr>
      <td width="2%"   ><img src="../imagens/legenda/unred.png" width="20" height="20"  alt="Embarcações que não estão no RBNA" title="Embarcações que não estão no RBNA"/></td>
      <td  class="textomenor"><span class="textomenorpreto">Cliente Adimplente</span></td>
      <td width="2%" ><img src="../imagens/legenda/unpink.png" width="20" height="20"  alt="Embarcações certificadas pelo RBNA" title="Embarcações certificadas pelo RBNA"/></td>
      <td  class="textomenorpreto">Cliente Satisfeito</td>
    </tr>
  </table>
</div>

<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA </td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title">Clientes</div></td>
      <td width="19%" bgcolor="#FF0000" class="title"><?php 
	  $nome = explode(" ", $_SESSION["nome"]);
	  
	  
	  echo "Olá ".$nome[0] . " ";?></td>
      <td width="8%" bgcolor="#FF0000"><a href="logout.php">Sair</a></td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#0099CC"><div align="center">
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
            </ul>
          </li>
          <li><a href="#" class="MenuBarItemSubmenu">Eventos</a>
            <ul>
              <li><a href="cad_evento.php">Cadastrar</a></li>
              <li><a href="edit_eveto.php">Editar</a></li>
            </ul>
          </li>
          <li><a href="../intranet.php">Pagina do Usu&aacute;rio</a></li>
        </ul>
      </div></td>
    </tr>
    </table>
      <p> </p>
      <div align="center"><span class="texto">Procurar por:
          <label for="check"></label>
          <select name="select" id="select" onchange="ajax('dados_clientes.php?select='+document.getElementById('select').value+'&nome='+document.getElementById('texto').value+'&check='+document.getElementById('check').value, 'conteudo')">
<option value="razao" selected="selected">Razão</option>
<option value="fantasia">Fantasia</option>
            <option value="cnpj">CNPJ</option>
            <option value="cpf">CPF</option>
            </select>
        </span>
            
<span class="texto"> </span>
<input name="busca" type="text" autofocus="autofocus" id="texto" placeholder="Digite sua busca"  onkeyup="ajax('dados_clientes.php?select='+document.getElementById('select').value+'&nome='+document.getElementById('texto').value+'&check='+document.getElementById('check').value, 'conteudo')" size="40"/>
<span class="texto">
<select name="check" id="check" onchange="ajax('dados_clientes.php?select='+document.getElementById('select').value+'&nome='+document.getElementById('texto').value+'&check='+document.getElementById('check').value, 'conteudo')" >
  <option value="0">Status</option>
  <option value="1" style="color:#F00">Inadimplentes</option>
  <option value="2" style="color:#F0F">Insatisfeitos</option>
</select>
</span>
<label for="check"></label>
        </div>





<p><div id="conteudo"> </p></span>
 
<?php

    include_once '../fontes/conexao.php';

    $sql = "select * from matriz ORDER BY razao ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
        ?>
         
<div align="center" id="result">
  <table width="95%" border="0" cellpadding="2" cellspacing="2">
       
         
		<tr>
          <td width="35%" bgcolor=#666666 class='title'>Razao Social:</td>
    <td width="30%"  bgcolor=#666666 class='title'>Fantasia:</td>
	<td width="17%"  bgcolor=#666666 class='title'>CPF / CNPJ</td>
    <td width="3%"  bgcolor=#666666 class='title'><div align="center"><img src="../imagens/legenda/red.png" width="20" height="20"  alt=""/></div></td>
    <td width="3%"  bgcolor=#666666 class='title'><div align="center"><img src="../imagens/legenda/pink.png" width="20" height="20"  alt=""/></div></td>
    <td width="6%"  bgcolor=#666666 class='title'>Editar&nbsp;</td>
    <td width="6%"  bgcolor=#666666 class='title'>Excluir</td>
   	</tr>

       <?php while ($row = mysql_fetch_array($result)) { 
	   
	   if ($row["cnpj"]!=0){
	   $cnpjcpf = "CNPJ: ".$row["cnpj"];
	   
	   }
	   elseif ($row["cpf"] !=0){
	   $cnpjcpf = "CPF: ".$row["cpf"];
	   
	   }else {
		  $cnpjcpf = ""; 
	   }
	  
	   if ($row["inadimplente"]==1){
	   $inadimplente = "<a href='javascript:inadimplente(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente'/></div>";
	   
	   
	   }else{
	   $inadimplente = "<a href='javascript:adimplente(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/unred.png' width='20' height='20'  alt='Cliente Adimplente' title='Cliente Adimplente'/></div>";;
	   }
	   
	   if ($row["insatisfeito"]==1){
	   $insatisfeito = "<a href='javascript:insatisfeito(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito'/></div>";
	   
	   }else{
	   $insatisfeito = "<a href='javascript:satisfeito(".$row["idMatriz"].")'><div align='center'><img src='../imagens/legenda/unpink.png' width='20' height='20'  alt='Cliente Satisfeito' title='Cliente Satisfeito'/></div>";
	   }
	   
	   
	   ?>
         <tr>
         <td bgcolor="#F2F2F2" class='textomenorpreto'><div class='solicitacao'><?php echo $row["razao"] ?></div></td>
         <td bgcolor=#F2F2F2 class='textomenorpreto'><div class='solicitacao'><?php echo $row["fantasia"] ?></td>
		 <td bgcolor=#F2F2F2 class='textomenorpreto'><div class='solicitacao'><?php echo $cnpjcpf  ?> </td>
         <th bgcolor=#F2F2F2 class="textomenorpreto"><div class='solicitacao'><?php echo $inadimplente  ?></div></th>
         <th bgcolor=#F2F2F2 class="textomenorpreto"><div class='solicitacao'><?php echo $insatisfeito  ?></div></th>
         <th bgcolor=#F2F2F2 class="textomenorpreto"><a href='editar_cliente.php?id=<?php echo $row["idMatriz"] ?>')"><div class='solicitacao' style="text-align:center"><img src="../imagens/edit.png" width="20" height="20" /></div></a></th>
<th bgcolor=#F2F2F2 class="texto"><a href="javascript:excluir('<?php echo $row["idMatriz"] ?>')"><div class="solicitacao" style="text-align:center"><img src="../imagens/delete.png" width="20" height="20" align="absmiddle" /></div></a></th>
            <?php
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
    } else {
         echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhum Cliente Encontrado<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
    
?> <?php
}

?>  
<script type="text/javascript">
<!--
//-->
  </script>


</table>
  <br />
  <p>&nbsp;</p>
</div>

    



<p>&nbsp;</p>
<div class="clear"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>