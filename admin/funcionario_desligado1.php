
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
                if(confirm('Deseja realmente excluir esse Funcionário?')){
                    //redirecionar para o excluir
                    location.href="exc_desligado.php?id="+id;
                }
            }

        </script>
 
 <script type="text/javascript">

            function desligar(id){
                if(confirm('Deseja realmente voltar esse Funcionário?')){
                    //redirecionar para o excluir
                    location.href="voltar_funcionario.php?id="+id;
                }
            }

        </script>
</head>
<?php 
include_once '../validar.php';
//include_once '../validar_admin.php';
include_once '../validar_rh.php';
?>



<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA</td>
      <td width="37%" bgcolor="#FF0000"><div align="center"><span class="textomenor">
        <?php 
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
			
        ?>
      </span></div></td>
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
      <td colspan="4" bgcolor="#0099CC"></td>
    </tr>
  </table>
</div>


<p><span class="aviso">
  </span><?php
		include_once '../fontes/conexao.php';
	$mesatual = date("m");
	$diaatual = date("d");


    switch ($mesatual) {
    case "01": $mesnome = "Janeiro"; break;
    case "02": $mesnome = "Fevereiro"; break;
    case "03": $mesnome = "Março"; break;
    case "04": $mesnome = "Abril"; break;
    case "05": $mesnome = "Maio"; break;
    case "06": $mesnome = "Junho"; break;
    case "07": $mesnome = "Julho"; break;
    case "08": $mesnome = "Agosto"; break;
    case "09": $mesnome = "Setembro"; break;
    case "10": $mesnome = "Outubro"; break;
    case "11": $mesnome = "Novembro"; break;
    case "12": $mesnome = "Dezembro"; break;
    };?>	
 </p>
 <table width="100%" border="0">
  <tr>
    <td class="titulo-topo" bgcolor="#0099CC"><div align="center">Lista Funcionarios</div></td>
  </tr>
</table>

<?php
$sql = "select * from funcionario where desligado = 1 ORDER BY nome ";
$result = mysql_query($sql, $con);
$num_rows = mysql_num_rows($result);
while ($row = mysql_fetch_array ($result)){

$datanasc = $row["data_nasc"];
$nome = $row["nome"];
$email = $row["email"];
$foto = $row["foto"];
$matricula = $row["matricula"];
$setor = $row["id_setor"];
$celular = $row["celular"];
$ramal = $row["ramal"];

	$divnome = explode(" ",$nome);


	$data = explode("-",$datanasc);
	
	$ano = $data[0];
	$mes = $data[1];
	$dia = $data[2];
	





?>
<table width="95%" height="201" border="0" cellpadding="2" cellspacing="2">
  <tr>
       <td bgcolor="#CCCCCC"><div class="solicitacao"><a href="javascript:desligar('<?php echo $row["id_funcionario"] ?>')"><img src="../imagens/voltar.png" width="20" height="20" align="absmiddle" /> <span class="textomenorpreto">Voltar Funcionário</span></td>
    <td colspan="2" bgcolor="#CCCCCC"><div class="solicitacao">
      <div align="center" class="textomenorpreto"><?php echo $nome ?></div>
      </div>      <div class="solicitacao"></td>
    <td width="32" bgcolor="#CCCCCC"><a href="javascript:excluir('<?php echo $row["id_funcionario"] ?>')" onmouseover="tooltip.show('Desligar <?php echo $row["nome"] ?> da Empresa');" onmouseout="tooltip.hide();" ><img src="../imagens/off.png" width="20" height="20" /></a></td>
  </tr>
  <tr>
    <td width="166" rowspan="7"><div class="solicitacao">
      <?php 
		if(empty($foto)){
		echo "<img src='../imagens/nophoto.jpg' width='300' height='250' alt='perfil' />";
		
		}else{
			echo "<img src='../fotos/".$foto."' width='300' height='250' alt='Foto de exibição' />";
		}
		
		?>
    </div></td>
    <td width="237" bgcolor="#EEEEEE" class="texto"><div class="solicitacao">Nome: </div></td>
    <td width="377" bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><?php echo $nome ?></div></td>
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
		}
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
    <td bgcolor="#EEEEEE" class="texto"><div class="solicitacao"><a href="mailto:<?php echo $email ?>"><?php echo $celular ?></a></div></td>
  </tr>
  <?php
	  
	  }


 ?>
</table>
<div class="clear"><p>&nbsp;</p></div></div>
</p><span class="aviso">Intranet RBNA (Acesso Interno)</span>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>