<body>
<?php
// PDO connect *********

function connect() {
    return new PDO('mysql:host=mysql05.rbna.org.br;dbname=rbna5', 'rbna5', 'mysqlmaster', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM matriz WHERE fantasia LIKE (:keyword) ORDER BY fantasia ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['fantasia']);
	
		
		
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'",'['.$rs['idMatriz'].'] '.$rs['fantasia']).'\')" >'.$country_name.'</li>';

	
}
?>