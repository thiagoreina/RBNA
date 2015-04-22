<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Obra RB</title>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/maskedinput-1.1.2.pack.js"></script>
        <!-- Script autocomplete -->
		<script type="text/javascript" src="js/script.js"></script>
        <!-- /Script autocomplete -->

 <script>
  $(document).ready(function(){
    $("#form").validate({
  rules: {
    password: "required",
    password_again: {
      equalTo: "#password"
    }
  }
});
  });
  </script>
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
        

<style>
            label.error{
	color: red;
	font-size: 10px;
	margin-left: 5px;
	font-family: Verdana, Geneva, sans-serif;
            }
        </style>
        
<style type="text/css">
<!--
.verdana {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	color: #FFF;
}
.verdanainten {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
}
.geral {	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #333;
}
.msg {font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}
.sbtitulo {	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #CCC;
	position: relative;
}
.aviso {	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}
.title {	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
-->
</style>
<link href="../fontes/style.css" rel="stylesheet" type="text/css" />
</head>
<?php 
include_once '../validar.php';
include_once '../validar_obras.php';

?> 
 <?php
       

	
	
        ?>
<body bgcolor="#EEEEEE">

<form action="att_obras_rb.php" method="post" enctype="multipart/form-data" name="editar_form" id="form">
  
  <div class="input_container">
<input name="cliente" type="text"  id="country_id"  placeholder="Selecione o Cliente" class="required" onkeyup="autocomplet()" value="<?php $id = $_GET["id"];		
        include_once '../fontes/conexao.php';
        $sql = "select * from obras_rb where id = ".$id;
        $result = mysql_query($sql,$con);
        $row = mysql_fetch_array($result);
		$obs = str_replace("<br />", "", $row["obs"]);
  $id_matriz = $row["id_matriz"];
  
  $sqlmatriz = "select * from matriz where idMatriz = ".$id_matriz;
        $resultmatriz = mysql_query($sqlmatriz,$con);
        $rowmatriz = mysql_fetch_array($resultmatriz);
   echo "[".$rowmatriz["idMatriz"]."] ".$rowmatriz["fantasia"] ?>" />
  <ul id="country_list_id">
  </ul>
</div>
<table width="100%" border="0">
  <tr>
    <td width="83%"><div class="solicitacao"><span class="texto">Contratante: <?php echo $row["contratante"] ?></span></div></td>
    <td width="17%"><a href="cad_matriz.php" target="_blank">
      <div class="solicitacao">
        <div align="right"><img src="../imagens/add.png"  alt="" width="20" height="20" align="absmiddle"/><span class="textomenorpretoB"> Adicionar Cliente</span></div>
      </div></a></td>
  </tr>
</table>
  <span class="title">

  </span>
  <span class="title">

  </span>
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#666666" class="title"><div align="center">Editar Obras RB </div></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="textomenorpreto"><b>EMBARCAÇÃO:</b></div>
      </div></td>
      <td colspan="3" bgcolor="#CCCCCC"><div class="solicitacao">
        <div class="texto">
          <input name="embarcacao" type="text" class="required" id="embarcacao" value="<?php echo $row["embarcacao"] ?>" size="100" />
          
          <input name="id" type="hidden" class="required" id="id" value="<?php echo $row["id"] ?>" size="100" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>REGISTRO RBNA:</b></div>
    </div></td>
    <td width="33%" bgcolor="#F7F7F7"><div class="solicitacao">
      <label for="nome"></label>
      <label for=""></label>
      <input name="registro" type="text" class="required" id="registro" value="<?php echo $row["registro"] ?>" />
    </div></td>
    <td width="13%" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>Nº CASCO:</b></div>
    </div></td>
    <td width="33%" bgcolor="#F7F7F7"><div class="solicitacao">
      <label for="nome3"></label>
      <label for=""></label>
      <input name="numerocasco" type="text" id="textfield" value="<?php echo $row["numerocasco"] ?>" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF">&nbsp;</td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <div class="texto"></div>
    </div></td>
    <td bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>ARMADOR:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">
      <label for="numerocasco"></label>
    </span> 
        <input name="armador" type="text" class="required" id="textfield4" value="<?php echo $row["armador"] ?>" size="45" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>ESCRITÓRIO REGIONAL:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <div class="texto">
        <label for="regiao"></label>
        <select name="regiao" id="regiao"  class="required">
          <option selected="selected" value="<?php echo $row["regiao"] ?>"><?php echo $row["regiao"] ?></option>
          <option value="">---</option>
          <option value="Rio de Janeiro">Rio de Janeiro</option>
          <option value="Manaus">Manaus</option>
          <option value="Belem">Belem</option>
          </select>
        </div>
    </div></td>
    <td bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>TIPO EMBARCAÇÃO:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">
      <label for="embarcacao"></label>
    </span>
        <label for="tipoembarcacao"></label>
        <select name="tipoembarcacao" id="tipoembarcacao" class="required">
         <option selected="selected" value="<?php echo $row["tipoembarcacao"] ?>"><?php echo $row["tipoembarcacao"] ?></option>
          <option value="">---</option>
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
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>REGIME DEPAGAMENTO:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <label for="ramal"></label>
      <label for="foto"></label>
      <span class="texto">
        <select name="pagamento" id="pagamento">
          <option selected="selected" value="<?php echo $row["pagamento"] ?>"><?php echo $row["pagamento"] ?></option>
          <option value="">---</option>
          <option value="Evento">Evento</option>
          <option value="Manutenção">Manutenção</option>
          </select>
      </span></div></td>
    <td bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>AREA DE NAVEGAÇÃO:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <input name="areanavegacao" type="text" id="textfield8" value="<?php echo $row["areanavegacao"] ?>" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="texto">
      <div class="textomenorpreto">BANDEIRA:</div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <label for="armador"></label>
      <input name="bandeira" type="text" class="required" id="textfield9" value="<?php echo $row["bandeira"] ?>" />
    </div></td>
    <td bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>COMPRIMENTO (L)</b>:</div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <input name="comprimento" type="text" id="textfield5" value="<?php echo $row["comprimento"] ?>" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>AB:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <input name="ab" type="text" id="textfield6" value="<?php echo $row["ab"] ?>" />
    </div></td>
    <td bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>KW:</b></div>
    </div></td>
    <td bgcolor="#F7F7F7"><div class="solicitacao">
      <input name="kw" type="text" id="textfield7" value="<?php echo $row["kw"] ?>" />
    </div></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>ANEXAR PDF:</b></div>
    </div></td>
    <td bgcolor="#CCCCCC"><a href="editar_pdf_obras_rb.php?id=<?php echo $row["id"] ?>">
      <div class="solicitacao">
        <div align="center">
          <div class="textomenor"><img src="../imagens/pdf.png" alt="" width="20" height="20" align="absmiddle" /> Alterar PDF</div>
        </div>
      </div>
    </a></td>
    <td colspan="2" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>INFORMAÇÕES ADCIONAIS</b></div>
    </div></td>
    <td colspan="3" bgcolor="#CCCCCC"><table width="100%" border="0" cellpadding="2" cellspacing="2">
      <tr>
        <td width="8%" bgcolor="#999999"><div align="center">
          <input name="forarbna" type="checkbox"  id="forarbna" value="1"  <?php if ($row["forarbna"] == 1){

   echo " checked='checked'";

}
?>/>
        </div>
          <label for="forarbna"></label></td>
        <td width="42%" bgcolor="#EAEAEA"><span class="textomenorpreto">Embarcação que não está no RBNA</span></td>
        <td width="8%" bgcolor="#000000"><div align="center">
          <input  name="certrbna" type="checkbox" id="certrbna" value="1" <?php if ($row["certrbna"] == 1){

   echo " checked='checked'";

}
?>/>
        </div>
          <label for="certrbna"></label></td>
        <td width="42%" bgcolor="#EAEAEA" class="textomenorpreto">Embarcação certificada pelo RBNA</td>
        </tr>
    </table>      <label for="obs"></label></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
      <div class="textomenorpreto"><b>OBS:</b></div>
    </div></td>
    <td colspan="3" bgcolor="#F7F7F7"><div class="solicitacao">
      <textarea name="obs" id="obs" cols="80" rows="5"><?php echo $obs ?></textarea>
    </div></td>
  </tr>
  <tr>
    <td width="9%" bgcolor="#CCCCCC"><div class="solicitacao">
      <label for="contratante"></label>
      <input name="cadastrar" type="submit" id="cadastrar" value="Atualizar" />
    </div></td>
    <td width="12%" bgcolor="#DFDFDF"><div class="solicitacao">
      <label for="ab"></label>
      <input type="reset" onclick="javascript:window.close()" name="button" id="button" value="Cancelar" />
    </div></td>
    <td colspan="3" bgcolor="#F7F7F7"><div class="solicitacao">
      <label for="comprimento"></label>
    <div align="center" class="aviso">
        <?php
            if(isset ($_GET["msg"])){
                echo $_GET["msg"];
            }
        ?>
      </div></div><div align="center" class="aviso"></div></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
  <input type="hidden" readonly="readyonly" name="idsuite" value="<?php echo $row["id"] ?>"/>
  <br/>
</form>
</body>
</html>