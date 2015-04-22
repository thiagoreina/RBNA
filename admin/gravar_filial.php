<?php


// Se o usuário clicou no botão cadastrar efetua as ações

include_once '../fontes/conexao.php';

// Recupera os dados dos campos
	$nome =	 		$_POST["nome"];
	$email = 		$_POST["email"];
	$telefone =			$_POST["telefone"];
	$fax =				$_POST["fax"];
	$inscmunicipal = 	$_POST["inscmunicipal"];
	$inscestadual =		$_POST["inscestadual"];
	$idMatriz =				$_POST["idMatriz"];
	
	// CPF ou CNPJ
	$selectcnpj = 		$_POST["selectcpnj"];
	if ($selectcnpj == 1){
	$cnpj = 		$_POST["cnpjcpf"];	
	$cpf = 0;
	}elseif ($selectcnpj == 2){
	$cpf = 			$_POST["cnpjcpf"];
	$cnpj = 0;
	}else{
	$cpf = 0;
	$cnpj = 0;	
	}
	
	
	
$sqlfilial = "insert into filial values(null,0,
   ".$idMatriz.",
	 '".$nome."',
	  '".$email."',
	  '".$cnpj."',
	   '".$cpf."',
	    '".$inscmunicipal."',
		 '".$inscestadual."',
		  '".$telefone."',
		  '".$fax."'
		   )";
	
	//Endereço 
	$logradouro =	$_POST["logradouro1"]." ".$_POST["logradouro2"];
	$cep =			$_POST["cep"];
	$numero =		$_POST["numero"];
	$complemento =	$_POST["complemento"];
	$bairro =		$_POST["bairro"];
	$estado = 		$_POST["estado"];
	$cidade =		$_POST["cidade"];
	$pais =			$_POST["pais"];
	

		//Tipo endereço = 3 = Filial
		   
		   $sqlend = "insert into endereco values(null, 3,  @IDFilial, '".$idMatriz."',
    '".$cep."',
	'".$logradouro."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$cidade."',
		  '".$estado."',
		   '".$pais."'
		   )";
		   
		  

	
	
	$sql = $sqlfilial." SELECT LAST_INSERT_ID() INTO @IDFilial ".$sqlend." ";
	
	$sqlid = " SELECT LAST_INSERT_ID() INTO @IDFilial ";


  

			
		if(mysql_query($sqlfilial, $con)){
			}
					
		if(mysql_query($sqlid, $con)){
			}
			
		if(mysql_query($sqlend, $con)){
	
print "<script type='text/javascript'>";
print "alert('Filial Cadastrada Com Sucesso.')";
print "</script>"; 
print "<script language='javascript'>"; 
print "window.close();";
print "</script>";

			}
			
			else{
				echo mysql_errno($con) . ": " . mysql_error($con) . "<br><br><br><br><br><br>".
				 
				$sqlfilial. "<br>"
				.$sqlid. "<br>"
				.$sqlend. "<br>"
				
				
				;
				 $msg = "Erro <br>";	
			}
			
		
?>