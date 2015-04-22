
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
<link href="../../jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css" />
<link href="../../jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css" />
<link href="../../jQueryAssets/jquery.ui.accordion.min.css" rel="stylesheet" type="text/css" />



<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

  function excluir(id, idCliente){
                if(confirm('Deseja realmente excluir O responsável desta Matriz ?')){
                    //redirecionar para o excluir
                    location.href="exc_resp_matriz.php?id="+id+"&idCliente="+idCliente;
                }
            }

function excluirFilial(id, idCliente){
                if(confirm('Deseja realmente excluir Esta Filial ?')){
                    //redirecionar para o excluir
                    location.href="exc_filial.php?id="+id+"&idCliente="+idCliente;
                }
            }
        

//-->
</script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="../../jQueryAssets/jquery-ui-1.9.2.accordion.custom.min.js" type="text/javascript"></script>
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

  <?php 
  include_once '../fontes/conexao.php';
  include("../fontes/anti_injection.php");



$idCliente = anti_injection($_GET['id']);
  //GABIARRAAAA!
$aspas = "'";

  $sqlMatriz =  "select * from matriz where idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlMatriz, $con));
  $rowMatriz = mysql_fetch_array($result);	   
  
  
  if (mysql_num_rows($result) > 0) {
  
  
  ?>  



<p><span class="textomenorpretoB">
  <?php
           
			
			if(isset ($_GET["msg"])){
				 $msg = base64_decode($_GET["msg"]);
                echo "
				
				<div class='info'><div align='center' class='aviso'><img src='../imagens/Info.png' width='25' height='25' align='absmiddle'/> ". $msg."  <img src='../imagens/Info.png' width='25' height='25' align='absmiddle'/></div></div>";
            }
        ?>
</span></p>
<div class="clear">
<div class="meio">
  <table width="100%" border="0">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC" class="texto"><div align="center">Dados da Matriz</div></td>
      </tr>
    <tr>
      <td width="230" class="textomenorpretoB"><div class="solicitacao">Razão:</div></td>
      <td width="281" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["razao"] ?></div></td>
      <td width="93" class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
      <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["telefone"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Fantasia:</div></td>
      <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["fantasia"] ?></div></td>
      <td class="textomenorpretoB"><div class="solicitacao">Fax:</div></td>
      <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["fax"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao"><?php
	   if ($rowMatriz["cnpj"]!=0){
	   echo "CNPJ: ";
	   $pjpf = $rowMatriz["cnpj"];
	   
	   }
	   elseif ($rowMatriz["cpf"] !=0){
	   echo "CPF: ";
	   $pjpf = $rowMatriz["cpf"];
	   
	   }else {
		  echo "CNPJ/CPF"; 
		  $pjpf = "";
	   }
	    ?></div></td>
      <td class="textomenorpreto"><div class="solicitacao"><?php echo $pjpf ?></div></td>
      <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
      <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["email"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Inscrição Municipal:</div></td>
      <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["inscricaoMunicipal"] ?></div></td>
      <td class="textomenorpretoB"><div class="solicitacao">Site:</div></td>
      <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo "<a href='http://".$rowMatriz["site"]."' target='_blank'>".$rowMatriz["site"]."</a>" ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Inscrição Estadual:</div></td>
      <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowMatriz["inscricaoEstadual"] ?></div></td>
      <td colspan="2" class="textomenorpreto"><div class="solicitacao">
        <?php if ($rowMatriz["inadimplente"]== 0){
		 $inadimplente = "Cliente Adimplente<img src='../imagens/legenda/unred.png' width='20' height='20'  alt='Cliente Adimplente' title='Cliente Adimplente' align='absmiddle'/>"; 
	  }
	  if ($rowMatriz["inadimplente"]== 1){
		 $inadimplente = "Cliente Inadimplente <img src='../imagens/legenda/red.png' width='20' height='20'  alt='Cliente Inadimplente' title='Cliente Inadimplente' align='absmiddle'/>"; 
	  }
	  
	  echo $inadimplente;
	  
	  ?>
      </div></td>
      <td width="169" class="textomenorpreto"><div class="solicitacao">
        <?php if ($rowMatriz["insatisfeito"]== 0){
		 $insatisfeito = "Cliente Satisfeito <img src='../imagens/legenda/unpink.png' width='20' height='20'  alt='Cliente Satisfeito' title='Cliente Satisfeito' align='absmiddle'/>"; 
	  }
	  if ($rowMatriz["insatisfeito"]== 1){
		 $insatisfeito = "Cliente Insatisfeito <img src='../imagens/legenda/pink.png' width='20' height='20'  alt='Cliente Insatisfeito' title='Cliente Insatisfeito' align='absmiddle'/>"; 
	  }
	  
	  echo $insatisfeito; ?>
      </div></td>
      </tr>
    <tr>
      <td colspan="5" class="textomenorB"><a href="javascript:MM_openBrWindow('editar_dados_matriz.php?id=<?php echo $rowMatriz["idMatriz"] ?>','edit','scrollbars=yes,width=850,height=310')"><div class="solicitacao" style="text-align:right"><img src="../imagens/edit.png" width="30" height="30" /></div></a></td>
    </tr>
  </table>
  

    <?php
  $sqlResp =  "select * from responsavel where matriz_idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlResp, $con));
  $rowResp = mysql_fetch_array($result);	   
  
   if (isset ($rowResp["idresponsavel"])){

  ?>

  <table width="100%" border="0">
    <tr>
      <td colspan="4" bgcolor="#CCCCCC" class="texto"><div align="center">Dados do Responsável</div></td>
    </tr>
    <tr>
      <td width="34%" class="textomenorpretoB"><div class="solicitacao">Nome:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["nome"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["email"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">CPF:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["cpf"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Cargo:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["cargo"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["telefone"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Celular:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowResp["celular"] ?></div></td>
    </tr>
    <tr>
      <td class="textomenorpretoB"><div class="solicitacao">Senha:</div></td>
      <td colspan="3" class="textomenorpreto"><div class="solicitacao">
      <form action="gerar_senha_resp.php" method="post"> 
       <?php if(empty ($rowResp["senha"])) { ?>
      
      
       <input type="hidden" name="id" value="<?php echo $rowResp["idresponsavel"] ?>"/>
       <input type="hidden" name="id_cliente" value="<?php echo $idCliente ?>"/>
       <input type="hidden" name="email" value="<?php echo $rowResp["email"] ?>"/>
       <input type="hidden" name="pagina" value="editar_cliente.php"/>
<input type="submit" value="Gerar Senha" name="gerarsenha" /></form><form action="gerar_senha_resp.php" method="post"> 
       <?php }else{
		echo "********";
		 ?>
       <input type="hidden" name="id" value="<?php echo $rowResp["idresponsavel"] ?>"/>
       <input type="hidden" name="id_cliente" value="<?php echo $idCliente ?>"/>
       
       <input type="hidden" name="email" value="<?php echo $rowResp["email"] ?>"/>
       <input type="hidden" name="pagina" value="editar_cliente.php"/>
       <input type="submit" value="Gerar Nova Senha" name="gerarsenha" /></form><?php  
	   }?>
      </div></td>
    </tr>
    <tr>
      <td class="textomenorB"><a href="javascript:MM_openBrWindow('editar_resp_matriz.php?id=<?php  echo $rowResp["idresponsavel"] ?>','edit','scrollbars=yes,width=855,height=230')"></a></td>
      
      
      <td width="52%" class="textomenorpretoB"><?php
            if(isset ($_GET["msgRespMat"])){
                echo "<img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/> ". $_GET["msgRespMat"]." <img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/>";
            }
        ?></td>
      
      
      <td width="7%" class="textomenorB"><div class="solicitacao" style="text-align:center"><a href="javascript:MM_openBrWindow('editar_resp_matriz.php?id=<?php  echo $rowResp["idresponsavel"] ?>','edit','scrollbars=yes,width=855,height=230')"><img src="../imagens/edit.png" width="30" height="30" /></a></div>        <a href="javascript:MM_openBrWindow('editar_resp_matriz.php?id=<?php  echo $rowResp["idresponsavel"] ?>','edit','scrollbars=yes,width=855,height=230')"></a></td>
      
      <td width="7%" class="textomenorB"><a href="javascript:excluir('<?php echo $rowResp["idresponsavel"] ?>','<?php echo $rowMatriz["idMatriz"] ?>')">
        <div class="solicitacao" style="text-align:center"><img src="../imagens/delete.png" width="30" height="30" /></div>
      </a></td>
    </tr>
  </table>

<?php 
   }else{
	   
echo "<div class='solicitacao' style='text-align:center'><img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/><span class='aviso'> Esta Matriz não tem Responsável Cadastrado</span> <img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/>";

echo '
<br><a href="javascript:MM_openBrWindow('.$aspas.'cad_resp_mat.php?id='.$rowMatriz["idMatriz"].$aspas.','.$aspas.'edit'.$aspas.','.$aspas.'scrollbars=yes,width=850,height=230'.$aspas.')"><div align="right"><img src="../imagens/addResp.png" alt="Adicionar Responsável" title="Adicionar Responsável" width="30" height="30" align="absmiddle" /> </div></a>';


            if(isset ($_GET["msgRespMat"])){
                echo "<img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/> ". $_GET["msgRespMat"]." <img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/>";
            }
       

   }
?>

<div class="clear"><br /></div>
   <?php
  
  $sqlendCorresp =  "select * from endereco where tipo_end_idtipo_end = 1 and matriz_idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlendCorresp, $con));
  $rowendCorresp = mysql_fetch_array($result)	   
  
  
  
  ?>

  <div id="Accordion1">
    <?php
  if (isset ($rowendCorresp["idEndereco"])){
	echo ' <h3><a href="#">Endereço de Correspondência</a></h3>
    <div>
      <table width="100%" border="0">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Endereço de Correspondência</div></td>
        </tr>
        <tr>
          <td width="34%" class="textomenorpretoB"><div class="solicitacao">Logradouro:</div></td>
          <td width="66%" class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["logradouro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Numero:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["numero"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CEP:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["cep"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Bairro:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["bairro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Complemento:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["complemento"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Cidade:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["cidade"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Estado:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCorresp["estado"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Pais:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"> '.$rowendCorresp["pais"].'</div></td>
        </tr>
        <tr>
		
		
<br>
		
		
          <td colspan="2" class="textomenorB"><div class="solicitacao" style="text-align:right"><a href="javascript:MM_openBrWindow('.$aspas.'editar_end_corresp.php?id='.$idCliente.$aspas.','.$aspas.'edit'.$aspas.','.$aspas.'scrollbars=yes,width=850,height=260'.$aspas.')"><div align="right"><img src="../imagens/edit.png" alt="Adicionar Responsável" title="Adicionar Responsável" width="30" height="30" align="absmiddle" /> </div></a></div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </div>';

   
 
	}else{
	echo '<h3><a href="#">Endereço de Correspondência</a></h3>
    <div>    <table width="100%" border="0">
      <tr>
        <td><div align="center" class="textomenorpretoB"><img src="../imagens/alert.png" width="20" height="20"  alt="" align="absmiddle"/> Sem Endereço <img src="../imagens/alert.png" width="20" height="20"  alt=""  align="absmiddle"/></div></td>
      </tr>
      <tr>
        <td><a href="javascript:MM_openBrWindow('.$aspas.'cad_end_corresp.php?id='.$rowMatriz["idMatriz"].$aspas.','.$aspas.'edit'.$aspas.','.$aspas.'scrollbars=yes,width=850,height=260'.$aspas.')"><div align="right"><img src="../imagens/addResp.png" alt="Adicionar Responsável" title="Adicionar Responsável" width="30" height="30" align="absmiddle" /> </div></a></td>
      </tr>
    </table></div>';
	}
	?>
    
    
    
    <?php
  
  $sqlendCobra =  "select * from endereco where tipo_end_idtipo_end = 2 and matriz_idMatriz = ".$idCliente;
  
  $result = (mysql_query($sqlendCobra, $con));
  $rowendCobra = mysql_fetch_array($result)	   
  
  
  
  ?>
    
    <?php
  if (isset ($rowendCobra["idEndereco"])){
	echo '<h3><a href="#">Endereço de Cobrança</a></h3>
    <div>
      <table width="100%" border="0">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Endereço de Cobrança</div></td>
        </tr>
        <tr>
          <td width="34%" class="textomenorpretoB"><div class="solicitacao">Logradouro:</div></td>
          <td width="66%" class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["logradouro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Numero:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["numero"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CEP:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["cep"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Bairro:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["bairro"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Complemento:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["complemento"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Cidade:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["cidade"].'</div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Estado:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">'.$rowendCobra["estado"].' </div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Pais:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"> '.$rowendCobra["pais"].'</div></td>
        </tr>
        <tr>
          <td colspan="2" class="textomenorB"><div class="solicitacao" style="text-align:right"><a href="javascript:MM_openBrWindow('.$aspas.'editar_end_cobra.php?id='.$idCliente.$aspas.','.$aspas.'edit'.$aspas.','.$aspas.'scrollbars=yes,width=850,height=260'.$aspas.')"><div align="right"><img src="../imagens/edit.png" alt="Adicionar Responsável" title="Adicionar Responsável" width="30" height="30" align="absmiddle" /> </div></a></div></td>
        </tr>
      </table>

    </div>'
	;
  }else{
  
  echo '<h3><a href="#">Endereço de Cobrança</a></h3>
    <div>    <table width="100%" border="0">
      <tr>
        <td><div align="center" class="textomenorpretoB"><img src="../imagens/alert.png" width="20" height="20"  alt="" align="absmiddle"/> Sem Endereço <img src="../imagens/alert.png" width="20" height="20"  alt=""  align="absmiddle"/></div></td>
      </tr>
      <tr>
        <td><div align="right"><a href="#" class="textomenorB"><img src="../imagens/addResp.png"  alt="Adicionar Endereço" title="Adicionar Endereço" width="30" height="30" align="absmiddle"/></a></div></td>
      </tr>
    </table></div>';
  }
  ?>
  </div>
  
  </div><div class="clear"><br /></div>
  </div>



<div class="clear"> </div>

    <div class="clear"> </div>
    <p class="textomenorpretoB">
      <?php
            if(isset ($_GET["msgFilial"])){
                echo "<img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/> ". $_GET["msgFilial"]." <img src='../imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/>";
            }
        ?></p>
    <div class="meio">
   <div id="Accordion2">
     <?php 
	$i = 1;
	$sqlFilial =  "select * from filial where matriz_idMatriz = ".$idCliente;
  
  $resultFilial = (mysql_query($sqlFilial, $con));
   if (mysql_num_rows($resultFilial) > 0) {
	   
  while ( $rowFilial = mysql_fetch_array($resultFilial)){	
  
  
  $idfilial = $rowFilial["idfilial"];
  $sqlendFilial =  "select * from endereco where filial_idfilial = ".$idfilial;
  
  $resultendFilial = (mysql_query($sqlendFilial, $con));
  $rowendFilial = mysql_fetch_array($resultendFilial);	   
  
  
  $exc = '<a href="javascript:excluirFilial('. $idfilial .','.$idCliente.')">';
?>
      <h3><a href="#">Filial <?php echo $i++ ?></a></h3>
      <div>
        <p align="right">
        <table width="100%" border="0">
        <tr>
          <td colspan="2" bgcolor="#CCCCCC" class="texto"><div align="center">Dados Gerais</div></td>
          <td colspan="3" bgcolor="#CCCCCC" class="texto"><div align="center">Endereço</div></td>
          </tr>
        <tr>
          <td width="180" class="textomenorpretoB"><div class="solicitacao">Nome:</div></td>
          <td width="272" class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["nome"] ?></div></td>
          <td width="152" class="textomenorpretoB"><div class="solicitacao">Logradouro:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["logradouro"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["email"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Numero:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["numero"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">CNPJ/CPF:</div></td>
          <td class="textomenorpreto"><div class="solicitacao">
            <?php
	   if ($rowFilial["cnpj"]!=0){
	   $cnpjcpf = "CNPJ: ".$rowFilial["cnpj"];
	   
	   }
	   elseif ($rowFilial["cpf"] !=0){
	   $cnpjcpf = "CPF: ".$rowFilial["cpf"];
	   
	   }else {
		  $cnpjcpf = ""; 
	   }
	   echo $cnpjcpf  ?>
          </div></td>
          <td class="textomenorpretoB"><div class="solicitacao">CEP:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["cep"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Inscrição Municipal:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["inscricaoMunicipal"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Bairro:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["bairro"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Inscrição Estadual:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["inscricaoEstadual"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Complemento:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["complemento"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["telefone"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Cidade:</div></td>
          <td width="35" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["estado"] ?></div></td>
          <td width="264" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["cidade"] ?></div></td>
        </tr>
        <tr>
          <td class="textomenorpretoB"><div class="solicitacao">Fax:</div></td>
          <td class="textomenorpreto"><div class="solicitacao"><?php echo $rowFilial["fax"] ?></div></td>
          <td class="textomenorpretoB"><div class="solicitacao">Pais:</div></td>
          <td colspan="2" class="textomenorpreto"><div class="solicitacao"><?php echo $rowendFilial["pais"] ?></div></td>
        </tr>
        
       <?php
  $sqlRespFilial =  "select * from responsavel where filial_idfilial = ".$idfilial;
  
  $resultRespFilial = (mysql_query($sqlRespFilial, $con));
  $rowRespFilial = mysql_fetch_array($resultRespFilial);
     
  if (mysql_num_rows($resultRespFilial) > 0) {
  
  $addresp = "<div class='solicitacao' style='height:30px'></div>"; 
  //<table width='100%' border='0'>
  
   	echo "
         <tr>
          <td colspan='2'><a href='#'>
            ".$addresp."
          </a></td>
          <td colspan='2'><a href='javascript:excluirFilial('".$idfilial."','".$idCliente."')>
		  
		  
		  
          
		  
		  
		  
		    <div class='solicitacao' style='text-align:center'><img src='../imagens/edit.png'  alt='Editar Filial' title='Editar Filial' width='30' height='30' align='absmiddle'/> </div>
          </a></td>
          <td colspan='2'>".$exc."
            <div class='solicitacao' style='text-align:center'><img src='../imagens/delete.png'  alt='Excluir Filial' title='Excluir Filial' width='30' height='30' align='absmiddle'/></div>
          </a></td>
        </tr>
      ";
  
  ?></table></p>
     
	  <table width="100%" border="0">
	    <tr>
	      <td colspan="4" bgcolor="#CCCCCC" class="texto"><div align="center">Dados do Responsável</div></td>
	      </tr>
	    <tr>
	      <td width="34%" class="textomenorpretoB"><div class="solicitacao">Nome:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["nome"] ?></div></td>
	      </tr>
	    <tr>
	      <td class="textomenorpretoB"><div class="solicitacao">Email:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["email"] ?></div></td>
	      </tr>
	    <tr>
	      <td class="textomenorpretoB"><div class="solicitacao">CPF:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["cpf"] ?></div></td>
	      </tr>
	    <tr>
	      <td class="textomenorpretoB"><div class="solicitacao">Cargo:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["cargo"] ?></div></td>
	      </tr>
	    <tr>
	      <td class="textomenorpretoB"><div class="solicitacao">Telefone:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["telefone"] ?></div></td>
	      </tr>
	    <tr>
	      <td class="textomenorpretoB"><div class="solicitacao">Celular:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao"><?php echo $rowRespFilial["celular"] ?></div></td>
	      </tr>
	    <tr>
	      <td class="textomenorpretoB"><div class="solicitacao">Senha:</div></td>
	      <td colspan="3" class="textomenorpreto"><div class="solicitacao">
	        <input type="button" value="Gerar Nova Senha"/>
	        </div></td>
	      </tr>
	    <tr>
	      <td colspan="2" class="textomenorB"><div class="solicitacao" style="height:30px">&nbsp;</div></td>
	      <td width="8%" class="textomenorB"><div class="solicitacao" style="text-align:center"><a href="#"><img src="../imagens/edit.png"  alt="" width="30" height="30" align="absmiddle"/></a></div></td>
	      <td width="7%" class="textomenorB"><a href="#">
	        <div class="solicitacao" style="text-align:center"><img src="../imagens/delete.png" width="30" height="30" /></div>
	      </a></td>
	      </tr>
	    </table>
        <?php

  }else if ((mysql_num_rows($resultRespFilial) < 1) && (empty ($rowResp["idresponsavel"]))){
	
	  
$addresp = "<div align='center'><span class='textomenorpretoB'><img src='../imagens/addLogin2.png' width='30' height='30' align='absmiddle'/> Adicionar Responsável</span></div>
	"; 
	echo "
	
		  <table width='100%' border='0'>
        <tr>
          <td colspan='2'><a href='#'>
            <div class='solicitacao' style='text-align:center'>".$addresp."</div>
          </a></td>
          <td colspan='2'><a href='#'>
            <div class='solicitacao' style='text-align:center'><img src='../imagens/edit.png'  alt='Editar Filial' title='Editar Filial' width='30' height='30' align='absmiddle'/> </div>
          </a></td>
          <td colspan='2'>".$exc."
            <div class='solicitacao' style='text-align:center'><img src='../imagens/delete.png'  alt='Excluir Filial' title='Excluir Filial' width='30' height='30' align='absmiddle'/></div>
          </a></td>
        </tr>
      </table>
	  <br><br>
	  <span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Nenhum Responsável Cadastrado, Esta Filial e a Matriz Não Têm Acesso ao Sistema de Controle de Vistoria</span>";
	
	
  }else{
	  
	  $addresp = "<div align='center'><span class='textomenorpretoB'><img src='../imagens/addLogin2.png' width='30' height='30' align='absmiddle'/> Adicionar Responsável</span></div>
	"; 
	echo "
	
		  <table width='100%' border='0'>
        <tr>
          <td colspan='2'><a href='#'>
            <div class='solicitacao' style='text-align:center'>".$addresp."</div>
          </a></td>
          <td colspan='2'><a href='#'>
            <div class='solicitacao' style='text-align:center'><img src='../imagens/edit.png'  alt='Editar Filial' title='Editar Filial' width='30' height='30' align='absmiddle'/> </div>
          </a></td>
          <td colspan='2'>".$exc."
            <div class='solicitacao' style='text-align:center'><img src='../imagens/delete.png'  alt='Excluir Filial' title='Excluir Filial' width='30' height='30' align='absmiddle'/></div>
          </a></td>
        </tr>
      </table>
	  <br><br>
	  <span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> O responsável desta Filial é o mesmo que o da Matriz</span>";

	  
  }
  ?>
      </div>
<?php
  }
 
  }else{
	echo "<span class='aviso'><img src='../imagens/warning.png' width='20' height='20' align='absmiddle' /> Esta Empresa não tem Filial Cadastrada.</span>";  
	  
  }
  
 
	  ?>
      
      
      
      
      
   </div>
     <br /><a href="javascript:MM_openBrWindow('cad_filial.php?id=<?php echo $rowMatriz["idMatriz"] ?>','edit','scrollbars=yes,width=850,height=380')"><div align="right"><span class="textomenorpretoB"><img src="../imagens/add.png" width="20" height="20" align="absmiddle" /> Adicionar Filial</div></a>
    </div>      </p>
  <p>&nbsp;</p>
 
    
    <?php 
	
	}else{
	  echo "<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <p>&nbsp;</p><span class='aviso'><img src='../imagens/warning.png' width='30' height='30' align='absmiddle' />Cliente Não Encontrado </span> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>";
  } 
  
  ?>

  <div class="clear">   
 </div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
$(function() {
	$( "#Accordion1" ).accordion({
		collapsible:true,
		active:10
	}); 
});
$(function() {
	$( "#Accordion2" ).accordion({
		collapsible:true,
		active:1000,
		animate:{easing: "linear"}
	}); 
});
</script>
</body>
</html>