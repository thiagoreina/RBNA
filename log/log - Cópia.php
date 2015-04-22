<div align="center">
  <table width="50%" border="1">
    <tr>
      <td colspan="4" bgcolor="#00FF00">Logou</td>
    </tr>
    <tr>
      <td>Login</td>
      <td>Data</td>
      <td>IP</td>
      <td>Entrou</td>
    </tr>
    
  <?php

 include_once '../fontes/conexao.php';
 
 $sql = "select l.*, u.* from log_acesso l, usuario u where l.id_login = u.id_usuario and logou = 1 ORDER BY  data DESC";

$result = mysql_query($sql,$con);



 while ($row = mysql_fetch_array($result)) { 
	$login = $row["login"];
	$data = $row["data"];
	$logou = $row["logou"];
	$ip = $row["ip"];
	$dataformat = date("d/m/Y", strtotime($data));
	$horaformat = date("H:i:s", strtotime($data));
		if($logou == 1){
		$logou = "<img src='../imagens/accept.png' alt='Logou' width='20' height='20' align='absmiddle' />";
	
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

 include_once '../fontes/conexao.php';
 
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
  <p>&nbsp;</p>
</div>
