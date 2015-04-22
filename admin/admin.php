
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
      </div>
        <div align="center"></div></td>
</tr>
    <tr>
      <td colspan="5" bgcolor="#0099CC"></td>
    </tr>
  </table>
</div>

    



<p>&nbsp;</p>
<div class="clear">
    <p><img src="../imagens/ControlPanel.png" width="128" height="128"  alt=""/></p>
    <p class="aviso">Página do Administrador    </p>
    <p>
      <?php
	 include_once '../fontes/conexao.php';
$sql = "select * from funcionario where id_funcionario = ".$_SESSION["idfunc"];
$result = mysql_query($sql, $con);
$row = mysql_fetch_array ($result);

$datanasc = $row["data_nasc"];
$nome = $row["nome"];
$email = $row["email"];
$foto = $row["foto"];
$matricula = $row["matricula"];
$setor = $row["id_setor"];
$celular = $row["celular"];
$ramal = $row["ramal"];
$ficha = $row["ficha"];

$gerente = $_SESSION["gerente"];

$setor_gerente = $_SESSION["id_setor"]; 
	$divnome = explode(" ",$nome);


	$data = explode("-",$datanasc);
	
	$ano = $data[0];
	$mes = $data[1];
	$dia = $data[2];
	





?>
    </p>
    <table width="95%" height="201" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td colspan="3" bgcolor="#CCCCCC"><div class="solicitacao">
          <div align="center" class="texto"><?php echo $nome ?></div>
        </div></td>
      </tr>
      <tr>
        <td width="307" rowspan="8"><div class="foto">
          <?php 
		if(empty($foto)){
		echo "<img src='../imagens/nophoto.jpg' width='300' height='250' alt='perfil' />";
		
		}else{
			echo "<img src='../fotos/".$foto."' width='300' height='250' alt='Foto de exibição' />";
		}
		
		?>
        </div></td>
        <td width="173" bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Nome: </div></td>
        <td width="450" bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $nome ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Matricula: </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $matricula ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Setor: </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">
          <?php 
		$sqlsetor = "select * from setor where id = ".$setor;
		$resultsetor = mysql_query($sqlsetor, $con);
		while ($rowsetor = mysql_fetch_array ($resultsetor)){
		echo $rowsetor["setor"];		
		
		 ?>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Ramal: </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $ramal ?></div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Aniversario:</div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"> dia
          <?php 
		
			echo $dia."/".$mes;

			?>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">
          <div class="texto">Email:</div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a> </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao">
          <div class="texto">Celular:</div>
        </div></td>
        <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><a href="mailto:<?php echo $email ?>"><?php echo $celular ?></a>&nbsp; </div></td>
      </tr>
      <tr>
        <td bgcolor="#EEEEEE" class="texto">&nbsp;</td>
        <td bgcolor="#EEEEEE" class="texto"><?php
		//se for admin Mostra todas as fichas
		if ($_SESSION["perfil"] == 1){
			echo "<a href='..//intranet/funcionario/ficha/".$ficha."' style='color:blue' target='_blank'><img src='../imagens/pdf.png' width='20' height='20' align='absmiddle' />Ficha do Funcionário</a>";
		
		}
		//Se nao for admin e for gerente, mostra a ficha de todos os funcionarios do setor
		else if ($gerente == 1 && $rowsetor["id"] == $setor_gerente){
			echo "<a href='../intranet/funcionario/ficha/".$ficha.".pdf' style='color:blue' target='_blank'><img src='../imagens/pdf.png' width='20' height='20' align='absmiddle' />Ficha do Funcionário</a>";
		
		}
		}
		 ?></td>
      </tr>
   
    </table>
    <p>&nbsp;</p>
  </div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>