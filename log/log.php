<div align="center">
  <table width="50%" border="1">
    <tr>
      <td colspan="5" bgcolor="#00FF00">Logou</td>
    </tr>
    <tr>
      <td>Login</td>
      <td>Data</td>
      <td>IP</td>
      <td>Entrou</td>
      <td>Quantidade</td>
    </tr>
    
  <?php

 include_once '../fontes/conexao.php';
 

$sql = "select l.*, u.*  from log_acesso l, usuario u where l.id_login = u.id_usuario and logou = 1  GROUP BY id_login ORDER BY  data DESC";

$result = mysql_query($sql,$con);
$numUsuarios = mysql_num_rows($result);


 while ($row = mysql_fetch_array($result)) { 
	$login = $row["login"];
	$id_login = $row["id_login"];
	$data = $row["data"];
	$logou = $row["logou"];
	$ip = $row["ip"];
	$dataformat = date("d/m/Y", strtotime($data));
	$horaformat = date("H:i:s", strtotime($data));
		if($logou == 1){
		$logou = "<img src='../imagens/accept.png' alt='Logou' width='20' height='20' align='absmiddle' />";
	
	
	
	
$sqlQuant = "select * from log_acesso where id_login = ".$id_login." ORDER by id DESC";

$resultQuant = mysql_query($sqlQuant,$con);
$rowQuant = mysql_fetch_array($resultQuant) ;
$numAcesso = mysql_num_rows($resultQuant);
 

 


 ?>
     <?php 
	
//echo $numAcesso;


	?>
  <tr>
    <td><?php echo $login ?></td>
    <td><?php echo $dataformat. " ás ". $horaformat ?></td>
    <td><?php echo $ip ?></td>
    <td><?php echo $logou ?></td>

    <td><progress max="110" value="<?php echo $numAcesso ?>"></progress><?php echo $numAcesso ?></td>
    </tr>
    

    <?php 

	
  } 



	
}
  ?>   
   
  </table>
  <p>&nbsp;<?php echo $numUsuarios ?></p>
  <table width="50%" border="1">
    <tr>
      <td colspan="4" bgcolor="#FF0000">Nao Logou</td>
    </tr>
    <tr>
      <td>Login</td>
      <td>Data</td>
      <td>IP</td>
      <td>Não Entrou</td>
    </tr>
    <?php

 
 
 $sql = "select * from log_acesso where logou = 0 ORDER BY  data DESC";

$result = mysql_query($sql,$con);



 while ($row = mysql_fetch_array($result)) { 
	$login = $row["login"];
	$data = $row["data"];
	$ip = $row["ip"];
	$logou = $row["logou"];
	$dataformat = date("d/m/Y", strtotime($data));
	$horaformat = date("H:i:s", strtotime($data));
	
	if($logou == 0){
		$logou = "<img src='../imagens/warning.png' alt='Nao logou' width='20' height='20' align='absmiddle' />";
	} 
	

	 
 
 ?>
    <tr>
      <td><?php echo $login ?></td>
      <td><?php echo $dataformat. " ás ". $horaformat ?></td>
      <td><?php echo $ip ?></td>
      <td><?php echo $logou ?></td>
    </tr>
    <?php 
  } 
  
  ?>
  </table>
  <p>&nbsp;</p>
   <p></p>
 
</div>
