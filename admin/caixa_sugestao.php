
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>
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
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>





<script type="text/javascript">

            function excluir(id){
                if(confirm('Deseja realmente Desativar essa Sugestão?')){
                    //redirecionar para o excluir
                    location.href="desativar_sugestao.php?id="+id;
                }
            }

        </script>
</head>
<?php 
include_once '../validar.php';
include_once '../validar_admin.php';
?>



<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="17%" bgcolor="#FF0000" class="title">Intranet RBNA</td>
      <td width="16%" bgcolor="#FF0000" class="title"><?php 
	  
	  $nome = explode(" ", $_SESSION["nome"]);
	  
	  
	  echo "Olá ".$nome[0] . " ";?></td>
      <td width="41%" bgcolor="#FF0000"><div align="center" class="title">Painel de Controle</div></td>
      <td width="19%" bgcolor="#FF0000" class="title"><div align="center"><img src="../imagens/box.png"  alt="" width="20" height="20" align="absmiddle"/><a href="caixa_sugestao.php" name="modal"> <span class="textomenor">Caixa de Sugestões</span></a></div></td>
      <td width="9%" bgcolor="#FF0000"><a href="logout.php">Sair</a></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#0099CC"><div align="center">
        <ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="index.php">Pagina Inicial</a></li>
          <li><a href="#" class="MenuBarItemSubmenu">Obras</a>
            <ul>
              <li><a href="obras_rb.php" class="MenuBarItemSubmenu">RB</a>
                <ul>
                  <li><a href="edit_obras_rb.php">Editar</a></li>
                  <li><a href="cad_obras_rb.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_ce.php" class="MenuBarItemSubmenu">CE</a>
                <ul>
                  <li><a href="edit_obras_ce.php">Editar</a></li>
                  <li><a href="cad_obras_ce.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_oa.php" class="MenuBarItemSubmenu">OA</a>
                <ul>
                  <li><a href="edit_obras_oa.php">Editar</a></li>
                  <li><a href="cad_obras_oa.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_ov.php" class="MenuBarItemSubmenu">OV</a>
                <ul>
                  <li><a href="edit_obras_ov.php">Editar</a></li>
                  <li><a href="cad_obras_ov.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_ow.php" class="MenuBarItemSubmenu">OW</a>
                <ul>
                  <li><a href="edit_obras_ow.php">Editar</a></li>
                  <li><a href="cad_obras_ow.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_oh.php" class="MenuBarItemSubmenu">OH</a>
                <ul>
                  <li><a href="edit_obras_oh.php">Editar</a></li>
                  <li><a href="cad_obras_oh.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_oi.php" class="MenuBarItemSubmenu">OI</a>
                <ul>
                  <li><a href="edit_obras_oi.php">Editar</a></li>
                  <li><a href="cad_obras_oi.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_og.php" class="MenuBarItemSubmenu">OG</a>
                <ul>
                  <li><a href="edit_obras_og.php">Editar</a></li>
                  <li><a href="cad_obras_og.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_om.php" class="MenuBarItemSubmenu">OM</a>
                <ul>
                  <li><a href="edit_obras_om.php">Editar</a></li>
                  <li><a href="cad_obras_om.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_ot.php" class="MenuBarItemSubmenu">OT</a>
                <ul>
                  <li><a href="edit_obras_ot.php">Editar</a></li>
                  <li><a href="cad_obras_ot.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_od.php" class="MenuBarItemSubmenu">OD</a>
                <ul>
                  <li><a href="edit_obras_od.php">Editar</a></li>
                  <li><a href="cad_obras_od.php">Cadastrar</a></li>
                </ul>
              </li>
              <li><a href="obras_ok.php" class="MenuBarItemSubmenu">OK</a>
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
              <li><a href="#">DAPR</a></li>
              <li><a href="#">DVIN</a></li>
              <li><a href="#">DTRE</a></li>
              <li><a href="#">DPDR</a></li>
              <li><a href="#">DQUA</a></li>
            </ul>
          </li>
          <li><a href="#">Links Uteis</a></li>
          <li><a href="#" class="MenuBarItemSubmenu">Eventos</a>
            <ul>
              <li><a href="cad_evento.php">Cadastrar</a></li>
              <li><a href="edit_eveto.php">Editar</a></li>
            </ul>
          </li>
          <li><a href="../intranet.php">Pagina do Usu&aacute;rio</a></li>
        </ul>
      </div>
        <div align="center"></div></td>
</tr>
    <tr>
      <td colspan="5" bgcolor="#0099CC"></td>
    </tr>
  </table>
</div>

    



<p>&nbsp;</p>
<div class="centro">
<table width="100%" border="1">
  <tr>
    <td bgcolor="#0099CC"><div align="center"><span class="title">Sugestões</span>
      <?php

include_once '../fontes/conexao.php';
$sql = "SELECT * FROM sugestao where ativo = 1 ORDER BY data DESC";
$result = mysql_query($sql, $con);
$num_rows = mysql_num_rows($result);
if($num_rows > 0 ){
while ($row = mysql_fetch_array ($result)){

$data = $row["data"];
$id_funcionario = $row["idfunc"];
$msg = $row["msg"];
$anonimo = $row["anonimo"];

$dataexp = explode(" ",$data);
	
	
	$dataformat = $dataexp[0];
	$horaformat = $dataexp[1];
	
	$dataecho = explode("-",$dataformat);
	$ano = $dataecho[0];
	$mes = $dataecho[1];
	$dia = $dataecho[2];
	
	$datafinal = $dia."/".$mes."/".$ano;
	
	$horaecho = explode(":",$horaformat);
	
	$hora = $horaecho[0];
	$minuto = $horaecho[1];
	$segundo = $horaecho[2];
	
	$horafinal = " as ".$hora.":".$minuto. ":" .$segundo ;
//---------------------------------------------------------------------------------------*/
$sqlfunc = "SELECT * FROM funcionario WHERE id_funcionario = ". $id_funcionario;
$resultfunc = mysql_query($sqlfunc, $con);
while ($rowfunc = mysql_fetch_array ($resultfunc)){

$funcionario = $rowfunc["nome"];
?>
    </div></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td colspan="2" bgcolor="#F3F3F3" class="textomenorpreto">Sugestão de: <span class="aviso"><?php 
	if ($anonimo == 0){
		echo $funcionario;
	}else{
		echo "****";
		
	}
	
	  ?>  <?php
	/*$sqlsetor = "SELECT * FROM setor WHERE id = ". $rowfunc["id_setor"];
$resultsetor = mysql_query($sqlsetor, $con);
while ($rowsetor = mysql_fetch_array ($resultsetor)){
	
	 echo $rowsetor["setor"];
	 
	 }*/ ?> </span></td>
    <td width="47%" bgcolor="#F3F3F3"><span class="textomenorpreto">Data : <?php echo $datafinal .$horafinal; ?></span></td>
    <td width="5%" bgcolor="#F3F3F3">
      <div align="center"><a href="javascript:excluir('<?php echo $row["id"] ?>')"><img src="../imagens/Cancel.png" width="17" height="17" alt="Desativar Sugestão" title="Desativar Sugestão" /></a><span class="texto"></span>
    </td>
    </tr>
  <tr>
    <td colspan="22" bgcolor="#FFFFFF" class="textomenorpreto"><div class="solicitacao"><div align="center"><?php echo $msg ?>
      </div></div></td>
    
    <td width="1%"></td>
    </tr>
  <tr>
    <td width="1%"></td>
    <td width="46%">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    </tr>
    <br>
  <?php
}
}
}else{
	echo "Nenhuma Sugestão Ativa !";
	}
?>
</table>
  </div>
  <div class="clear">
    <p><a href="caixa_sugestao_inativa.php"><span class="aviso">Ver Sugestões Inativas</span></a></p>
  </div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>