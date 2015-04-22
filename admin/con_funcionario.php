
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>

        
      
      <link href="../fontes/alt.css" rel="stylesheet" type="text/css" />
      
      
      <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
      <script src="../fontes/alt.js" type="text/javascript"></script>
      <script type="text/javascript">

            function excluir(id){
                if(confirm('Deseja realmente Desligar esse Funcionário?')){
                    //redirecionar para o excluir
                    location.href="exc_funcionario.php?id="+id;
                }
            }

        </script>
        <script type="text/javascript">

            function desativar(id){
                if(confirm('Deseja remover este funcionário da gerência ?')){
                    //redirecionar para o excluir
                    location.href="gerente.php?id="+id;
                }
            }

        </script>
         <script type="text/javascript">

            function ativar(id){
                if(confirm('Deseja promover este funcionário a gerente ?')){
                    //redirecionar para o excluir
                    location.href="gerente.php?id="+id;
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
<link href="" rel="stylesheet" type="text/css" />
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
include_once '../validar_rh.php';
?>



<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA </td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title"> Cadastro de Funcionario</div></td>
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
      <p>         </table>
</p><div>
      
        <div class="solicitacao"><span class="texto">Procurar Funcionarios:</span>

         <input type="text"  onkeyup="ajax('dados_funcionario.php?nome='+this.value,'conteudo')" size="40"/>
        
      
<label>


<p> </p></span>

<?php

    include_once '../fontes/conexao.php';
	
//Busca Funcionario
     $sql = "SELECT * FROM funcionario where desligado = 0 ORDER BY nome ";


    $result = mysql_query($sql, $con);
	$num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
        ?>
        <div align="center" class="aviso">
  <?php
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
        ?>
<div align="center"><div id="conteudo">
<table width="94%" border="0" cellpadding="2" cellspacing="2">
       
          <tr>
    <td  bgcolor=#666666 class='title'>Nome:</td>
    <td  bgcolor=#666666 class='title'>Email:</td>
	<td  bgcolor=#666666 class='title'>Login:</td>
	<td  bgcolor=#666666 class='title'>Editar:</td>
    <td  bgcolor=#666666 class='title'>Desligar:</td>
	<td  bgcolor=#666666 class='title'>Usuario:</td>
    <td  bgcolor=#666666 class='title'>Acesso:</td>
    <td  bgcolor=#666666 class='title'><div align="center"><img src='../imagens/manager.png' width='15' height='15' /></div></td>
    	</tr>
<?php
		
        while ($row = mysql_fetch_array($result)) {
         echo "<tr>";
         echo "<td bgcolor=#F7F7F7 class='texto'><div class='solicitacao'><div class='divbtn' style='height:20px;'>" . $row["nome"] . "</div></td>";
         echo "<td bgcolor=#F7F7F7 class='textomenorpreto'><div class='solicitacao'><div class='divbtn' style='height:20px;'>" . $row["email"] . "</div></td>";
		 $sqlperfil = "SELECT * FROM usuario where idfunc = ".$row["id_funcionario"];


    $resultperfil = mysql_query($sqlperfil, $con);
	$num_rows_login = mysql_num_rows($resultperfil);
	
	 if ($num_rows_login > 0){
			$imglogin = "../imagens/editlogin.png"; 
			$info = "Editar Login";
		 }else{
			$imglogin = "../imagens/addlogin.png"; 
			$info = "Criar Login";
		 }
		
		 ?> 	
	
         <th bgcolor=#F7F7F7 class="texto"><a href="javascript:MM_openBrWindow('criar_login.php?id=<?php echo $row["id_funcionario"] ?>','edit','width=750,height=200')" onmouseover="tooltip.show('<?php echo $info ?>');" onmouseout="tooltip.hide();" ><div class="solicitacao"><div class="divbtn" style='height:20px;' align="center"><img src="
			 
			 <?php echo $imglogin ?>" width="20" height="20" align="absmiddle" style="border:none"/></div></div></a></th>
		<th bgcolor="#F7F7F7" class="texto"><a href="javascript:MM_openBrWindow('editar_funcionario.php?id=<?php echo $row["id_funcionario"] ?>','edit','width=835,height=260')" onmouseover="tooltip.show('Editar Dados de:  <?php echo $row["nome"] ?>');" onmouseout="tooltip.hide();" ><div class="solicitacao" style="text-align:center"><div class="divbtn" style='height:20px;'><img src="../imagens/edit.png" width="20" height="20" align="absmiddle" style="border:none"/></div></div></a></th>
<th bgcolor=#F7F7F7 class="texto" align="center"><a href="javascript:excluir('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Desligar <?php echo $row["nome"] ?> da Empresa');" onmouseout="tooltip.hide();" ><div class="solicitacao" style="text-align:center"><div class="divbtn" style='height:20px;' align="center"><img src="../imagens/off.png" width="20" height="20" align="absmiddle" style="border:none"/></div></div></a></th>
<?php

		  while ($rowperfil = mysql_fetch_array($resultperfil)){
	
		
 
		
		
	 switch ($rowperfil["perfil"]) {
	case "0": $perfil = "Normal"; 			$color = "#F7F7F7"; break;
    case "1": $perfil = "Administrador"; 	$color = "#FF5151"; break;
    case "2": $perfil = "Desativado";		$color = "#858585"; break;
    case "3": $perfil = "RH"; 				$color = "#A9F3D8"; break;
    case "4": $perfil = "Obras"; 			$color = "#AACBF2"; break;
	     };
?>
<td bgcolor=#F7F7F7 class='textomenorpreto'><div class='divbtn' style='height:20px;'><div class="solicitacao" ><?php echo $rowperfil["login"]  ?></div></td>
<td  class='textomenorpreto'><div class='divbtn' style="height:20px; background-color:<?php echo $color?>"><div class="solicitacao" ><?php  

	echo $perfil;
if ($rowperfil["senha"] == "d2a73e86a3bccc79f16f6ee4c9f66c66"){
	
	
	
	echo " |<img src='../imagens/pass.png' width='15' height='15' />|  ";
	}
 ?></div></td>
 
 <td bgcolor=#F7F7F7 align="center" class='texto'><a href="javascript:desativar('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Remover <?php echo $row["nome"] ?> da Gerência');" onmouseout="tooltip.hide();" ><div class="solicitacao" style="text-align:center"><?php if ($row["gerente"]== 1){
?><div class='divbtn' style='height:20px;'><div align="center">
<img src="../imagens/manager.png" width="20" height="20" style="border:none"/></div></div></div></a><?php 

 }else{
	 ?>
<a href="javascript:ativar('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Promover <?php echo $row["nome"] ?> a Gerente');" onmouseout="tooltip.hide();" ><div class='divbtn' style='height:20px;'><div align="center"><img src="../imagens/no_manager.png" width="15" height="15" style="border:none"/></div></div></div></a><?php 

 }
	  ?></td>
 
 
 
            <?php
            echo "</tr>";
	}
		}
        echo "</table>";
		echo "<div align='center'><span class='aviso'>".$num_rows." Funcionários Cadastrados</span></div></div>";
        mysql_close($con);
    } else {
        echo "Nenhum Funcionario encontrado!";
    
?> <?php
}

?> 
<table width="30%" border="0" >
  <tr class="textomenorpreto">
      <td bgcolor="#E5E5E5"><div align="center">Legenda:</div></td>
    <td bgcolor="#E5E5E5" class="solicitacao"><div align="center"></div>      <div align="center"><img src='../imagens/pass.png' width='15' height='15' /> Senha Padrão</div></td>
    <td bgcolor="#F7F7F7" class="solicitacao"><div align="center">Usuario Normal</div></td>
    <td bgcolor="#FF5151"  class="solicitacao"><div align="center"></div>      <div align="center">Administrador</div></td>
    <td bgcolor="#858585"  class="solicitacao"><div align="center"></div>      <div align="center">Usuario Desativado</div></td>
    <td bgcolor="#A9F3D8"  class="solicitacao"><div align="center"></div>      <div align="center">RH</div></td>
    <td bgcolor="#AACBF2" class="solicitacao"><div align="center"></div>      <div align="center">Obras</div></td>
    
    </tr>
</table> 
<script type="text/javascript">
<!--
//-->
  </script>



<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script><div class="clear"></div>
</body>
</html>