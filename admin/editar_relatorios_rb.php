
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
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/maskedinput-1.1.2.pack.js"></script>
        
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script type="text/javascript">

            function excluir(id, id_obra){
                if(confirm('Deseja realmente excluir este Relatório ?')){
                    //redirecionar para o excluir
                    location.href="exc_relatorio_rb.php?id="+id+"&id_obra="+id_obra;
                }
            }

        </script>
        
        <script type="text/javascript">

            function excluirstatus(id, id_obra){
                if(confirm('Deseja realmente excluir o Status ?')){
                    //redirecionar para o excluir
                    location.href="exc_status_rb.php?id="+id+"&id_obra="+id_obra;
                }
            }

        </script>
        <script>
  $(document).ready(function(){
    $("#casco").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});
  });
  </script>
  <script>
  $(document).ready(function(){
    $("#maquinaria").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});
  });
  </script>
  <script>
  $(document).ready(function(){
    $("#estatutario").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});
  });
  </script>
    <script>
  $(document).ready(function(){
    $("#status").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});
  });
  </script>
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

    



<p></p>
<div class="clear"><?php

// Grupo de relatorios
$grcasco = base64_encode("1.1");
$grmaquinaria = base64_encode("1.2");
$grestatutario = base64_encode("2");


		  include_once '../fontes/conexao.php';
		$idrb =base64_decode($_GET["id"]);
			if (!is_int($idrb)) {
				$idrb = $idrb;
			}else{
				$idrb = 0;
				
			}
		$sqlrb = "select * from obras_rb where id = ".$idrb;
		$resultrb = mysql_query($sqlrb, $con);
		$num  = mysql_num_rows($resultrb);

	if ($num < 1) {
		
		
	 
		 
		 echo "<div align='center'><span class='textomenorpretoB'>
              <img src='../imagens/alert.png'  alt='' width='24' height='24' align='absmiddle'/> Obra Não Encontrada <img src='../imagens/alert.png'  alt='' width='24' height='24' align='absmiddle'/>
             
            </span> </div> <br>
			<br>";
			echo $idrb;
	 }else{
 

			
		$rowrb = mysql_fetch_array($resultrb);
		
		
	
		?>
    <table width="90%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="22%" bgcolor="#0099CC"><div class="solicitacao">
          <div class="title">OBRA: <?php echo "[".$rowrb["registro"]."] "?></div>
        </div></td>
        <td colspan="2" bgcolor="#0099CC"><div class="solicitacao"><span class="title">
          
       Embarcação: <?php echo $rowrb["embarcacao"]; ?> </span></div></td>
      </tr>
      <?php 
		  /*$sqlrelatorio = "select * from relatorio where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"];
		$resultrelatorio = mysql_query($sqlrelatorio, $con);
		while ($rowrelatorio = mysql_fetch_array($resultrelatorio)) {
			
			$id =  $rowrelatorio["id"];
			$id_matriz =  $rowrelatorio["id_matriz"];
			$id_filial =  $rowrelatorio["id_filial"];
			$id_obra =  $rowrelatorio["id_obra"];
			$id_tiporelatorio =  $rowrelatorio["id_tiporelatorio"];
			$id_usuario =  $rowrelatorio["id_usuario"];
			$ciclo =  $rowrelatorio["ciclo"];
			$arquivo =  $rowrelatorio["arquivo"];
			$data =  $rowrelatorio["data"];
			$obra =  $rowrelatorio["obra"];
			
		  */
		  ?>
     
    </table>
    
      <table width="90%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td bgcolor="#666666"><div class="solicitacao">
            <div align="center" class="title">Status de Classe:</div>
          </div></td>
          <td bgcolor="#666666">&nbsp;</td>
        </tr>
           <?php 
		
		$sqlstatus = "SELECT * FROM statusclasse where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"]."'";
		
		
		  //$sqlrelatorio = "select * from relatorio where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"]."'";
		$resultstatus = mysql_query($sqlstatus, $con);
		$rowstatus = mysql_fetch_array($resultstatus);
			
			
			$idstatus =  $rowstatus["id"];
			$pdfstatus =  $rowstatus["arquivo"];
			
			
		  
		  ?>
          
        <tr>
          <td width="810" bgcolor="#E9E9E9">
          <form action="gravar_status_rb.php" method="post" name="status" class="textomenorpretoB" id="status" enctype="multipart/form-data">
          
        <?php if (isset($idstatus)){
			  
		echo  "<a href='statusclasse/rb/".$pdfstatus."' target='_blank'>
            <div class='solicitacao'><span class='texto'>
              Status de Classe
             
            </span> </div>
          </a>
		   </td>
          <td width='31' bgcolor='#E9E9E9'>
                      
            ";?><a href="javascript:excluirstatus('<?php echo $idstatus ?>','<?php echo $idrb ?>')"><?php echo "
<div class='solicitacao'>
  <div align='center'><img src='../imagens/delete.png' width='20' height='20' /></div>
</div></a>
            
          
		  </tr>
			  
	 
	 
			  </td>
		  
		  
		  "; }else{
			  	?><div class='solicitacao' align='center'><span class='textomenorpretoB'>
              <img src='../imagens/warning.png'  alt='' width='24' height='24' align='absmiddle'/> Status Indisponível
             
            </span> </div>
			 </td>
          <td width='31' bgcolor='#E9E9E9'>
           </td>
            
          
		  </tr>
		  </tr>
        <tr>
		
          <td bgcolor='#E9E9E9'><label><div class='solicitacao'><input type="file" name="pdf" id="pdf" class="required" />          </div></label>
		 <td width='31' bgcolor='#E9E9E9'>
            <div class='solicitacao'>
              <div align='center'><input type='submit' value='Enviar' name='cadastrar' class='required' /></div>
            </div></td>
			
			
        </tr>
			  
	</td>
	 
			  
			  
         <?php
			  }
			   ?>
        <input type="hidden" value="<?php echo $rowrb["registro"] ?>" name="obra" />
        <input type="hidden" value="<?php echo $idrb ?>" name="idObra" />
          </form>
      </table>
    <br/>
      <form action="gravar_relatorio_rb.php" method="post" name="casco" class="textomenorpretoB" id="casco" enctype="multipart/form-data"><table width="90%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="4" bgcolor="#666666"><div class="solicitacao">
            <div align="center" class="title">Relatórios de Classe:</div>
          </div></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#999999"><div class="solicitacao">
            <div align="center" class="textomenorB"> Casco:</div>
          </div></td>
          <td width="41" bgcolor="#999999"><div class="solicitacao">
            <div align="center" class="textomenorB">Editar</div>
          </div></td>
          <td bgcolor="#999999"><div class="solicitacao">
            <div align="center" class="textomenorB">Excluir</div>
          </div></td>
        </tr>    <?php 
		
		$sql = "SELECT *, r.id as id_relatorio FROM relatorio r
LEFT JOIN tiporelatorio tpr ON  r.id_tiporelatorio = tpr.id WHERE  r.id_obra = ".$rowrb["id"]." and r.obra like '".$rowrb["registro"]."' and grupo like '1.1'";
		
		
		  //$sqlrelatorio = "select * from relatorio where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"]."'";
		$result = mysql_query($sql, $con);
		while ($row = mysql_fetch_array($result)) {
			
			
			$id =  $row["id"];
			$id_matriz =  $row["id_matriz"];
			$id_filial =  $row["id_filial"];
			$id_obra =  $row["id_obra"];
			$id_tiporelatorio =  $row["id_tiporelatorio"];
			$id_usuario =  $row["id_usuario"];
			$ciclo =  $row["ciclo"];
			$arquivo =  $row["arquivo"];
			$data =  $row["data"];
			$obra =  $row["obra"];
			$tipo_relatorio = $row["tipo"];
			$grupo = $row["grupo"];
			$pdf = $row["arquivo"];
			$id_relatorio = $row["id_relatorio"];
		  
		  ?>
        <?php 
		
		$sql = "SELECT *, r.id as id_relatorio FROM relatorio r
LEFT JOIN tiporelatorio tpr ON  r.id_tiporelatorio = tpr.id WHERE  r.id_obra = ".$rowrb["id"]." and r.obra like '".$rowrb["registro"]."' and grupo like '1.1'";
		
		
		  //$sqlrelatorio = "select * from relatorio where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"]."'";
		$result = mysql_query($sql, $con);
		while ($row = mysql_fetch_array($result)) {
			
			
			$id =  $row["id"];
			$id_matriz =  $row["id_matriz"];
			$id_filial =  $row["id_filial"];
			$id_obra =  $row["id_obra"];
			$id_tiporelatorio =  $row["id_tiporelatorio"];
			$id_usuario =  $row["id_usuario"];
			$ciclo =  $row["ciclo"];
			$arquivo =  $row["arquivo"];
			$data =  $row["data"];
			$obra =  $row["obra"];
			$tipo_relatorio = $row["tipo"];
			$grupo = $row["grupo"];
			$pdf = $row["arquivo"];
			$id_relatorio = $row["id_relatorio"];
		  
		  ?>
        <tr>
          <td colspan="2" bgcolor="#E9E9E9"><a href="relatorios/rb/<?php echo $pdf; ?>" target="_blank">
            <div class="solicitacao"><span class="texto">
              <?php 
		   		
				if ($grupo == "1.1")	{			

		echo $tipo_relatorio;
				
		   ?>
            </span> </div>
          </a></td>
          <td bgcolor="#E9E9E9"><a href="edit_relatorios_rb.php?id=<?php echo $id_relatorio; ?>">
            <div class="solicitacao">
              <div align="center"><img src="../imagens/edit.png"  alt="" width="20" height="20" align="absmiddle"/></div>
            </div>
          </a></td>
          <td width="47" bgcolor="#E9E9E9"><a href="javascript:excluir('<?php echo $id_relatorio ?>','<?php echo $idrb ?>')">
<div class="solicitacao">
  <div align="center"><img src="../imagens/delete.png" width="20" height="20" /></div>
</div></a>
            <?php
			    }echo "</tr>";
			  
		}
	 
			  ?></td>
          <?php } ?>
        </tr>
        <tr>
          <td width="20" bgcolor="#CCCCCC"><div align="left"><a href="javascript:MM_openBrWindow('cad_tiporelatorio.php?gr=<?php echo $grcasco ?>','edit','scrollbars=yes,width=500,height=400')"><img src="../imagens/add.png" width="20" height="20" alt="Cadastrar Tipo de Relatório" title="Cadastrar Tipo de Relatório" /></a></div>            
          <a href="#"></a></td>
          <td width="766" bgcolor="#CCCCCC"><div align="left" class="textomenorpretoB"> Tipo Relatório:
            </label>
            <select name="tipo" id="tipo"  class="required">
              <option value="">Selecione</option>
              <?php
        
		$sqltprelatorio = "select * from tiporelatorio where grupo like '1.1'";
		$resulttprelatorio = mysql_query($sqltprelatorio, $con);
		while ($rowtprelatorio = mysql_fetch_array($resulttprelatorio)) {
         ;
		
		?>
              <option value="<?php echo $rowtprelatorio["id"] ?>"/>
              <?php echo $rowtprelatorio["tipo"] ?></option>
              <?php
                }

                ?>
            </select>
            </select>
            <input type="file" name="arquivo" class="required" id="arquivo" />
          <input type="hidden" value="1.1" name="grupo" />
          <input type="hidden" value="<?php echo $rowrb["registro"] ?>" name="obra" />
          <input type="hidden" value="<?php echo $idrb ?>" name="idObra" />
          </div></td>
          <td colspan="2" bgcolor="#CCCCCC"><div align="center">
            <input type="submit" name="cadastrar" id="submit4" value="Enviar" />
          </div></td>
        </tr>
      </table>
      </form>
      <form action="gravar_relatorio_rb.php" method="post" name="maquinaria" class="textomenorpretoB" id="maquinaria" enctype="multipart/form-data"><table width="90%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2" bgcolor="#999999"><div class="solicitacao">
              <div align="center" class="textomenorB"> Maquinaria:</div>
          </div></td>
          <td width="5%" bgcolor="#999999"><div class="solicitacao">
            <div align="center" class="textomenorB">Editar</div>
          </div></td>
          <td width="6%" bgcolor="#999999"><div class="solicitacao">
            <div align="center" class="textomenorB">Excluir</div>
          </div></td>
        </tr>
        <?php 
		
		$sql = "SELECT * , r.id as id_relatorio FROM relatorio r
LEFT JOIN tiporelatorio tpr ON  r.id_tiporelatorio = tpr.id WHERE  r.id_obra = ".$rowrb["id"]." and r.obra like '".$rowrb["registro"]."' and grupo like '1.2'";
		
		
		  //$sqlrelatorio = "select * from relatorio where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"]."'";
		$result = mysql_query($sql, $con);
		while ($row = mysql_fetch_array($result)) {
			
			$id =  $row["id"];
			$id_matriz =  $row["id_matriz"];
			$id_filial =  $row["id_filial"];
			$id_obra =  $row["id_obra"];
			$id_tiporelatorio =  $row["id_tiporelatorio"];
			$id_usuario =  $row["id_usuario"];
			$ciclo =  $row["ciclo"];
			$pdf =  $row["arquivo"];
			$data =  $row["data"];
			$obra =  $row["obra"];
			$tipo_relatorio = $row["tipo"];
			$grupo = $row["grupo"];
			$id_relatorio = $row["id_relatorio"];
		  
		  ?>
        <tr>
          <td colspan="2" bgcolor="#E9E9E9"><a href="relatorios/rb/<?php echo $pdf; ?>" target="_blank">
            <div class="solicitacao"><span class="texto">
              <?php 
		   		if ($grupo == "1.2")	{			

		echo $tipo_relatorio
		
				
		   ?>
            </span> </div>
          </a></td>
          <td bgcolor="#E9E9E9"><a href="edit_relatorios_rb.php?id=<?php echo $id_relatorio; ?>">
            <div class="solicitacao">
              <div align="center"><img src="../imagens/edit.png"  alt="" width="20" height="20" align="absmiddle"/></div>
            </div>
          </a></td>
          <td bgcolor="#E9E9E9"><a href="javascript:excluir('<?php echo $id_relatorio ?>','<?php echo $idrb ?>')">
<div class="solicitacao">
  <div align="center"><img src="../imagens/delete.png" width="20" height="20" /></div>
</div></a>
            <?php
			    }echo "</tr>";
			  
			   
	 
			  ?></td>
          <?php }
		  
		   ?>
        </tr>
        <tr>
          <td width="3%" bgcolor="#CCCCCC"><div align="left"><a href="javascript:MM_openBrWindow('cad_tiporelatorio.php?gr=<?php echo $grmaquinaria ?>','edit','scrollbars=yes,width=500,height=400')"><img src="../imagens/add.png" width="20" height="20" alt="Cadastrar Tipo de Relatório" title="Cadastrar Tipo de Relatório" /></a></div>            <a href="#"></a></td>
          <td width="86%" bgcolor="#CCCCCC"><div align="left"> Tipo Relatório:
            </label>
            <select name="tipo" id="tipo"  class="required">
              <option value="">Selecione</option>
              <?php
        
		$sqltprelatorio = "select * from tiporelatorio where grupo like '1.2'";
		$resulttprelatorio = mysql_query($sqltprelatorio, $con);
		while ($rowtprelatorio = mysql_fetch_array($resulttprelatorio)) {
         ;
		
		?>
              <option value="<?php echo $rowtprelatorio["id"] ?>"/>
              <?php echo $rowtprelatorio["tipo"] ?></option>
              <?php
                }

                ?>
            </select>
            </select>
            <input type="file" name="arquivo" class="required" id="arquivo" />
          <input type="hidden" value="1.2" name="grupo" />
          <input type="hidden" value="<?php echo $rowrb["registro"] ?>" name="obra" />
          <input type="hidden" value="<?php echo $idrb ?>" name="idObra" />
          </div></td>
          <td colspan="2" bgcolor="#CCCCCC"><div align="center">
            <input type="submit" name="cadastrar" id="cadastrar" value="Enviar" />
          </div></td>
        </tr>
      </table>
    </form>
      <br/>
    <form action="gravar_relatorio_rb.php" method="post" name="estatutario" class="textomenorpretoB" id="estatutario" enctype="multipart/form-data">  <table width="90%" border="0" cellpadding="2" cellspacing="2">
        <tr>
          <td colspan="2" bgcolor="#666666"><div class="solicitacao">
            <div align="center" class="title">Relatórios Estatutario:</div>
          </div></td>
          <td bgcolor="#666666"><div class="solicitacao">
            <div align="center" class="textomenorB">Editar</div>
          </div></td>
          <td bgcolor="#666666"><div class="solicitacao">
            <div align="center" class="textomenorB">Excluir</div>
          </div></td>
        </tr>
        <?php 
		
		$sql = "SELECT * ,r.id as id_relatorio FROM relatorio r
LEFT JOIN tiporelatorio tpr ON  r.id_tiporelatorio = tpr.id WHERE  r.id_obra = ".$rowrb["id"]." and r.obra like '".$rowrb["registro"]."' and grupo like '2'";
		
		
		  //$sqlrelatorio = "select * from relatorio where id_obra = ".$rowrb["id"]." and obra like '".$rowrb["registro"]."'";
		$result = mysql_query($sql, $con);
		while ($row = mysql_fetch_array($result)) {
			
			$id =  $row["id"];
			$id_matriz =  $row["id_matriz"];
			$id_filial =  $row["id_filial"];
			$id_obra =  $row["id_obra"];
			$id_tiporelatorio =  $row["id_tiporelatorio"];
			$id_usuario =  $row["id_usuario"];
			$ciclo =  $row["ciclo"];
			$pdf =  $row["arquivo"];
			$data =  $row["data"];
			$obra =  $row["obra"];
			$tipo_relatorio = $row["tipo"];
			$grupo = $row["grupo"];
		  $id_relatorio = $row["id_relatorio"];
		  ?>
        <tr>
          <td colspan="2" bgcolor="#E9E9E9"><a href="relatorios/rb/<?php echo $pdf; ?>" target="_blank">
            <div class="solicitacao"><span class="texto">
              <?php 
		   		if ($grupo == "2")	{			

		echo $tipo_relatorio
		
				
		   ?>
            </span> </div>
          </a></td>
          <td width="5%" bgcolor="#E9E9E9"><a href="edit_relatorios_rb.php?id=<?php echo $id_relatorio; ?>">
            <div class="solicitacao">
              <div align="center"><img src="../imagens/edit.png"  alt="" width="20" height="20" align="absmiddle"/></div>
            </div>
          </a></td>
          <td width="6%" bgcolor="#E9E9E9"><a href="javascript:excluir('<?php echo $id_relatorio ?>','<?php echo $idrb ?>')">
<div class="solicitacao">
  <div align="center"><img src="../imagens/delete.png" width="20" height="20" /></div>
</div></a>
            <?php
			    }echo "</tr>";
			  
			   
	 
			  ?></td>
          <?php }?>
        </tr>
        <tr>
          <td width="3%" bgcolor="#CCCCCC"><div align="left"><a href="javascript:MM_openBrWindow('cad_tiporelatorio.php?gr=<?php echo $grestatutario ?>','edit','scrollbars=yes,width=500,height=400')"><img src="../imagens/add.png" width="20" height="20" alt="Cadastrar Tipo de Relatório" title="Cadastrar Tipo de Relatório" /></a></div>            
          <a href="#"></a></td>
          <td width="86%" bgcolor="#CCCCCC"><div align="left">
                  Tipo Relatório:
</label>
               
                  <select name="tipo" id="tipo"  class="required">
                    <option value="">Selecione</option><?php
        
		$sqltprelatorio = "select * from tiporelatorio where grupo like '2'";
		$resulttprelatorio = mysql_query($sqltprelatorio, $con);
		while ($rowtprelatorio = mysql_fetch_array($resulttprelatorio)) {
         ;
		
		?>
        <option value="<?php echo $rowtprelatorio["id"] ?>"/>
       <?php echo $rowtprelatorio["tipo"] ?>
       <?php
                }

                ?>
</select>
		            
                    
                  </select>
          <input type="file" name="arquivo" class="required" />
          
          <input type="hidden" value="2" name="grupo" />
          <input type="hidden" value="<?php echo $rowrb["registro"] ?>" name="obra" />
          <input type="hidden" value="<?php echo $idrb ?>" name="idObra" />
          </div></td>
          <td colspan="2" bgcolor="#CCCCCC"><div align="center">
            <input type="submit" name="cadastrar" id="cadastrar" value="Enviar" />
          </div></td>
        </tr>
      </table></form>
    <p>
      <?php
           
			
			if(isset ($_GET["msg"])){
				 $msg = base64_decode($_GET["msg"]);
                echo "
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<div class='info'><div align='center' class='aviso'><img src='../imagens/Info.png' width='25' height='25' align='absmiddle'/> ". $msg."  <img src='../imagens/Info.png' width='25' height='25' align='absmiddle'/></div></div>";
            }
        ?>
      </p>
      <p></p>
      <p>&nbsp;</p>
 
    <p>
 <?php
			   }
	 
			  
			  ?>
    </p>
  </div>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>