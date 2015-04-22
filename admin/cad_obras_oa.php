
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>


<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/maskedinput-1.1.2.pack.js"></script>
        
        <script type="text/javascript">
            //executar uma função quando a pagina for carregada
            $(document).ready(function(){
                $("#form").validate();
                $("#registro").mask("OA999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999");
                
            }//chave
        )//parentese

        </script>

<script type="text/javascript" src="js/cidades-estados-v0.2.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                new dgCidadesEstados(
                    document.getElementById('estado'),
                    document.getElementById('cidade'),
                    true
                );
            }
        </script>

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



<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA</td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title">Cadastro de Obras OA</div></td>
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
      </div>
        <div align="center"></div></td>
</tr>
    <tr>
      <td colspan="4" bgcolor="#0099CC"></td>
    </tr>
  </table>
</div>

    



<p>&nbsp;</p>
<form action="gravar_obras_oa.php" method="post" enctype="multipart/form-data" name="cadastro" id="form" ><table width="90%" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="5" bgcolor="#666666"><div class="solicitacao">
      <div align="center" class="title">Cadastro de Obras OA</div>
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">EMBARCAÇÃO:</div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="embarcacao" type="text" id="embarcacao" size="100" class="required" />
        </div>
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">REGISTRO RBNA:</div>
    </div></td>
    <td width="17%" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome"></label>
      <label for=""></label>
      <input name="registro" type="text" class="required" id="registro" />
    </div></td>
    <td width="28%" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Nº CASCO:</div>
    </div></td>
    <td width="33%" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome3"></label>
      <label for=""></label>
      <input type="text" name="numerocasco" id="textfield" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpreto"><span class="textomenorpretoB">CONTRATANTE:</span></div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input type="text" name="contratante" id="textfield2" class="required" />
        </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">ARMADOR:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco"></label>
    </span> 
        <input type="text" name="armador" id="textfield4" class="required" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">ESCRITÓRIO REGIONAL:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <label for="regiao"></label>
        <select name="regiao" id="regiao"  class="required">
          <option selected="selected" value="">Selecionar</option>
          <option value="Rio de Janeiro">Rio de Janeiro</option>
          <option value="Manaus">Manaus</option>
          <option value="Belem">Belem</option>
          </select>
        </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">TIPO EMBARCAÇÃO:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="embarcacao"></label>
    </span>
        <label for="tipoembarcacao"></label>
        <select name="tipoembarcacao" id="tipoembarcacao" class="required">
          <option value="" selected="selected">Selecionar</option>
          <option value="Atividade Especial">Atividade Especial</option>
         <option value="Balsa">Balsa</option>
          <option value="Barcaça">Barcaça</option>
          <option value="Cábrea">Cábrea</option>
          <option value="Carga Geral">Carga Geral</option>
          <option value="Chata">Chata</option>
          <option value="Dique Flutuante">Dique Flutuante</option>
          <option value="Draga">Draga</option>
          <option value="Empurrador">Empurrador</option>
          <option value="Escuna">Escuna</option>
          <option value="Ferry Boat">Ferry Boat</option>
          <option value="Flutuante">Flutuante</option>
          <option value="FPSO">FPSO</option>
          <option value="Gaseiro">Gaseiro</option>
          <option value="Graneleiro">Graneleiro</option>
          <option value="Lancha">Lancha</option>
          <option value="Passageiro">Passageiro</option>
          <option value="Pesqueiro">Pesquisa</option>
          <option value="Pesquisa">Pesquisa</option>
          <option value="Petroleiro">Petroleiro</option>
          <option value="Plataforma Auto-Elevável">Plataforma Auto-Elevável</option>
          <option value="Plataforma Fixa">Plataforma Fixa</option>
          <option value="Porta Contentor">Porta Contentor</option>
          <option value="Químico">Químico</option>
          <option value="Rebocador">Rebocador</option>
          <option value="Ro-Ro">Ro-Ro</option>
          <option value="Saveiro">Saveiro</option>
        </select>
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpreto"><span class="textomenorpretoB">REGIME DEPAGAMENTO:</span></div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="ramal"></label>
      <label for="foto"></label>
      <span class="texto">
        <select name="pagamento" id="pagamento">
          <option value="" selected="selected">Selecionar</option>
          <option value="Evento">Evento</option>
          <option value="Manutenção">Manutenção</option>
          </select>
      </span></div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">AREA DE NAVEGAÇÃO:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <input type="text" name="areanavegacao" id="textfield8" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto"><span class="textomenorpreto">Anexar PDF:</span></div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="pdf"></label>
      <input type="file" name="pdf" id="pdf" />
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">BANDEIRA:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <input type="text" name="bandeira" id="textfield5" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto"><span class="textomenorpretoB">AB:</span></div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <input type="text" name="ab" id="textfield6" />
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">KW:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <input type="text" name="kw" id="textfield7" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">INFORMAÇÕES ADCIONAIS</div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><label for="obs"></label>
      <div class="solicitacao">
        <table width="100%" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td width="4%" bgcolor="#999999"><input type="checkbox" name="forarbna" id="forarbna" value="1" />
              <label for="forarbna"></label></td>
            <td width="23%" bgcolor="#EAEAEA"><span class="textomenorpreto">Embarcação que não está no RBNA</span></td>
            <td width="4%" bgcolor="#000000"><input type="checkbox" name="certrbna" id="certrbna" value="1" />
              <label for="certrbna"></label></td>
            <td width="22%" bgcolor="#EAEAEA" class="textomenorpreto">Embarcação certificada pelo RBNA</td>
            <td width="4%" bgcolor="#FF0000"><input type="checkbox" name="inadimplentes" id="inadimplentes" value="1" />
              <label for="inadimplentes"></label></td>
            <td width="21%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
            <td width="4%" bgcolor="#FF00FF"><input type="checkbox" name="insatisfeitos" id="insatisfeitos" value="1" />
              <label for="insatisfeitos"></label></td>
            <td width="18%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
          </tr>
          </table>
      </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">OBS:</div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><span class="solicitacao">
      <textarea name="obs" id="obs" cols="80" rows="5"></textarea>
    </span></td>
  </tr>
  <tr>
    <td width="9%" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="contratante"></label>
      <input type="submit" name="cadastrar" value="Cadastrar" />
    </div></td>
    <td width="13%" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="ab"></label>
      <input type="reset" name="button" id="button" value="Cancelar" />
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="bandeira"></label>
    <div align="center" class="aviso">
        <?php
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
        ?>
      </div></div><div align="center" class="aviso"></div></td>
    </tr>
</table>
</form>

<div class="clear">
    <p>&nbsp;</p>
  </div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>