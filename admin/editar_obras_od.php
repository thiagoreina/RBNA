<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Obra OD</title>


        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/maskedinput-1.1.2.pack.js"></script>

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
                $("#registro").mask("OD999");
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
        $id = $_GET["id"];
		
        include_once '../fontes/conexao.php';

        $sql = "select * from obras_od where id = ".$id;

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);
		
		
		$obs = str_replace("<br />", "", $row["obs"]);
		$servico = str_replace("<br />", "", $row["servico"]);
	
	
	
        ?>
<body bgcolor="#EEEEEE">  
<form id="form" name="editar_form" action="att_obras_od.php" method="post">
  <span class="title">

  </span>
  <span class="title">

  </span>

  <table width="90%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">Editar Obra <?php echo $row["registro"] ?> </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">EMBARCAÇÃO:</div>
      </div></td>
      <td colspan="3" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input name="embarcacao" type="text" id="embarcacao" size="100" value="<?php echo $row["embarcacao"] ?>"  class="required" />
          <input name="id" type="hidden" id="id" value="<?php echo $row["id"] ?>" readonly="readyonly"/>
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">REGISTRO RBNA:</div>
      </div></td>
      <td width="17%" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="nome2"></label>
        <label for="label"></label>
        <input name="registro" type="text" class="required" value="<?php echo $row["registro"] ?>"  id="registro" />
      </div></td>
      <td width="28%" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">Nº CASCO:</div>
      </div></td>
      <td width="33%" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="nome4"></label>
        <label for="label"></label>
        <input type="text" name="numerocasco" value="<?php echo $row["numerocasco"] ?>"  id="textfield3" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpreto"><span class="textomenorpretoB">CONTRATANTE:</span></div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="texto">
          <input type="text" name="contratante" id="textfield9" value="<?php echo $row["contratante"] ?>"  class="required" />
        </div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">ARMADOR:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao"><span class="aviso">
        <label for="numerocasco2"></label>
        </span>
        <input type="text" name="armador" id="textfield10" value="<?php echo $row["armador"] ?>"  class="required" />
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
            <option selected="selected" value="<?php echo $row["regiao"] ?>"><?php echo $row["regiao"] ?></option>
            <option value="">---</option>
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
          <option value="Saveiro">Saveiro</option>       </select>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpreto"><span class="textomenorpretoB">REGIME DEPAGAMENTO:</span></div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="ramal2"></label>
        <label for="foto2"></label>
        <span class="texto">
        <select name="pagamento" id="pagamento">
          <option selected="selected" value="<?php echo $row["pagamento"] ?>"><?php echo $row["pagamento"] ?></option>
          <option value="">---</option>
          <option value="Evento">Evento</option>
          <option value="Manutenção">Manutenção</option>
        </select>
      </span></div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">QTD. DIAS:</div>
      </div></td>
      <td bgcolor="#E9E9E9"><div class="solicitacao">
        <input type="text" name="qtddias" value="<?php echo $row["qtddias"] ?>" id="textfield11" />
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
              <td width="4%" bgcolor="#999999"><input name="forarbna" type="checkbox"  id="forarbna" value="1"  <?php if ($row["forarbna"] == 1){

   echo " checked='checked'";

}
?>/>                <label for="forarbna"></label></td>
              <td width="23%" bgcolor="#EAEAEA"><span class="textomenorpreto">Embarcação que não está no RBNA</span></td>
              <td width="4%" bgcolor="#000000"><input  name="certrbna" type="checkbox" id="certrbna" value="1" <?php if ($row["certrbna"] == 1){

   echo " checked='checked'";

}
?>/>                <label for="certrbna"></label></td>
              <td width="22%" bgcolor="#EAEAEA" class="textomenorpreto">Embarcação certificada pelo RBNA</td>
              <td width="4%" bgcolor="#FF0000"><input name="inadimplentes" type="checkbox"  id="inadimplentes" value="1" <?php if ($row["inadimplentes"] == 1){

   echo " checked='checked'";

}
?>/>                <label for="inadimplentes"></label></td>
              <td width="21%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
              <td width="4%" bgcolor="#FF00FF"><input name="insatisfeitos" type="checkbox" id="insatisfeitos" value="1"  <?php if ($row["insatisfeitos"] == 1){

   echo " checked='checked'";

}
?>/>                <label for="insatisfeitos"></label></td>
              <td width="18%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
            </tr>
          </table>
        </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">SERVIÇO:</div>
      </div></td>
      <td colspan="3" bgcolor="#E9E9E9"><span class="solicitacao">
        <textarea name="servico" id="servico" cols="80" rows="5"><?php echo $servico ?></textarea>
      </span></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#E9E9E9"><div class="solicitacao">
        <div class="textomenorpretoB">OBS:</div>
      </div></td>
      <td colspan="3" bgcolor="#E9E9E9"><span class="solicitacao">
        <textarea name="obs" id="obs" cols="80" rows="5"><?php echo $obs ?></textarea>
      </span></td>
    </tr>
    <tr>
      <td width="9%" bgcolor="#E9E9E9"><div class="solicitacao">
        <label for="contratante2"></label>
        <input type="submit" name="cadastrar2" value="Cadastrar" />
      </div></td>
      <td width="13%" bgcolor="#E9E9E9">&nbsp;</td>
      <td colspan="3" bgcolor="#E9E9E9"><div align="center" class="aviso"></div></td>
    </tr>
  </table>
  <p><br/>
  </p>
</form>
</body>
</html>