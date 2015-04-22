
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>


<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->

</script>


<script type="text/javascript">

function habilitaText(obj,id) {
if(obj.checked == true){
document.getElementById(id).disabled = true; 



}else{
document.getElementById(id).disabled = false;
}
}

</script>






        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../js/maskedinput-1.1.2.pack.js"></script>
        
        <script type="text/javascript">
            //executar uma função quando a pagina for carregada
            $(document).ready(function(){
                $("#form").validate();
                $("#registro").mask("RB999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999");
                
            }//chave
        )//parentese

        </script>

<script type="text/javascript" src="../js/cidades-estados-v0.2.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                new dgCidadesEstados(
                    document.getElementById('estado'),
                    document.getElementById('cidade'),
                    true
                );
            }
        </script>

<link href="../../fontes/style.css" rel="stylesheet" type="text/css" />
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
<link href="../../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once '../../validar.php';
include_once '../../validar_dvin.php';
?>



<body background="../../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA</td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title">Cadastro de Cliente</div></td>
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

    



<p>&nbsp;</p>
<form action="gravar_endereco.php" method="post" enctype="multipart/form-data" name="cadastro" id="form" ><table width="90%" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="2" bgcolor="#666666"><a href="cad_matriz.php"><div class="solicitacao">
      <div align="center" class="title">Dados Gerais</div>
    </div></a></td>
    <td colspan="3" bgcolor="#003466"><a href="#"><div class="solicitacao">
      <div align="center" class="title">Endereço</div>
    </div></a></td>
    <td width="27%" bgcolor="#666666"><a href="cad_responsavel.php"><div class="solicitacao">
      <div align="center" class="title">Responsável</div>
    </div></a></td>
    </tr>
  <tr>
    <td colspan="6" bgcolor="#C9C9C9" class="textomenorpretoB">Endereço de Correspondencia</td>
    </tr>
  <tr>
    <td width="10%" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Logradouro:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <select name="logradouro1" id="select">
          <option value="Av.">Avenida</option>
          <option value="Est.">Estrada</option>
          <option value="Pça.">Praça</option>
          <option value="Pr.">Praia</option>
          <option value="Qd.">Quadra</option>
          <option value="Rod.">Rodovia</option>
          <option value="R.">Rua</option>
          <option value="Tv.">Travessa</option>
          <option value="Vd.">Viaduto</option>
          <option value="Vl.">Vila</option>
          </select>
        <input name="logradouro2" type="text" id="razao" size="30" class="required" />
        </div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">CEP:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco3"></label>
      </span>
      <input name="cep" type="text" class="required" id="cep" size="25" placeholder="CEP" />
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Numero:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome"></label>
      <label for=""></label>
      <input name="numero" type="text" class="required" id="numero" size="25" />
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Complemento:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome2"></label>
      <label for="label"></label>
      <input name="complemento" type="text" id="complemento" size="25" />
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Bairro:</div>
    </div></td>
    <td width="38%" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input type="text" name="bairro" id="textfield2" class="required" />
        </div>
    </div></td>
    <td width="6%" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Estado:</div>
    </div></td>
    <td width="10%" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco4"></label>
      </span>
      <input name="estado" type="text" class="required" id="textfield7" size="5" />
    </div></td>
    <td width="9%" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB"> 
        <div align="right">Cidade:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco"></label>
    </span> 
        <input name="cidade" type="text" class="required" id="textfield4" size="25" />
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">País:</div>
    </div></td>
    <td colspan="5" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input type="text" name="pais" id="pais" class="required" />
        
        </div>
    </div></td>
    </tr>
  <tr>
    <td colspan="6" bgcolor="#E9E9E9">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="6" bgcolor="#C9C9C9" class="textomenorpretoB">Endereço de Cobrança</td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#E9E9E9"><input type="checkbox" value="1" name="checkbox" id="checkbox" onClick="habilitaText(this,'logradouro1-2');
    																								habilitaText(this,'logradouro2-2');
                                                                                                    habilitaText(this,'cep-2');
                                                                                                    habilitaText(this,'numero-2');
                                                                                                    habilitaText(this,'complemento-2');
                                                                                                    habilitaText(this,'bairro-2');
                                                                                                    habilitaText(this,'estado-2');
                                                                                                    habilitaText(this,'cidade-2');
                                                                                                    habilitaText(this,'pais-2');                                                                                                  
                                                                                                    "; />
      <label for="checkbox" class="textomenorpreto">Repetir Endereço</label></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Logradouro:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <select name="logradouro1-2" id="logradouro1-2">
          <option value="Av.">Avenida</option>
          <option value="Est.">Estrada</option>
          <option value="Pça.">Praça</option>
          <option value="Pr.">Praia</option>
          <option value="Qd.">Quadra</option>
          <option value="Rod.">Rodovia</option>
          <option value="R.">Rua</option>
          <option value="Tv.">Travessa</option>
          <option value="Vd.">Viaduto</option>
          <option value="Vl.">Vila</option>
        </select>
        <input name="logradouro2-2" type="text" id="logradouro2-2" size="30" class="required" />
      </div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">CEP:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco10"></label>
      </span>
      <input name="cep-2" type="text" class="required" id="cep-2" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Numero:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome5"></label>
      <label for="label"></label>
      <input name="numero-2" type="text" class="required" id="numero-2" size="25" />
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Complemento:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome6"></label>
      <label for="label"></label>
      <input name="complemento-2" type="text" id="complemento-2" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Bairro:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input type="text" name="bairro-2" id="bairro-2" class="required" />
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Estado:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco8"></label>
      </span>
      <input name="estado-2" type="text" class="required" id="estado-2" size="5" />
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Cidade:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco9"></label>
      </span>
      <input name="cidade-2" type="text" class="required" id="cidade-2" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">País:</div>
    </div></td>
    <td colspan="5" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input type="text" name="pais-2" id="pais-2" class="required" />
      </div>
    </div></td>
  </tr>
  <tr>
    <td colspan="6" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="site"></label>
      <div align="center" class="aviso">
        <div align="right">
          <input name="cadastrar" type="submit" id="cadastrar" value="Próximo" />
        </div>
      </div>
    </div><div align="center" class="aviso"></div></td>
    </tr>
</table>
</form>

<div class="clear">
    <p>&nbsp;</p>
  </div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>