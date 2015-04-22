<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Obra OH</title>


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
                $("#registro").mask("OH999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999");
				$("#site2").mask("http://?",{placeholder:" "});
                $("#telefone1").mask("(99)9999-9999?9");
				$("#telefone2").mask("(99)9999-9999?9");
                
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

        $sql = "select * from obras_oh where id = ".$id;

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);
		
		
		$obs = str_replace("<br />", "", $row["obs"]);
			
	
	
	
        ?>
<body bgcolor="#EEEEEE">  
<form id="form" name="editar_form" action="att_obras_oh.php" method="post">
  <span class="title">

  </span>
  <span class="title">

  </span>
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="5" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">Editar Obra <?php echo $row["registro"] ?><span class="texto"></span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">CONTRATANTE:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="texto">
        <div class="solicitacao">
          <input name="contratante" type="text" class="required" id="textfield2" value="<?php echo $row["contratante"] ?>" size="100" />
          <input name="id" type="hidden" class="required" id="id" value="<?php echo $row["id"] ?>" size="100" />
          </span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">REGISTRO RBNA:</span></div>
      </div></td>
      <td width="26%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto"><span class="solicitacao">
          <input name="registro" type="text" class="required" id="registro" value="<?php echo $row["registro"] ?>" />
      </span></span></div></td>
      <td width="19%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">AREA DE ATUAÇÃO:</span></div>
      </div></td>
      <td width="37%" bgcolor="#F7F7F7"><div class="solicitacao">
        
                     <select name="tipo_oh" class="required" id="tipo_oh" >
         
                     <?php
                                
                $sqlselect = "select * from tipo_oh where id =".$row["idtipo_oh"];

                $resultselect = mysql_query($sqlselect,$con);

                $rowselect = mysql_fetch_array($resultselect)
                    ?> 
					
				
                    
		<option value="<?php echo $rowselect["id"] ?>"><?php echo $rowselect["tipo_oh"] ?></option>
                    <option value="">----</option>
					<?php
                                
                $sqlarea = "select * from tipo_oh";

                $resultarea = mysql_query($sqlarea,$con);

                while($rowarea = mysql_fetch_array($resultarea)){
                    ?>
                
          		<option value="<?php echo $rowarea["id"] ?>"><?php echo $rowarea["tipo_oh"] ?></option>
               	<?php 
          
                }
				
                ?> 
             
          
         
        </select>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">TELEFONE 1:</span></div>
      </div></td>
      <td width="26%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <input name="telefone1" type="text" class="required" id="telefone1" value="<?php echo $row["telefone1"] ?>" />
        </div>
      </div></td>
      <td width="19%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">TELEFONE 2:</span></div>
      </div></td>
      <td width="37%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <input name="telefone2" type="text"  id="telefone2" value="<?php echo $row["telefone2"] ?>" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">LOCAL:</span></div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <input name="local" type="text" class="required" id="local" value="<?php echo $row["local"] ?>" />
        </div>
      </div></td>
      <td width="19%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">SITE:</span></div>
      </div></td>
      <td width="37%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <input name="site" type="text" id="site" value="<?php echo $row["site"] ?>" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">EMAIL:</span></div>
      </div></td>
      <td width="26%" bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <input name="email" type="text" class="required" id="email" value="<?php echo $row["email"] ?>" />
        </div>
      </div></td>
      <td width="19%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">ESCRITÓRIO REGIONAL:</span></div>
      </div></td>
      <td width="37%" bgcolor="#F7F7F7"><div class="texto">
        <select name="regiao" id="regiao"  class="required">
          <option selected="selected" value="<?php echo $row["regiao"] ?>"><?php echo $row["regiao"] ?></option>
          <option value="">---</option>
          <option value="Rio de Janeiro">Rio de Janeiro</option>
          <option value="Manaus">Manaus</option>
          <option value="Belem">Belem</option>
        </select>
      </span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">REGIME DEPAGAMENTO:</span></div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <select name="pagamento" id="pagamento">
          <option selected="selected" value="<?php echo $row["pagamento"] ?>"><?php echo $row["pagamento"] ?></option>
          <option value="">---</option>
          <option value="Evento">Evento</option>
          <option value="Manutenção">Manutenção</option>
        </select>
      </div>        <a href="editar_logo_obras_oh.php?id=<?php echo $row["id"] ?>"></a><a href="editar_logo_obras_oh.php?id=<?php echo $row["id"] ?>"></a></td>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">QNT. DIAS:</span></div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <input name="qtddias" type="text" id="textfield7" value="<?php echo $row["qtddias"] ?>" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">LOGO:</span></div>
      </div></td>
      <td rowspan="2" bgcolor="#999999"><div class="solicitacao">
        <a href="editar_logo_obras_oh.php?id=<?php echo $row["id"] ?>">
       
          <div align="center">
            <div class="textomenor"><img src="../imagens/alterar.png" alt="" width="20" height="20" align="absmiddle" /> Alterar Logo</div>
        
        </div>
        </a>
        <div class="texto"></div></td>
      <td rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">PDF:</span></div>
      </div></td>
      <td rowspan="2" bgcolor="#999999"><a href="editar_pdf_obras_oh.php?id=<?php echo $row["id"] ?>">
        <div class="solicitacao">
          <div align="center">
            <div class="textomenor"><img src="../imagens/pdf.png" alt="" width="20" height="20" align="absmiddle" /> Alterar PDF</div>
          </div>
        </div>
      </a></td>
    </tr>
    <tr>
      <td colspan="2" rowspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">INFORMAÇÕES ADCIONAIS</span></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#EAEAEA"><div class="solicitacao">
        <table width="100%" border="0" cellpadding="2" cellspacing="2">
          <tr>
            <td width="4%" bgcolor="#999999"><input name="forarbna" type="checkbox"  id="forarbna" value="1"  <?php if ($row["forarbna"] == 1){

   echo " checked='checked'";

}
?>/>              <label for="forarbna"></label></td>
            <td width="20%" bgcolor="#EAEAEA"><span class="textomenorpreto">Embarcação que não está no RBNA</span></td>
            <td width="5%" bgcolor="#000000"><input  name="certrbna" type="checkbox" id="certrbna" value="1" <?php if ($row["certrbna"] == 1){

   echo " checked='checked'";

}
?>/>              <label for="certrbna"></label></td>
            <td width="21%" bgcolor="#EAEAEA" class="textomenorpreto">Embarcação certificada pelo RBNA</td>
            <td width="4%" bgcolor="#FF0000"><input name="inadimplentes" type="checkbox"  id="inadimplentes" value="1" <?php if ($row["inadimplentes"] == 1){

   echo " checked='checked'";

}
?>/>              <label for="inadimplentes"></label></td>
            <td width="19%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente inadimplente</td>
            <td width="4%" bgcolor="#FF00FF"><input name="insatisfeitos" type="checkbox" id="insatisfeitos" value="1"  <?php if ($row["insatisfeitos"] == 1){

   echo " checked='checked'";

}
?>/>              <label for="insatisfeitos"></label></td>
            <td width="23%" bgcolor="#EAEAEA" class="textomenorpreto">Cliente insatisfeito</td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">SERVIÇO:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><span class="solicitacao">
        <div class="texto"><span class="solicitacao">
          <textarea name="servico" id="servico" cols="80" rows="5"><?php echo $row["servico"] ?></textarea>
        </span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto"><span class="textomenorpreto">OBS:</span></div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="texto"><span class="solicitacao">
        <textarea name="obs" id="obs" cols="80" rows="5"><?php echo $row["obs"] ?></textarea>
      </span></div></td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#DFDFDF"><div class="solicitacao">
        <input type="submit" name="Cadastrar2" id="Cadastrar2" value="Cadastrar" />
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><label for="bandeira"></label>
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
  <p><br/>
  </p>
</form>
</body>
</html>