<?php
// Conexão com o banco de dados
include_once '../fontes/conexao.php';
include_once '../validar.php';
include_once '../validar_rh.php';

// Se o usuário clicou no botão cadastrar efetua as ações
if ($_POST['cadastrar']) {
	
	// Recupera os dados dos campos
	$setor =	 	$_POST["setor"];
	$nome =	 		$_POST["nome"]." ".$_POST["sobrenome"];
	$matricula = 	$_POST["matricula"];
	$admissao = 	$_POST["admissao"];
	$data_nasc =	$_POST["data_nasc"];
	$email = 		$_POST["email"];
	$ramal = 		$_POST["ramal"];
	$foto = 		$_FILES["foto"];
	$ficha = 		$_FILES["ficha"];
	$celular =		$_POST["celular"];
	$desligado = 0;

if(!isset ($_POST["gerente"])){
		$gerente = 0;	
	}else{
		$gerente = $_POST["gerente"];
	};


//data nascimento

	$data = explode("/",$data_nasc);
	
	$dia = $data[0];
	$mes = $data[1];
	$ano = $data[2];
	$databd = $ano."-".$mes."-".$dia;
	
	//data admissao
	$dataadm = explode("/",$admissao);
	
	$diaadm = $dataadm[0];
	$mesadm = $dataadm[1];
	$anoadm = $dataadm[2];
	$dataadm = $anoadm."-".$mesadm."-".$diaadm;
	

	// Se a foto estiver sido selecionada
	if (!empty($foto['name'])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto['name'], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../fotos/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto['tmp_name'], $caminho_imagem);
			
	}else{
	$nome_imagem = "nophoto.jpg";
	}
		
		
		if (!empty($ficha['name'])) {
		

		
			// Pega extensão da imagem
			preg_match("/\.(pdf){1}$/i", $ficha['name'], $ext);

        	// Gera um nome único para a imagem
        	$nome_ficha = md5($email) . "." . $ext[1];

        	// Caminho de onde ficará a imagem
        	$caminho_ficha = "../funcionario/ficha/" . $nome_ficha;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($ficha['tmp_name'], $caminho_ficha);
			
	}else{
	$nome_ficha = "nopdf.pdf";
	}
		
		$buscasql = mysql_query("select email from funcionario where email LIKE '".$email."'", $con);
            $contar = mysql_num_rows($buscasql);
             
            if($contar >= 1){
 
$msg = "Erro Ao Gravar: Email Duplicado";
header("location:cad_funcionario.php?msg=".$msg);

}else{
		
			// Insere os dados no banco
			$sql ="INSERT INTO funcionario VALUES ('', ".$setor.", '".$nome."', '".$matricula."', '".$dataadm."', '".$databd."', '".$email."', '".$ramal."', '".$nome_imagem."', '".$nome_ficha."', '".$celular."', ".$gerente.",".$desligado.")";
		
			// Se os dados forem inseridos com sucesso
			if(mysql_query($sql, $con)){
				 $msg = "Salvo com sucesso.";
				 header("location:cad_funcionario.php?msg=".$msg);
			}else{
				$msg = "Erro ao Salvar.";
				 header("location:cad_funcionario.php?msg=".$msg);
				}
		}
	
}
	
?>