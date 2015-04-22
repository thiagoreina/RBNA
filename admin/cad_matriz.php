
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
<script type="text/javascript">

function habilitaText(obj,id) {
if(obj.checked == true){
document.getElementById(id).disabled = true; 



}else{
document.getElementById(id).disabled = false;
}
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
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once '../validar.php';
include_once '../validar_dvin.php';
?>



<body background="../imagens/bg1.jpg" class="bg">
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
          <li><a href="intranet.php">Pagina do Usu&aacute;rio</a></li>
        </ul>
      </div>
        <div align="center"></div></td>
</tr>
    <tr>
      <td colspan="4" bgcolor="#0099CC"></td>
    </tr>
  </table>
</div>

    



<p><div align="center"><span class="textomenorpretoB" style="text-align:center"> <?php
            if(isset ($_GET["msg"])){
                echo  $_GET["msg"];
            }
        ?>
      </span></div></p>
<form action="gravar_matriz.php" method="post" enctype="multipart/form-data" name="Form" id="form" ><table width="90%" border="0" cellpadding="2" cellspacing="2">
  <tr>
    <td colspan="5" bgcolor="#003466"><a href="#"><div class="solicitacao">
      <div align="center" class="title">Cadastro de Cliente (Matriz)</div>
    </div></a></td>
    </tr>
  <tr>
    <td width="130" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Razão Social:</div>
    </div></td>
    <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="razao" type="text" id="razao" size="100" class="required"  placeholder="*" />
        </div>
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Nome Fantasia:</div>
    </div></td>
    <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="respnome"></label>
      <label for=""></label>
      <input name="fantasia" type="text" class="required" id="fantasia" size="100" />
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">CNPJ:</div>
    </div></td>
    <td width="217" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="cnpj" type="text" id="textfield2" size="25" />
        </div>
    </div></td>
    <td width="137" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">CPF:</div>
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco"></label>
    </span> 
        <input name="cpf" type="text" id="textfield4" size="25" />
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Inscrição Municipal:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="inscmunicipal" type="text" id="inscmunicipal" size="25" />
        
        </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Inscrição Estadual:</div>
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="razao"></label>
    </span>
        
        <span class="texto">
        <input name="inscestadual" type="text" id="textfield3" size="25" />
        </span></div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Telefone:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="ramal"></label>
      <label for="foto"></label>
      <span class="texto">
      <input name="telefone" type="text" class="required" id="textfield6" size="25" />
      </span></div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Fax:</div>
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <input name="fax" type="text" id="textfield8" size="25" />
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Email:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="cpf"></label>
      <input name="email" type="text" class="email" id="email" size="25" />
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Site:</div>
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <input name="site" type="text" id="textfield5" size="25" />
    </div></td>
    </tr>
  <tr>
    <td colspan="5" bgcolor="#CCCCCC" class="textomenorpretoB" style="background-image:url(../imagens/bglegenda.png); background-repeat:repeat-x"><div align="center">Endereço de Correspondencia</div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Logradouro:</div>
    </div></td>
    <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
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
        <input name="logradouro2" type="text" id="razao3" size="85" class="required"  />
        </div>
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="left">CEP:</div>
        </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome10"></label>
      <label for="label"></label>
      <input name="cep" type="text" id="cep" size="25" />
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Numero:</div>
      </div>
    </div></td>
    <td width="342" bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome11"></label>
      <label for="label"></label>
      <input name="numero" type="text" id="numero" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Complemento:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="complemento" type="text" id="textfield9" size="25" />
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Bairro:</div>
        </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco4"></label>
      </span>
      <input name="bairro" type="text" class="required" id="textfield11" size="25"  />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Estado:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="estado" type="text" class="required" id="estado" size="25"  />
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Cidade:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco8"></label>
      </span>
      <input name="cidade" type="text" class="required" id="textfield" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">País:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="pais" type="text" class="required" id="pais" size="25"  />
      </div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9">&nbsp;</td>
    </tr>
  
  <tr>
    <td colspan="5" bgcolor="#C9C9C9" class="textomenorpretoB" style="background-image:url(../imagens/bglegenda.png); background-repeat:repeat-x"><div align="center">Endereço de Cobrança</div></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#E9E9E9"><div align="left">
      <input type="checkbox" value="1" name="checkbox" id="checkbox" onClick="habilitaText(this,'cobrlogradouro2');
    																								habilitaText(this,'cobrlogradouro1');
                                                                                                    habilitaText(this,'cobrcep');
                                                                                                    habilitaText(this,'cobrnumero');
                                                                                                    habilitaText(this,'cobrcomplemento');
                                                                                                    habilitaText(this,'cobrbairro');
                                                                                                    habilitaText(this,'cobrestado');
                                                                                                    habilitaText(this,'cobrcidade');
                                                                                                    habilitaText(this,'cobrpais');                                                                                                  
                                                                                                    "; />
    
      <label for="checkbox" class="textomenorpretoB">
        Repetir Endereço
      </label></div>
      </td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Logradouro:</div>
    </div></td>
    <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <select name="cobrlogradouro" id="cobrlogradouro1">
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
        <input name="cobrlogradouro2" type="text" id="cobrlogradouro2" size="85" class="required"  />
      </div>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="left">CEP:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome15"></label>
      <label for="label"></label>
      <input name="cobrcep" type="text"  id="cobrcep" size="25" />
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Numero:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <label for="nome16"></label>
      <label for="label"></label>
      <input name="cobrnumero" type="text" id="cobrnumero" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Complemento:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="cobrcomplemento" type="text" id="cobrcomplemento" size="25" />
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Bairro::</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco10"></label>
      </span>
      <input name="cobrbairro" type="text" class="required" id="cobrbairro" size="25"  />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Estado:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="cobrestado" type="text" class="required" id="cobrestado" size="25"  />
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Cidade:</div>
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco9"></label>
      </span>
      <input name="cobrcidade" type="text" class="required" id="cobrcidade" size="25"  />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">País:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="cobrpais" type="text" class="required" id="cobrpais" size="25"  />
      </div>
    </div></td>
    <td colspan="3" bgcolor="#E9E9E9">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#C9C9C9" style="background-image:url(../imagens/bglegenda.png); background-repeat:repeat-x"><div align="center"><span class="textomenorpretoB">Responsável</span></div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Nome:</div>
    </div></td>
    <td colspan="4" bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="respnome" type="text" id="respnome" size="100" />
      </div>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Email:</div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
      <span class="aviso"> <label for="nome12"></label>
      <label for="label"></label>
      <input name="respemail" type="text" class="email" id="respemail" size="35"  />
     </span></div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao" align="left">
      <div class="textomenorpretoB">
        <input name="gerarsenha" value="1" type="checkbox" id="gerarsenha"  />
        <label for="gerarsenha"> Gerar Senha </label>
        </div>
    </div></td>
    </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">CPF:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="respcpf" type="text" id="respcpf" size="25" />
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Cargo:</div>
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco6"></label>
      </span>
      <input name="respcargo" type="text" id="respcargo" size="25" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">Telefone:</div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="texto">
        <input name="resptelefone" type="text" id="resptelefone" size="25" />
      </div>
    </div></td>
    <td bgcolor="#E9E9E9"><div class="solicitacao">
      <div class="textomenorpretoB">
        <div align="right">Celular:</div>
      </div>
    </div></td>
    <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
      <label for="respnome"></label>
      </span> <span class="texto">
        <input name="respcelular" type="text" id="respcelular" size="25" />
      </span></div></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#E9E9E9"><div class="solicitacao">
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
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>