
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Intranet RBNA</title>
<link href="fontes/style.css" rel="stylesheet" type="text/css" />
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
	color: #333;
}
a:active {
	color: #FFF;
}
a {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>

 <script src="fontes/alt.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="fontes/alt.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

            function excluir(id){
                if(confirm('Você deve trocar sua Senha')){
                    //redirecionar para o excluir
                    location.href="editar_senha.php?id="+id;
                }
            }

        </script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="coin-slider.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>


<script language="JavaScript">
<!--
function showtime()
{ setTimeout("showtime();",1000);
callerdate.setTime(callerdate.getTime()+1000);
var hh = String(callerdate.getHours());
var mm = String(callerdate.getMinutes());
var ss = String(callerdate.getSeconds());
document.clock.face.value =
((hh < 10) ? " " : "") + hh +
((mm < 10) ? ":0" : ":") + mm +
((ss < 10) ? ":0" : ":") + ss;

}
callerdate=new Date(<?php echo date("Y,m,d,H,i,s");?>);
//-->
</script>
<script type="text/javascript">

$(document).ready(function() {	

	$('a[name=modal]').click(function(e) {
		e.preventDefault();
		
		var id = $(this).attr('href');
	
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		$(id).fadeIn(2000); 
	
	});
	
	$('.window .close').click(function (e) {
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	
});

</script>

<link rel="stylesheet" href="coin-slider-styles.css" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once 'validar_user.php';

?>



<body background="imagens/bg1.jpg" class="bg" onload="showtime()">
<div align="center" class="total">
<div align="center">
  <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
    <tr>
      <td width="17%" bgcolor="#033162" class="title"><div align="center">Intranet RBNA        </div></td>
      <td width="16%" bgcolor="#033162"><div>
        <div align="center"><span class="textomenorB">
          <?php 
	  
	  $nome = explode(" ", $_SESSION["nome"]);
	  
	  
	  echo "Olá ".$nome[0] . " ";

	  ?>
        </span></div>
      </div></td>
      <td width="41%" bgcolor="#<?php             if(isset ($_GET["c"])){
                echo $_GET["c"];
				
            }else{ 
			echo "033162";
			}
			 ?>"><form name='clock'><div align="center"><span class="textomenor">
        <?php 
		include_once 'fontes/conexao.php';

//Verifica se a senha é rbna1234

$sqlsenha = "SELECT * FROM usuario where idfunc = ".$_SESSION["idfunc"];
$resultsenha = mysql_query($sqlsenha, $con);
$rowsenha = mysql_fetch_array ($resultsenha);

if ($rowsenha["senha"] == "d2a73e86a3bccc79f16f6ee4c9f66c66"){
header("location:editar_senha_padrao.php?id=".$_SESSION["idfunc"]);

	}
	
	//Fim verificação
	
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
			}else{
			echo "<input type='text' class='texto' readonly name='face' value='' size=6 style='background-color:#033162; color:#FFF; border:0; cursor: wait;'>";
			
			}
			
        ?>
      </span></div></form></td>
      <td width="19%" bgcolor="#033162" class="title"><div align="center"><img src="imagens/box.png"  alt="" width="20" height="20" align="absmiddle"/><a href="#dialog2" name="modal"> <span class="textomenor">Caixa de Sugestões</span></a></div></td>
      <td width="7%" bgcolor="#033162"><div align="center"><a href="logout.php" class="title"><span class="textomenor"><img src="imagens/sair.png"  alt="" width="20" height="20" align="absmiddle"/> Sair</span></a></td>
    </tr>
    <tr>
      <td colspan="5" bgcolor="#0099CC"><div align="center">
        <ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="intranet.php">P&aacute;gina Inicial</a></li>
          <li><a href="#" class="MenuBarItemSubmenu">Obras</a>
            <ul>
              <li><a href="obras_rb.php">RB</a></li>
              <li><a href="obras_ce.php">CE</a></li>
              <li><a href="obras_oa.php">OA</a></li>
              <li><a href="obras_ov.php">OV</a></li>
              <li><a href="obras_ow.php">OW</a></li>
              <li><a href="obras_oh.php">OH</a></li>
              <li><a href="obras_oi.php">OI</a></li>
              <li><a href="obras_og.php">OG</a></li>
              <li><a href="obras_om.php">OM</a></li>
              <li><a href="obras_ot.php">OT</a></li>
              <li><a href="obras_od.php">OD</a></li>
              <li><a href="obras_ok.php">OK</a></li>
            </ul>
          </li>
          <li><a class="MenuBarItemSubmenu" href="#">Administra&ccedil;&atilde;o</a>
            <ul>
              <li><a href="funcionarios.php">Funcion&aacute;rios</a></li>
              <li><a href="rh.php">RH</a></li>
              <li><a href="fazer_solicitacao.php">Fazer Solicita&ccedil;&atilde;o</a></li>
              <li><a href="comunicados.php">Comunicados</a></li>
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
          <li><a href="eventos.php">Eventos</a></li>
          <li><a href="javascript:MM_openBrWindow('editar_senha.php?id=<?php echo $_SESSION["idfunc"] ?>','edit','width=500,height=200')">Alterar Senha</a></li>
          <li><a href="admin/index.php">Painel de Controle</a></li>
        </ul>
      </div>
        <div align="center"></div></td>
</tr>
    </table>
</div>


<p><div id="games">
<a href="#">
<img  src="imagens/001.jpg" alt="Imagem 1" />

</a>

<a href="#" >
<img src="imagens/002.jpg" />
</a>

<a href="#">
<img src="imagens/003.png" />

</a>

</div>
<script>
$('#games').coinslider();
</script>

</p>

  <div class="esquerda">    <table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td bgcolor="#0099CC"><div align="center"><span class="title">Comunicados</span>
          <?php	

$sqlcon = "SELECT * FROM comunicado where ativo = 1 ORDER BY data DESC ";
$resultcon = mysql_query($sqlcon, $con);
$num_rows = mysql_num_rows($resultcon);
while ($rowcon = mysql_fetch_array ($resultcon)){
$datacon = $rowcon["data"];
$comunicadocon = $rowcon["comunicado"];
$id_funcionariocon = $rowcon["id_funcionario"];
$ativocon = $rowcon["ativo"];
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
    <td width="49%" bgcolor="#F3F3F3" class="textomenorpreto">
      Enviado Por: <span class="textomenorpreto"><em><?php echo $nomefunccon;  ?></em></span></td>
    <td width="51%" bgcolor="#F3F3F3" class="textomenorpreto"><?php echo $dataformatcon ?><?php echo $horaformatcon ?></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFFFF" class="textomenorpreto"><div class="solicitacao"><div align="center"><?php echo $comunicadocon ?>
      </div></div></td>
   </tr><?php } 
	  }?> 
</table></div>
</p>
<div class="direita">
  <table width="100%" border="0">
 <tr>
      <td colspan="4" bgcolor="#0099CC"><div align="center"><span class="title">Obras Recentes</span></div></td>
    </tr>
    <tr class="texto">
      <td width="23%" bgcolor="#F3F3F3" class="textomenorpreto">Obra:</td>
      <td width="48%" bgcolor="#F3F3F3" class="textomenorpreto">Data:</td>
      <td width="19%" bgcolor="#F3F3F3" class="textomenorpreto">Detalhes:</td>
      <td width="10%" bgcolor="#F3F3F3" class="textomenorpreto">PDF:</td>
    </tr>
      <?php
  $sqlobras = "SELECT id, registro, data, pdf, inativo, nome
FROM log_obras AS log
INNER JOIN funcionario AS func ON log.id_funcionario = func.id_funcionario
WHERE inativo =0
ORDER BY data DESC
LIMIT 0 , 5";

$resultobras = mysql_query($sqlobras, $con);
while ($rowobras = mysql_fetch_array ($resultobras)){
   $dataobras = $rowobras["data"];
   
   $datatimeobras = explode(" ",$dataobras);
	$datadiaobras = $datatimeobras[0];
	$datahoraobras = $datatimeobras[1];
	
	$dataexpobras = explode("-",$datadiaobras);
	
	$anoobras = $dataexpobras[0];
	$mesobras = $dataexpobras[1];
	$diaobras = $dataexpobras[2];
	
	

    switch ($mesobras) {
    case "01": $mesnomeobras = "Janeiro"; break;
    case "02": $mesnomeobras = "Fevereiro"; break;
    case "03": $mesnomeobras = "Março"; break;
    case "04": $mesnomeobras = "Abril"; break;
    case "05": $mesnomeobras = "Maio"; break;
    case "06": $mesnomeobras = "Junho"; break;
    case "07": $mesnomeobras = "Julho"; break;
    case "08": $mesnomeobras = "Agosto"; break;
    case "09": $mesnomeobras = "Setembro"; break;
    case "10": $mesnomeobras = "Outubro"; break;
    case "11": $mesnomeobras = "Novembro"; break;
    case "12": $mesnomeobras = "Dezembro"; break;
    };
	
	$dataformatobras = " ".$diaobras. " de ".$mesnomeobras. " de " .$anoobras ;
	
		$horaexpobras = explode(":",$datahoraobras);
	
	$horaobras = $horaexpobras[0];
	$minutoobras = $horaexpobras[1];
	$segundoobras = $horaexpobras[2];
	
	$horaformatobras = " ".$horaobras.":".$minutoobras. ":" .$segundoobras ;
   
   $registro = $rowobras["registro"];
   $link_obra1 = substr($registro,0,2);
   $link_obra = strtolower($link_obra1);
   
   ?>
    <tr>
      <td><div class="solicitacao" style="height:20px;"><span class="texto"><?php echo $rowobras["registro"] ?></span></div></td>
      <td><div class="solicitacao" style="height:20px;"><span class="textomenorpreto"><?php echo $dataformatobras.$horaformatobras ?></span></div></td>
      <td><a href="javascript:MM_openBrWindow('detalhe_obras_<?php echo $link_obra ?>.php?registro=<?php echo $rowobras["registro"] ?>','edit','width=1020,height=430')" onmouseover="tooltip.show('Obra postada por:  <?php echo $rowobras["nome"] ?>');" onmouseout="tooltip.hide();"><div class="solicitacao" style="height:20px;">
        <div align="center"><span class="texto"></span><img src="imagens/detalhe.png" width="20" height="20" style="border:none"  align="absmiddle"/> </div>
      </div></a>
        
       </td>
      <td><div class="solicitacao" style="height:20px;">
        <div align="center"><span class="texto"></span><a href="admin/obras/obras_<?php echo $link_obra ?>/<?php echo $rowobras["pdf"]  ?>" target="_blank"><img src="imagens/pdf.png" width="20" height="20" style="border:none" align="absmiddle"  /></a></div>
      </div></td>
    </tr>
    <?php
}
	?>
  </table>

</div>
<div class="clear"></div>
  <?php

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
    };
	

	?>
</p>
<div class="direita">
  <table width="100%" border="0">
    <tr>
      <td class="titulo-topo" bgcolor="#0099CC"><div align="center" class="title">Aniversariantes Do mes de <?php echo $mesnome ?></div></td>
    </tr>
  </table>
  <?php
$sql = "SELECT * FROM funcionario WHERE MONTH(data_nasc) = MOD(MONTH(CURDATE()), 13) and desligado = 0 ORDER  BY DAY(data_nasc)";
$result = mysql_query($sql, $con);
$num_rows = mysql_num_rows($result);
while ($row = mysql_fetch_array ($result)){

$datanasc = $row["data_nasc"];
$nome = $row["nome"];
$email = $row["email"];
$foto = $row["foto"];

	$divnome = explode(" ",$nome);


	$data = explode("-",$datanasc);
	
	$ano = $data[0];
	$mes = $data[1];
	$dia = $data[2];
	





?>
  <table  width="450px" height="130px" bgcolor="#F3F3F3" border="0" cellpadding="0">
    <tr>   
      <td width="150px" rowspan="4" bgcolor="#E6E6E6"><div class="foto" style="width:150px; height:110px">
        <div align="center">
          <?php 
		if(empty($foto)){
		echo "<img src='imagens/nophoto.jpg' width='150' height='110' alt='perfil' />";
		
		}else{
			echo "<img src='fotos/".$foto."' width='150' height='110' alt='Foto de exibição' />";
		}
		
		?>
          </div>
      </div></td><?php
     
 //-------------------------------Fim Aniversariante do Mes--------------------- 
 $nome = preg_replace("/(\s){2,}/",'$1',$nome);   
$nomeex = explode(" ",$nome);
$nomeformat = $nomeex[0]." ".$nomeex[1];
		if($dia == $diaatual){
		
		?>
      <td bgcolor="#E6E6E6"> <div class='solicitacao' style="background-color:#F00; height:20px;">
        <div align='center' class='title'>
      <?php  echo " <marquee behavior='alternate'><img src='imagens/niver.gif' width='20' height='20' align='absmiddle'  />
		  
		  Parabéns " .$nomeformat."
		  
		  <img src='imagens/niver.gif' width='20' height='20' align='absmiddle' /></marquee>";
		
		}else{
		?> <td width="64" bgcolor="#E6E6E6"><div class="solicitacao" style=" background-color:#0099CC; height:100%;">
        <div align='center' class='title'><?php echo $nomeformat;
	
			
			
			}?></div>
     </td>
     
    </tr>
    <tr>
      <td width="251" bgcolor="#E6E6E6" class="texto"><div class="solicitacao" style="height:25px;">Dia
        <?php 
		
			echo $dia;

			?>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF" class="texto"></td>
    </tr>
    <tr>
      <td bgcolor="#E6E6E6"><a href="mailto:<?php echo $email ?>">
        <div class="solicitacao" style="height:20px;"><?php echo $email ?></div>
      </a></td>
<br/>
      <?php
	  


}



 ?>
    </tr>
  </table>
  
</div>


</p>
<div class="esquerda">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td bgcolor="#0099CC"><div align="center"><span class="title">Eventos</span></div></td>
    </tr>
  </table>        <?php
$sqleventos = "SELECT * FROM eventos ORDER by DATA DESC LIMIT 0, 5";
$resulteventos = mysql_query($sqleventos, $con);
while ($roweventos = mysql_fetch_array ($resulteventos)){
	
$imagem = $roweventos["imagens"]; 
$dataevento = $roweventos["data"];

$dteventformat = explode("-",$dataevento);
	
	$anoevent = $dteventformat[0];
	$mesevent = $dteventformat[1];
	$diaevent = $dteventformat[2];
	
	$dataformatev = $diaevent."/".$mesevent."/".$anoevent;
	
	if(!empty($imagem)){
		   $link =	"<a href='galeria/galeria/fotos.php?id=".$imagem."'>Ver mais Fotos</a>";

		    }else{ 
			//echo "";
			$link = "Sem Fotos";		
				//echo "";
			}
	
	
	?>
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="2" bgcolor="#F3F3F3" class="textomenor"><div class="solicitacao"><div align="center" class="texto"><strong>

        <?php echo $roweventos["titulo"] ?></strong></div></div></td>
    </tr>
    <tr>
      <td width="32%" height="22" bgcolor="#F3F3F3" class="textomenor"><div class="solicitacao"><span class="textomenorpreto">Rio de Janeiro: <?php echo $dataformatev ?></span></div></td>
      <td width="68%" rowspan="4" bgcolor="#FFFFFF" class="textomenorpreto"><div class="solicitacao"><?php echo $roweventos["descricao"] ?></div></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3" class="textomenor"><div align="center"><span class="solicitacao">
        <?php 
		if(empty($imagem)){
		echo "<img src='imagens/nophoto.jpg' width='185' height='150' alt='perfil' />";
		
		}else{
			echo "<img src='img_eventos/".$imagem."/thumbs.jpg' width='185' height='150' alt='Foto de exibição' />";
		
		}
		?>
      </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3"><div class="solicitacao"><span class="texto"><?php echo $link; ?></span></div></td>
    </tr>
    <tr>
      <td bgcolor="#F3F3F3" class="textomenorpreto"><div class="solicitacao"><?php 
			 $sqlfuncionario = "SELECT nome FROM funcionario where id_funcionario =" .$roweventos["id_funcionario"];
$resultfuncionario = mysql_query($sqlfuncionario, $con);
while ($rowfuncionario = mysql_fetch_array ($resultfuncionario)){
	
	
?>
        Postado por: <?php echo $rowfuncionario["nome"]; }?></div></td>
      
      <?php 
	  }
	  ?>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="clear">

 <p></p>
 <p>&nbsp;</p>
</div> 
<div class="clear"></div>

</div>
<div id="boxes">


  
<!-- Janela Modal com caixa de diálogo -->  

<!-- Fim Janela Modal com caixa de diálogo -->  



<!-- Janela Modal com Bloco de Nota -->
<div id="dialog2" class="window">


<form name="sugestao" action="gravar_sugestao.php" method="post">
<div align="center"><span class="aviso"><input name="anonimo" type="checkbox" id="anonimo" title="Mensagem Anônima" value="1" checked="checked" /><label for="checkbox">Mensagem Anônima</label></span></div>
  <div align="center">
<textarea placeholder="Digite aqui sua sugestão..." name="sugestao" cols="30" rows="5" id="sugestao" class="required"></textarea>
<input type="submit" value="Enviar Sugestão" /></div></form>
</div>
<!-- Fim Janela Modal com Bloco de Nota -->



<!-- Máscara para cobrir a tela -->
  <div id="mask"></div>



</div>

<br /><br />
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
 
</body>
</html>