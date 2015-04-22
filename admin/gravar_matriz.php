<?php


// Se o usuário clicou no botão cadastrar efetua as ações

include_once '../../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';
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
		   '".$site."',
		   0,
		   0)";
	
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
	
	if (empty ($_POST["respemail"])){
		$respemail = NULL;
		
	}else{
	$respemail =		$_POST["respemail"];
	};
	
	
		if (empty ($_POST["respcpf"])){
		$respcpf = NULL;
		
	}else{
	$respcpf =		$_POST["respcpf"];
	};
	
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
				echo mysql_errno($con) . ": " . mysql_error($con) . "<br>".
				$sqlmatriz. "<br>"
				.$sqlid. "<br>"
				.$sqlendcorresp. "<br>"
				.$sqlendcobr. "<br>"
				.$sqlresponsavel. "<br>"
				
				
				;
				 $msg = "Erro <br>";	
			}
			
			
			 //----------Enviar email com senha----------//
				
if($enviaemail==1){

 $emailsender = "no-reply@rbna.org.br";// . $_SERVER[HTTP_HOST];
 /* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
$corpo = "Foi gerada uma senha no sitema de controle de Vistorias RBNA<br>
		  login: ".$respemail."<br>
		  Senha: ".$senha."<br>
		  <br>
		  <br>
		  <i>esta é uma mensagem automatica, favor nao responder, caso nao consiga acessar o sistema, favor entrar em contato com o nosso setor de vistorias<i>";
		  
$assunto = "Sistema de Controle de Vistoria";
$comcopiaoculta = "senha@rbna.org.br";
$comcopia = "";
$reply = "senha@rbna.org.br";

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = 'RBNA';
$emailremetente    = $emailsender;
$emaildestinatario = $respemail;
$mensagemHTML          = $corpo;
 
 
/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Cc: " . $comcopia . $quebra_linha;
$headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $reply . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */

//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}
header("location:cad_matriz.php?msg=Cadastrado Com Sucesso");



/*echo "Email enviado!<br>";	
echo "Foi para: ".$emaildestinatario."<br>";
echo "Com Cópia: ".$comcopia."<br>";
echo "Com Cópia Oculta: ".$comcopiaoculta."<br>";
echo "Responder Para : ".$reply."<br>";
*/
}else{
	header("location:cad_matriz.php?msg=Cadastrado Com Sucesso");
}
				//----------Fim Enviar email com senha----------//		
			
?>