<?php


// Se o usuário clicou no botão cadastrar efetua as ações

include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_obras.php';
//----------GERAR SENHA----------//
if(isset ($_POST["gerarsenha"])){
	$idresp = $_POST["id"];
	$respemail = $_POST["email"];
	$id_cliente = $_POST["id_cliente"];
	$pagina = $_POST["pagina"];
	
	
	
	
	
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




	
		$senha = geraSenha(6, false, true);
		$senhamd5 = md5($senha);
		$enviaemail = 1;
}

$sql = "UPDATE responsavel SET senha = '".$senhamd5."' WHERE idresponsavel = ".$idresp;

if(mysql_query($sql, $con)){
			
			
	 //----------Enviar email com senha----------//
				
if($enviaemail==1){

 $emailsender = "no-reply@rbna.org.br";// . $_SERVER[HTTP_HOST];
 /* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
$corpo = "Foi gerada uma senha no sitema de controle de Vistorias RBNA<br>
Acesse em:<br>
<a href='http://www.rbna.org.br/status' target='_blank'>www.rbna.org.br/status</a><br>
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
$msg = base64_encode("Senha Gerada Com Sucesso");
header("location:".$pagina."?id=".$id_cliente."&msg=".$msg);

/*echo "Email enviado!<br>";	
echo "Foi para: ".$emaildestinatario."<br>";
echo "Com Cópia: ".$comcopia."<br>";
echo "Com Cópia Oculta: ".$comcopiaoculta."<br>";
echo "Responder Para : ".$reply."<br>";
*/
}else{
	$msg = base64_encode("Senha Gerada Com Sucesso mas não enviou o email");
header("location:".$pagina."?id=".$id_cliente."&msg=".$msg);
}
				//----------Fim Enviar email com senha----------//		
			
}

?>