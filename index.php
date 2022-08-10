<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
<head>
<?php 
	$DIR = basename(__DIR__);
	require('app/rota.php');
	require('app/head.php');
	require('app/editor.php');
	require('app/logar.php');
	if(!empty($SA)):
		echo '<link rel="stylesheet" href="'.LIB.'editor.css'.V.'"/>';
	endif;
	if(!empty($rota)||!empty($SA)){
		echo '<link rel="stylesheet" href="'.LIB.'out.css'.V.'"/>';
	}
	echo (isset(SEO['head']))?stripslashes(SEO['head']):'';
?>
</head>
<body>
<section id="flow">
<main id="main">
<?php
	if(!empty($SA)):
		include("app/modal.php");
	endif;
	if(!empty($rota)):
		if(file_exists("$OUT/$rota.php")):
			include("$OUT/$rota.php");
		else:
			include("$OUT/404.php");
		endif;
	else:
		//include("$IN/alert.php");
		include("$IN/header.php");
		include("$IN/promise.php");
		include("$IN/secured.php");
		include("$IN/formula.php");
		include("$IN/offers.php");
		include("$IN/warranty.php");
		include("$IN/offers2.php");
		include("$IN/doubt.php");
		include("$IN/whatsapp.php");
	endif;
?>
</main>
<?php 
	if(!empty($rota)&&$rota!='login'||empty($rota)):
		include("$IN/footer.php");
	endif;
?>
</section>
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script>  
<?php tagBody(); if(isset($SA)): ?>
<div id="adm">
	<button class="reset" onclick="reset();" uk-tooltip="Resetar cache do site!"></button>
	<form method="post">
		<button class="exit" type="submit" name="exitapp" value="true" uk-tooltip="Sair do modo editor!"></button>
	</form>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.js"></script>
<script src="<?=LIB.'editor.js'.V?>"></script>
<?php endif;?>
<?=(isset(SEO['body']))?stripslashes(SEO['body']):'';?>
</body>
</html>