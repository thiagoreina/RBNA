
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
         <script type="text/javascript" src="dojo/dojo.js"></script>
        <script type="text/javascript" src="dojo/utils.js"></script>
        
        <script type="text/javascript">
            //executar uma função quando a pagina for carregada
            $(document).ready(function(){
                $("#form").validate();
                $("#registro").mask("OH999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#site2").mask("http://?",{placeholder:" "});
                $("#telefone1").mask("(99)9999-9999?9");
				$("#telefone2").mask("(99)9999-9999?9");
                
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




<body background="../imagens/bg1.jpg" class="bg">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="36%" bgcolor="#FF0000" class="title">Intranet RBNA</td>
      <td width="37%" bgcolor="#FF0000"><div align="center" class="title"> Cadastro de Obras OH</div></td>
      <td width="19%" bgcolor="#FF0000" class="title"><?php 
include_once '../validar.php';
include_once '../validar_obras.php';
?>
<?php 
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

    



<p><img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" /> <span class="aviso">Campo da Web</span></p>
<form action="gravar_obras_oh.php" method="post" enctype="multipart/form-data" name="cadastro" id="form" >
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="6" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">Cadastro de Obras OH</div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">CONTRATANTE:</span></div>
        </div>
      </div></td>
      <td colspan="4" bgcolor="#F7F7F7"><div class="texto">
        <div class="solicitacao">
          <div align="left">
            <input name="contratante" type="text" class="required" id="textfield2" size="100" />
            </span><img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" /></div>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">REGISTRO RBNA:</span></div>
        </div>
      </div></td>
      <td width="41%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <div align="left">
            <input name="registro" type="text" class="required" id="registro" />
            </span>          <img src="../imagens/web.png" alt="" width="20" height="20" title="Campo Exibido na WEB" align="absmiddle" /></div>
        </div></td>
      <td width="14%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">SERVIÇO:</span></div>
          </div>
      </div></td>
      <td width="14%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div align="left">
          <select name="tipo_oh" class="required" id="tipo_oh" >
            <option value="">Selecionar</option>
            
          Escolha
                
                
          <?php
		  include_once '../fontes/conexao.php';
                                
                $sql = "select * from tipo_oh";

                $result = mysql_query($sql,$con);

                while($row = mysql_fetch_array($result)){
                    ?>
            <option value="<?php echo $row["id"] ?>"/>                      
            <?php echo $row["tipo_oh"] ?>
            
            <?php
                }

                ?>
            </select>
          <span class="aviso"><img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" /></span></div>
        </div></td>
      <td width="20%" bgcolor="#F7F7F7"><div class="solicitacao"><a href="javascript:MM_openBrWindow('cad_tipo_oh.php','edit','scrollbars=yes,width=500,height=400')"><img src="../imagens/add.png" width="20" height="20" alt="Cadastrar Serviço" title="Cadastrar Serviço" /></a></div></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">TELEFONE 1:</span></div>
        </div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <div align="left">
            <input name="telefone1" type="text" class="required" id="telefone1" />
            <img src="../imagens/web.png" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" /></div>
          </div>
      </div></td>
      <td width="14%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">TELEFONE 2:</span></div>
          </div>
      </div></td>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <div align="left">
            <input name="telefone2" type="text"  id="telefone2" />
            <img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" />          </div>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">Local:</span></div>
        </div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <div align="left">
            <input name="local" type="text" class="required" id="local" />
            <img src="../imagens/web.png" alt="" width="20" height="20" title="Campo Exibido na WEB" align="absmiddle" /></div>
        </div>
      </div></td>
      <td width="14%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">QNT. DIAS:</span></div>
        </div>
      </div></td>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <div align="left">
          <input type="text" name="qtddias" id="textfield7" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">EMAIL:</span></div>
        </div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
          <div align="left">
            <input name="email" type="text" id="email" class="email" />
             <img src="../imagens/web.png" alt="Web" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" />
      </div>
          </td>
      <td width="14%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">SITE:</span></div>
          </div>
      </div></td>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        
          <div align="left">
            <input name="site" class="url" type="text"  id="site" />
            <img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" />          
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">LOGO:</span></div>
        </div>
        </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <label for="logo"></label>
          <div align="left">
            <input type="file" name="logo" />
            <img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" />          </div>
        </div>
      </div></td>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">ESCRITÓRIO REGIONAL:</span></div>
          </div>
      </div></td>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <div align="left">
          <select name="regiao" id="regiao"  class="required">
            <option selected="selected" value="">Selecionar</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Manaus">Manaus</option>
            <option value="Belem">Belem</option>
          </select>
          </span></div>
      </div></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">REGIME DEPAGAMENTO:</span></div>
        </div>
        </div></td>
      <td rowspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          
            <div align="left">
              <select name="pagamento" id="pagamento">
                <option value="" selected="selected">Selecionar</option>
                <option value="Evento">Evento</option>
                <option value="Manutenção">Manutenção</option>
              </select>
              
            </div>
        </div></td>
      <td rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">Anexar PDF:</span></div>
        </div>
      </div></td>
      <td colspan="2" rowspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <input type="file" name="pdf" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">INFORMAÇÕES ADCIONAIS</span></div>
        </div>
        </div></td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#EAEAEA"><div class="solicitacao">
        <div align="left">
          <table width="100%" border="0" cellpadding="2" cellspacing="2">
            <tr>
              <td bgcolor="#999999"><input type="checkbox" name="forarbna" id="forarbna" value="1" />
                <label for="forarbna"></label></td>
              <td bgcolor="#EAEAEA"><span class="textomenorpreto">Empresa que não está no RBNA</span></td>
              <td bgcolor="#000000"><input type="checkbox" name="certrbna" id="certrbna" value="1" />
                <label for="certrbna"></label></td>
              <td bgcolor="#EAEAEA" class="textomenorpreto">Empresa certificada pelo RBNA</td>
              <td bgcolor="#FF0000"><input type="checkbox" name="inadimplentes" id="inadimplentes" value="1" />
                <label for="inadimplentes"></label></td>
              <td bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
              <td bgcolor="#FF00FF"><input type="checkbox" name="insatisfeitos" id="insatisfeitos" value="1" />
                <label for="insatisfeitos"></label></td>
              <td bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
              </tr>
          </table>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"></td>
      <td colspan="4" bgcolor="#F7F7F7"></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">
          <div align="left"><span class="textomenorpreto">OBS:</span></div>
        </div>
      </div></td>
      <td colspan="4" bgcolor="#F7F7F7"><div class="texto">
        <div align="left"><span class="solicitacao">
          <textarea name="obs" id="obs" cols="80" rows="5"></textarea>
        </span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao"><div class="textomenorpreto"><span class="textomenorpretoB">JÁ ESTÁ HOMOLOGADA?:</span></div></div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao"><div class="textomenorpreto">&nbsp;
        <input type="radio" name="homologada" id="radio" value="1" />
        Sim
        <input name="homologada" type="radio" id="radio" value="0" checked="checked" />
        <label for="homologada"></label>
        
      Não <img src="../imagens/web.png" alt="" width="20" height="20" align="absmiddle" title="Campo Exibido na WEB" /></div></div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">Se sim, será exibido na web</span></div></td>
      </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <input type="submit" name="Cadastrar" id="Cadastrar" value="Cadastrar" />
      </div></td>
      <td colspan="4" bgcolor="#F7F7F7"><div class="solicitacao">
        <label for="bandeira"></label>
        <div align="center" class="aviso">
          <?php
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
        ?>
        </div>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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