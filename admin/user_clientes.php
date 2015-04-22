
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>

<script type="text/javascript">

function habilitaText(obj,id) {
if(obj.changed == true){
document.getElementById(id).disabled = true; 



}else{
document.getElementById(id).disabled = false;
}
}

</script>
<script type="text/javascript">
 var elem = document.getElementById("select");
var selectVal = elem.options[elem.selectedIndex].value;
</script>
        
        <script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

  function excluir(id, idCliente, pagina){
                if(confirm('Deseja realmente excluir O responsável desta Matriz ?')){
                    //redirecionar para o excluir
                    location.href="exc_resp_matriz.php?id="+id+"&idCliente="+idCliente+"&pagina="+pagina;
                }
            }


//-->
</script>
        
        
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
        <script type="text/javascript" src="dojo/dojo.js"></script>
         <script src = "http://code.jquery.com/jquery-1.9.1.js"> </script>
        <script src="../fontes/alt.js" type="text/javascript"></script>
		<script type="text/javascript" src="../dojo/utils.js"></script>

<link href="../fontes/alt.css" rel="stylesheet" type="text/css" />
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
?>



<body background="imagens/bg1.jpg" class="bg" >
<div align="center" class="total">

<div align="center">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA </td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title">Lista de Usuários do Status (clientes)</div></td>
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
              <li><a href="user_clientes.php">Lista de Usu&aacute;rios</a></li>
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
      
        <div class="solicitacao"><div align="center"><span class="textomenorpretoB">
          <?php
           
			
			if(isset ($_GET["msg"])){
				 $msg = base64_decode($_GET["msg"]);
                echo "

				<div class='info'><div align='center' class='aviso'><img src='../imagens/Info.png' width='25' height='25' align='absmiddle'/> ". $msg."  <img src='../imagens/Info.png' width='25' height='25' align='absmiddle'/></div></div>";
            }
        ?>
        </span></div>
<div id="conteudo"></span>

<?php

    include_once '../fontes/conexao.php';

    $sql = "select * from responsavel ORDER BY matriz_idMatriz ";


    $result = mysql_query($sql, $con);

    if (mysql_num_rows($result) > 0) {
		

        ?>
        

<div align="center" id="result"><table width="95%" border="0" cellspacing="1" cellpadding="2" >
<tr>
      <td bgcolor=#666666 class='textomenorB'>Nome:</td>
    <td width="22%"  bgcolor=#666666 class='textomenorB'>Login/Email:</td>
    <td width="31%"  bgcolor=#666666 class='textomenorB'>Contratante:</td>
	<td width="25%"  bgcolor=#666666 class='textomenorB'>Gerar Senha</td>
	<td width="2%"  bgcolor=#666666 class='textomenorB'>Editar</td>
	<td width="3%"  bgcolor=#666666 class='textomenorB'>Excluir</td>
    </tr>
<?php
        while ($row = mysql_fetch_array($result)) { 
		
		 $registro = $row['nome'];
		$link_obra1 = substr($registro,0,2);
   		$link_obra = strtolower($link_obra1);
		
$sqlCliente = "select idMatriz, fantasia, inadimplente, insatisfeito from matriz where idMatriz = ".$row['matriz_idMatriz'];


    $resultCliente = mysql_query($sqlCliente, $con);
	$rowCliente = mysql_fetch_array($resultCliente);
	
	if (isset($row['filial_idfilial'])){
	
	$sqlfilial = "select idfilial, nome from filial where idfilial = ".$row['filial_idfilial'];


    $resultfilial = mysql_query($sqlfilial, $con);
	$rowfilial = mysql_fetch_array($resultfilial);
	
	$filial = $rowfilial["nome"];

	}else{
	$filial = "";	
	}
		
		?>
       <tr style="cursor:default" onMouseOver="javascript:this.style.backgroundColor='<?php if ($rowCliente['inadimplente'] == 1){

   echo "#FF5B5B";
	   }else{
		echo "#EAEAEA";   
	  

}
?>'" onMouseOut="javascript:this.style.background='none'">
        <td width="17%" class='textomenorpretoB' title="<?php $contagemreg = strlen($row['nome']);

if ($contagemreg > '20') {

   echo $row['nome'];
}
?>"><div class='solicitacao' style="height:20px"><?php echo substr($row['nome'],0,20);

if ($contagemreg > '20') {

   echo "..."; 

   

   }

 ?></td>
           <td class='textomenorpreto' title="<?php $contagemembarcacao = strlen($row['email']);

if ($contagemembarcacao > '25') {

   echo $row['email'];
}
?>"><div class="solicitacao" style="height:20px" ><?php echo substr($row['email'],0,25);

if ($contagemembarcacao > '25') {

   echo "..."; 

   

   }



 ?>             </td>
 
 
 <td class="textomenorpreto" title="<?php $contagemcontratante = strlen($rowCliente['fantasia']);

if ($contagemcontratante > '35') {

   echo $rowCliente['fantasia'];
}
?>"><a href="editar_cliente.php?id=<?php echo $rowCliente['idMatriz'] ?>"><div class="solicitacao" style="height:20px"><?php echo substr($rowCliente['fantasia'],0,35);

if ($contagemcontratante > '35') {

   echo "..."; 

   

   }/*
$dataatt = $row["att"];   
 
$timestamp1 = strtotime($dataatt);

$dataformat =date('d/m/Y H:i:s', $timestamp1);
*/

  ?></div></td>
          <th class="textomenorpreto"><div class="solicitacao"><form action="gerar_senha_resp.php" method="post"> 
       <?php if(empty ($row["senha"])) { ?>
      
      
       <input type="hidden" name="id" value="<?php echo $row["idresponsavel"] ?>"/>
       <input type="hidden" name="id_cliente" value="<?php echo $rowCliente["idMatriz"] ?>"/>
       
       <input type="hidden" name="email" value="<?php echo $row["email"] ?>"/>
       <input type="hidden" name="pagina" value="user_clientes.php"/>
<input type="submit" value="Gerar Senha" name="gerarsenha" /></form><form action="gerar_senha_resp.php" method="post"> 
       <?php }else{
		echo "********";
		 ?>
       <input type="hidden" name="id" value="<?php echo $row["idresponsavel"] ?>"/>
       <input type="hidden" name="id_cliente" value="<?php echo $rowCliente["idMatriz"] ?>"/>
       
       <input type="hidden" name="email" value="<?php echo $row["email"] ?>"/>
       <input type="hidden" name="pagina" value="user_clientes.php"/>
       <input type="submit" value="Gerar Nova Senha" name="gerarsenha" /></form><?php  
	   }?></div></th>
          <th class="textomenorpreto"><a href="javascript:excluir('<?php echo $row["idresponsavel"] ?>','<?php echo $rowCliente["idMatriz"] ?>','user_clientes.php')"></a>
          <div class="solicitacao" style="text-align:center"><a href="javascript:MM_openBrWindow('editar_resp_matriz.php?id=<?php  echo $row["idresponsavel"] ?>','edit','scrollbars=yes,width=855,height=230')"><img src="../imagens/edit.png" width="25" height="25" /></a></div></th>
          <th class="textomenorpreto"><a href="javascript:excluir('<?php echo $row["idresponsavel"] ?>','<?php echo $rowCliente["idMatriz"] ?>','user_clientes.php')">
            <div class="solicitacao" style="text-align:center"><img src="../imagens/delete.png" width="25" height="25" /></div>
          </a></th>
         <?php
            echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
    } else {
       echo "<p class='texto'> <img src='../imagens/alert.png' width='24' height='24' align='absmiddle' />Nenhum Usuário encontrado<img src='../imagens/alert.png' width='24' height='24' align='absmiddle' /></p>";
}    
?> 
<script type="text/javascript">
<!--
//-->
  </script>

</tr>
</table>
  <p>&nbsp;</p>
</div></div></div>





<p>&nbsp;</p>
<div class="clear"></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>