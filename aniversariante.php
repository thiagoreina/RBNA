<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<p>
  <?php
 include_once 'validar.php';
include_once 'fontes/conexao.php';

$sql = "select * from funcionario";
$result = mysql_query($sql, $con);
while ($row = mysql_fetch_array ($result)){

$datanasc = $row["data_nasc"];
$nome = $row["nome"];

	

	$data = explode("-",$datanasc);
	
	$ano = $data[0];
	$mes = $data[1];
	$dia = $data[2];
	
	$mesatual = date("m");
	$diaatual = date("d");


    switch ($mesatual) {
    case "01": $mesnome = "Janeiro"; break;
    case "02": $mesnome = "Fevereiro"; break;
    case "03": $mesnome = "Março"; break;
    case "04": $mesnome = "Abril"; break;
    case "05": $mesnome = "Maio"; break;
    case "06": $mesnome = "Junho"; break;
    case "07": $mesnome = "Julho"; break;
    case "08": $mesnome = "Agosto"; break;
    case "09": $mesnome = "Setembro"; break;
    case "10": $mesnome = "Outubro"; break;
    case "11": $mesnome = "Novembro"; break;
    case "12": $mesnome = "Dezembro"; break;
    };
     
     



	if ($dia&$mes == $diaatual&$mesatual ){
		echo "Hoje o dia é de ".$nome. "<br>";
		}elseif ($mes == $mesatual){
	echo $nome." <br>";
	}elseif ($mes <> $mesatual){
		echo "No mês de ".$mesnome." não há aniversariantes."; break;
	}

}

?>
</p>
</body>
</html>