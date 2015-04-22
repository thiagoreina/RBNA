<?php


// Se o usuário clicou no botão cadastrar efetua as ações

include_once '../../fontes/conexao.php';
//----------GERAR SENHA----------//

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false)
{
$lmin = 'abcdefghijklmnopqrstuvwxyz';
$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$num = '1234567890';
$simb = '!@#$%*-';
$retorno = '';
$caracteres = '';

$caracteres .= $lmin;
if ($maiusculas) $caracteres .= $lmai;
if ($numeros) $caracteres .= $num;
if ($simbolos) $caracteres .= $simb;

$len = strlen($caracteres);
for ($n = 1; $n <= $tamanho; $n++) {
$rand = mt_rand(1, $len);
$retorno .= $caracteres[$rand-1];
}
return $retorno;
}


//----------FIM GERAR SENHA----------//


if(!isset ($_POST["gerarsenha"])){
		$senha = "";
		$senhamd5 = "";
		$enviaemail = 0;
}else{
		$senha = geraSenha(6, false, true);
		$senhamd5 = md5($senha);
		$enviaemail = 1;
}
	// Recupera os dados dos campos
	$razao =	 		$_POST["razao"];
	$fantasia = 		$_POST["fantasia"];
	$cnpj = 			$_POST["cnpj"];
	$cpf = 				$_POST["cpf"];
	$inscmunicipal = 	$_POST["inscmunicipal"];
	$inscestadual =		$_POST["inscestadual"];
	$telefone =			$_POST["telefone"];
	$fax =				$_POST["fax"];
	$email =			$_POST["email"];
	$site =				$_POST["site"];
	
	
$sqlmatriz = "insert into matriz values(null,
   '".$razao."',
	 '".$fantasia."',
	  '".$cnpj."',
	   '".$cpf."',
	    '".$inscmunicipal."',
		 '".$inscestadual."',
		  '".$telefone."',
		  '".$fax."',
		   '".$email."',
		   '".$site."'
		   )";
	
	//Endereço Correspondencia
	$logradouro =	$_POST["logradouro1"]." ".$_POST["logradouro2"];
	$cep =			$_POST["cep"];
	$numero =		$_POST["numero"];
	$complemento =	$_POST["complemento"];
	$bairro =		$_POST["bairro"];
	$estado = 		$_POST["estado"];
	$cidade =		$_POST["cidade"];
	$pais =			$_POST["pais"];
	

	
	//Responsável
	
	$respnome =			$_POST["respnome"];
	$respemail =		$_POST["respemail"];
	$respcpf =			$_POST["respcpf"];
	$respcargo =		$_POST["respcargo"];
	$resptelefone = 	$_POST["resptelefone"];
	$respcelular =		$_POST["respcelular"];
	
$sqlresponsavel = "insert into responsavel values(null, null,@IDMatriz,
   '".$respnome."',
	 '".$respemail."',
	  '".$respcpf."',
	   '".$respcargo."',
	    '".$resptelefone."',
		 '".$respcelular."',
		 '".$senhamd5."'
		   )";
	
	
		if(!isset ($_POST["checkbox"])){
		$repetir = 0;
	}else{
		$repetir = 1;
	}		
	
	if($repetir==0){
		$msg = "nao repetir</br></br>";
		
	$cobrlogradouro =	$_POST["cobrlogradouro"]." ".$_POST["cobrlogradouro2"];
	$cobrcep =			$_POST["cobrcep"];
	$cobrnumero =		$_POST["cobrnumero"];
	$cobrcomplemento =	$_POST["cobrcomplemento"];
	$cobrbairro =		$_POST["cobrbairro"];
	$cobrestado = 		$_POST["cobrestado"];
	$cobrcidade =		$_POST["cobrcidade"];
	$cobrpais =			$_POST["cobrpais"];
	
	
		
		   
		   $sqlendcorresp = "insert into endereco values(null, 1, null, @IDMatriz,
    '".$logradouro."',
	 '".$cep."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$estado."',
		  '".$cidade."',
		   '".$pais."'
		   )";
		   
		   $sqlendcobr = "insert into endereco values(null, 2, null, @IDMatriz, '".$cobrlogradouro."',
	 '".$cobrcep."',
	  '".$cobrnumero."',
	   '".$cobrcomplemento."',
	    '".$cobrbairro."',
		 '".$cobrestado."',
		  '".$cobrcidade."',
		   '".$cobrpais."'
		   )";
		   
		
		
		
	}else{
	$msg = "REPETIIIR!!!</br></br>";
			   

	
	
	$sqlendcorresp = "insert into endereco values(null, 1, null, @IDMatriz, '".$logradouro."',
	 '".$cep."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$estado."',
		  '".$cidade."',
		   '".$pais."'
		   )";
		   
		   $sqlendcobr = "insert into endereco values(null, 2, null, @IDMatriz, '".$logradouro."',
	 '".$cep."',
	  '".$numero."',
	   '".$complemento."',
	    '".$bairro."',
		 '".$estado."',
		  '".$cidade."',
		   '".$pais."'
		   )";
		   
		
	
	}

	
	
	$sql = $sqlmatriz." SELECT LAST_INSERT_ID() INTO @IDMatriz ".$sqlendcorresp." ".$sqlendcobr." ".$sqlresponsavel." ";
	
	$sqlid = " SELECT LAST_INSERT_ID() INTO @IDMatriz ";
	/*	
	echo "Query = ".$sql."<br><br>";
	
	echo "Senha e email.<br><br>";
	echo "Email = ".$respemail."<br><br>";
	echo "Senha = ".$senha."<br><br>";
	*/

if (!$con)
  {
     die('Nao conectado' . mysql_error());
  }
  echo "Conectado<br>";
  

			
		if(mysql_query($sqlmatriz, $con)){
			}
					
		if(mysql_query($sqlid, $con)){
			}
			
		if(mysql_query($sqlendcorresp, $con)){
			}
			
		if(mysql_query($sqlendcobr, $con)){
			}
			
		if(mysql_query($sqlresponsavel, $con)){
			 $msg = "Salvo com Sucesso!.<br>";
			}
			
			else{
				echo mysql_errno($con) . ": " . mysql_error($con) . "<br>";
				 $msg = "Erro <br>";	
			}
			
			
			 //----------Enviar email com senha----------//
				
if($enviaemail==1){
	// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = "RBNA - Sociedade Classificadora";
$emailremetente    =  "nao-responder@rbna.org.br";
$emailsender		= "nao-responder@rbna.org.br";
$emaildestinatario = $respemail; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto          = "[Intranet RBNA] - Recuperação de Senha";
$quebra_linha       = '\n';
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>[Acesso ao Controle de Vistoria RBNA] </P>
<p>Esta Mensagem é Automática, Favor não Respoder</p> 
<p><b>Foi Gerada uma senha para acesso ao nosso sistem de Acompanhamento de Vistorias</b>
<p><b>Usuario: '.$respmail.'</b> 
<p><b>Senha: '.$senha.'</b> 
<p>http://www.rbna.org.br/intranet/admin/status</p>
<hr>';
;


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
//$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 


 if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emaildestinatario)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
    
 
 }
	
}else{
echo "Não envia email ";	
}
				//----------Fim Enviar email com senha----------//		
			
?>