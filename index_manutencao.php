<?php include_once 'verifica_logado.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Efetuar Login</title>
<link href="fontes/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:800,
		pauseTime:3500,
		startSlide:1, 
		directionNav:false,
		directionNavHide:false, 
		controlNav:false, 
		controlNavThumbs:false, 
		pauseOnHover:true, 
		manualAdvance:false, 
		captionOpacity:0.6, 
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} 
	});
});
</script>

<style type="text/css">
<!--

.verdana {
	font-family: Verdana, Geneva, sans-serif;
	color: #333;
	font-size: 14px;
}
.title {
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	color: #FFF;
}
.aviso {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #F00;
}

a:link {
	color: #FFF;
}
a:visited {
	color: #FFF;
}
a:hover {
	color: #FFF;
}
a:active {
	color: #FFF;
}

-->
</style>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body bgcolor="#EEEEEE" background="imagens/bg2.jpg" class="bg">
<div align="center" class="divlogin" >
  <form name="login" method="post" action="verificalogin.php">
    <div align="center"><span class="textomenorpretoB" style="text-align:center"> <?php
            if(isset ($_GET["msg"])){
                echo "<img src='imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/> ". $_GET["msg"]." <img src='imagens/alert.png'  alt='' width='15' height='15' align='absmiddle'/>";
            }
        ?>
      </span><br>
      <table width="306" border="0" cellpadding="3" cellspacing="3">
        <tr>
          <td><div align="center"><img src="imagens/manutencao.png"  alt="" width="78" height="78" align="absmiddle"/><span class="texto">Em manutenÇÃo</span></div></td>
        </tr>
      </table>
    </div>
  </form>
</div>
</body>
</html>