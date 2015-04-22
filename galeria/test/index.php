<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<script type="text/javascript" src="../js/jcycle.js" ></script>
<script type="text/javascript" src="../js/jquery.js" ></script>
<script type="text/javascript" src="../js/js.js" ></script>

</head>

<body>
<?php
   $pasta   = 'fotos';
   $imagens = glob("$pasta/{*jpg,*png,*gif}", GLOB_BRACE);

   echo '<div class="pics" id="galeria1">'; // Atente-se ao id que você usa

   foreach($imagens as $img){
       echo "<img src='$img' alt='$img' width='200' height='200' />\n";
   }

   echo '</div>';
?>
</body>
</html>