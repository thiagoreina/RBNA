<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link href="fontes/style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="#EEEEEE">

<div align="center">
  <?php
// Conexão com o banco de dados
include_once 'fontes/conexao.php';


// Se o usuário clicou no botão cadastrar efetua as ações

	
	// Recupera os dados dos campos
	$email =	 	$_POST["email"];

		
			// Insere os dados no banco
			$sql ="select * from funcionario where email LIKE '".$email."'";
		$result = mysql_query($sql, $con);
		$row = mysql_fetch_array($result);
		$id = md5($row["id_funcionario"]);
		
			// Se os dados forem inseridos com sucesso
			if($email == $row["email"]){
				
				
		//Envia EMAIL -----------------------------------------------------------
		
$link = "http://www.rbna.org.br/intranet/recuperar_senha.php?id=".$id."&id2=".$row["id_funcionario"]."&86400=".time();
	
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente     = "Recuperação de Senha";
$emailremetente    =  "nao-responder@rbna.org.br";
$emailsender		= "nao-responder@rbna.org.br";
$emaildestinatario = $_POST["email"]; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto          = "[Intranet RBNA] - Recuperação de Senha";
$quebra_linha       = '\n';
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>[Recuperação De Senha RBNA] </P>
<p>Esta Mensagem é Automática, Favor não Respoder</p> 
<p><b>Se você não solicitou a recuperação de Senha, Favor desconsiderar esta mensagem:</b>
<p><b>Clique no Link para a Recuperação de Sua Senha</b>  '.$link.'
<p><b>Este Link Tem Validade de 6 Horas</b></p>
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
//FIM ENVIA EMAIL -----------------------------------------------------------------------------------		
				
				
				
				 $resposta = "Foi enviado um email para <b>".$row["email"]. "</b> Favor verificar sua Caixa e entrada.<br><br> <img src='imagens/alert.png' width='24' height='24' align='absmiddle'/> O Email tem validade de 6 Horas. ";
				 
			}else{
				$resposta = "<img src='imagens/alert.png' width='24' height='24' align='absmiddle'/> O Email <b>".$email."</b> Não Está Cadastrado <img src='imagens/alert.png' width='24' height='24' align='absmiddle'/> ";
				}
			
	?>
  
<span class="textomenorpreto"><?php echo $resposta ?></span></div> 
<p>
</body>
</html>