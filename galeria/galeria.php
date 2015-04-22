<?php
   $pasta   = 'imagens/aplicacoes-eletricas/aneis-coletores';
   $imagens = glob("$pasta/{*jpg,*png,*gif}", GLOB_BRACE);

   echo '<div class="pics" id="galeria1">'; // Atente-se ao id que você usa

   foreach($imagens as $img){
       echo "<img src='$img' alt='$img' width='200' height='200' />\n";
   }

   echo '</div>';
?>