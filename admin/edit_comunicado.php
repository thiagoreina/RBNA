
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

<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
      <script type="text/javascript">

            function excluir(id){
                if(confirm('Deseja realmente excluir esse Comunicado ?')){
                    //redirecionar para o excluir
                    location.href="exc_comunicado.php?id="+id;
                }
            }

        </script>

</head>
<?php 
include_once '../validar.php';
include_once '../validar_rh.php';
?>



<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA</td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title">Painel de Controle</div></td>
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
      </div>
        <div align="center"></div></td>
</tr>

  
  </table>
</div>


<p>&nbsp;</p>
  <div class="centro">    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td bgcolor="#0099CC"><div align="center"><span class="title">Lista de Comunicados</span>
          <?php	
include_once '../fontes/conexao.php';
$sqlcon = "SELECT * FROM comunicado ORDER BY id ";
$resultcon = mysql_query($sqlcon, $con);
$num_rows = mysql_num_rows($resultcon);
while ($rowcon = mysql_fetch_array ($resultcon)){
$idcon = $rowcon["id"];
$datacon = $rowcon["data"];
$comunicadocon = $rowcon["comunicado"];
$id_funcionariocon = $rowcon["id_funcionario"];
$ativo = $rowcon["ativo"];
$idcon = $rowcon["id"];
//	$divnome = explode(" ",$nome);

	$datatimecon = explode(" ",$datacon);
	$datadiacon = $datatimecon[0];
	$datahoracon = $datatimecon[1];
	
	$dataexpcon = explode("-",$datadiacon);
	
	$anocon = $dataexpcon[0];
	$mescon = $dataexpcon[1];
	$diacon = $dataexpcon[2];
	
	

    switch ($mescon) {
    case "01": $mesnomecon = "Janeiro"; break;
    case "02": $mesnomecon = "Fevereiro"; break;
    case "03": $mesnomecon = "Março"; break;
    case "04": $mesnomecon = "Abril"; break;
    case "05": $mesnomecon = "Maio"; break;
    case "06": $mesnomecon = "Junho"; break;
    case "07": $mesnomecon = "Julho"; break;
    case "08": $mesnomecon = "Agosto"; break;
    case "09": $mesnomecon = "Setembro"; break;
    case "10": $mesnomecon = "Outubro"; break;
    case "11": $mesnomecon = "Novembro"; break;
    case "12": $mesnomecon = "Dezembro"; break;
    };
	
	switch ($ativo) {
    case "0": $ativocon = "<div class='divinativo'>Comunicado: Inativo  <input type='image' name='inativo' src='../imagens/accept.png' value='".$idcon."' /></div>"; break;
    case "1": $ativocon = "<div class='divativo'>Cominicado: Ativo <input type='image' name='Ativo' src='../imagens/cancel.png' value='".$idcon."' /></div></div>"; break;
    };
	
	$dataformatcon = "Dia ".$diacon. " de ".$mesnomecon. " de " .$anocon ;
	
		$horaexpcon = explode(":",$datahoracon);
	
	$horacon = $horaexpcon[0];
	$minutocon = $horaexpcon[1];
	$segundocon = $horaexpcon[2];
	
	$horaformatcon = " as ".$horacon.":".$minutocon. ":" .$segundocon ;
	
$sqlfunccon = "SELECT nome FROM funcionario where id_funcionario = "
.$id_funcionariocon;
$resultfunccon = mysql_query($sqlfunccon, $con);

	while ($rowfunccon = mysql_fetch_array ($resultfunccon)){

$nomefunccon = $rowfunccon["nome"];

	
?>
        </div></td>
      </tr>
    </table>
    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
    <td width="32%" bgcolor="#CCCCCC" class="textomenorpreto"><div class="solicitacao">
      Eviado Por: <span class="aviso"><?php echo $nomefunccon;  ?></span></div></td>
    <td width="20%" bgcolor="#CCCCCC" class="texto"><a href="ativar_comunicado.php?id=<?php echo $idcon ?>"><?php echo $ativocon;  ?></a></td>
    <td width="37%" bgcolor="#CCCCCC" class="textomenorpreto"><div class="solicitacao"><?php echo $dataformatcon ?><?php echo $horaformatcon ?></div></td>
    <td width="6%" bgcolor="#CCCCCC" class="textomenorpreto"><div class="solicitacao"><a href="javascript:MM_openBrWindow('editar_comunicado.php?id=<?php echo $idcon ?>','edit','width=835,height=260')"><img src="../imagens/edit.png" width="20" height="20" /></a></td>
    <td width="5%" bgcolor="#CCCCCC" class="textomenorpreto"><div class="solicitacao"><a href="javascript:excluir('<?php echo $idcon ?>')"><img src="../imagens/delete.png" width="20" height="20" /></a></td>
      </tr>
  <tr>
    <td colspan="5" bgcolor="#EEEEEE" class="texto"><?php echo $comunicadocon. "<br>" ?><br ></td>
   </tr><?php } 
	  }?> 
</table></div>
</p>
<p>&nbsp;</p>
<div class="clear">
  <p><div align="center" class="aviso">
        <?php
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
        ?>
      </div></p>
</div>
<div class="clear"></div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>