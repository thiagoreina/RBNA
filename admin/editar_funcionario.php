<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Funcionário</title>


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
                $("#data").mask("99/99/9999");
				$("#admissao").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");
				$("#cep").mask("99.999-999");
                $("#tel").mask("(99)9999-9999?9");
                
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

<body bgcolor="#EEEEEE">
<form id="form" name="editar_form" action="att_funcionario.php" method="post">
  <table width="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
      <td colspan="4" bgcolor="#666666"><div class="solicitacao">
        <div align="center" class="title">
          <?php 
include_once '../validar.php';
include_once '../validar_rh.php';
?>
          <?php
        $id = $_GET["id"];
		
        include_once '../fontes/conexao.php';

        $sql = "select * from funcionario where id_funcionario = ".$id;

        $result = mysql_query($sql,$con);

        $row = mysql_fetch_array($result);
		
		$nome = $row["nome"] ;
		
		$data_nasc = $row["data_nasc"];
		$admissao = $row["admissao"];
		
		
		//Data de nascimento
		
		$data = explode("-",$data_nasc);
	
	$ano = $data[0];
	$mes = $data[1];
	$dia = $data[2];
	$dataedit = $dia.$mes.$ano;
	
	//Data de admissao
		$dataadm = explode("-",$admissao);
	
	$anoadm = $dataadm[0];
	$mesadm = $dataadm[1];
	$diaadm = $data[2];
	$dataadm = $diaadm.$mesadm.$anoadm;
	
	
	
        ?>
          Editar Funcionarios</div>
      </div></td>
    </tr>
    <tr>
      <td width="25%" bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Nome:</div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="solicitacao">
        <input type="hidden" name="id" value="<?php echo $row["id_funcionario"] ?>"/>
        <label for="nome"></label>
        <span class="aviso">
          <input name="nome" type="text" class="required" id="nome" value="<?php echo $row["nome"] ?>" size="25" />
        </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Setor:</div>
      </div></td>
      <td bgcolor="#F7F7F7"><span class="aviso">
        <div class="solicitacao">
          <label>
      <select name="setor" class="required" id="setor" >
           <?php
                                
                $sqlselect = "select * from setor where id =".$row["id_setor"];

                $resultselect = mysql_query($sqlselect,$con);

                $rowselect = mysql_fetch_array($resultselect)
                    ?> 
					
				
                    
		<option value="<?php echo $rowselect["id"] ?>"><?php echo $rowselect["setor"] ?></option>
<option value="">----</option>
       <?php
               
                
                $sql2 = "select * from setor ORDER BY setor ";

                $result2 = mysql_query($sql2,$con);

                while($row2 = mysql_fetch_array($result2)){
                    ?>
       <option value="<?php echo $row2["id"] ?>"/>
       <?php echo $row2["setor"] ?>
       <?php
                }

                ?>
</select>

     </label>
        </div></td>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Matricula:</div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto">
          <input name="matricula" type="text" class="required" id="matricula" value="<?php echo $row["matricula"] ?>" size="25" />
        </div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Data de Nascimento:</div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">
        <label for="textfield2"></label>
        <input name="data_nasc" type="text" class="required" id="data" value="<?php echo $dataedit ?>" size="25" />
      </span> </div></td>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">admissão:</div>
      </div></td>
      <td bgcolor="#F7F7F7"><div class="solicitacao">
        <div class="texto"><span class="aviso">
          <input name="admissao" type="text" class="required" id="admissao" value="<?php echo $dataadm ?>" size="25" />
        </span></div>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Email:</div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="solicitacao"><span class="aviso">
        <label for="textfield3"></label>
        <input name="email" type="text" class="required email" id="email" value="<?php echo $row["email"] ?>" size="25" />
      </span></div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <div class="texto">Ramal:</div>
      </div></td>
      <td colspan="3" bgcolor="#F7F7F7"><div class="solicitacao">
        <label for="ramal"></label>
        <input name="ramal" type="text" id="ramal" value="<?php echo $row["ramal"] ?>" size="25" />
        <label for="foto"></label>
      </div></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="texto">
        <div class="solicitacao">Celular:</div>
      </div></td>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <label for="textfield5"></label>
        <input name="celular" type="text" id="tel" value="<?php echo $row["celular"] ?>" size="25" />
      </div></td>
      <td bgcolor="#BCBCBC"><a href="editar_ficha.php?id=<?php echo $row["id_funcionario"] ?>">
        <div class="solicitacao">
          <div align="center">
            <div class="textomenor"><img src="../imagens/pdf.png" width="20" height="20" align="absmiddle" /> Alterar Ficha</div>
          </div>
        </div>
      </a></td>
    </tr>
    <tr>
      <td bgcolor="#DFDFDF"><div class="solicitacao">
        <label for="textfield4"></label>
        <input type="submit" name="cadastrar" value="Salvar" id="cadastrar" />
        <input type="reset" name="button2" id="button2" value="Cancelar" />
      </div></td>
      <td colspan="2" bgcolor="#F7F7F7"><div class="solicitacao">
        <label for="textfield6"></label>
&nbsp;</td>
      
      <td width="25%" bgcolor="#BCBCBC"><a href="editar_foto.php?id=<?php echo $row["id_funcionario"] ?>"><div class="solicitacao"> 
        <div align="center"><div class="textomenor"><img src="../imagens/alterar.png" width="20" height="20" align="absmiddle" /> Alterar Foto</div></div></div>
     </a></td></td>
    </tr>
  </table>
  <input type="hidden" readonly="readyonly" name="idsuite" value="<?php echo $row["id_funcionario"] ?>"/>
  <br/>
</form>



</body>
</html>