<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<?php
$cliente = $_POST['cliente'];

$exp = explode(']',$cliente);
echo "Fantasia: ".$exp[1]."<br>";

$id = $exp[0];

$exp2 = explode('[',$id);

echo "Id: ".$exp2[1];

?>


</body>
</html>