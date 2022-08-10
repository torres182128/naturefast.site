<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=5.">
<link rel="icon" href="<?=IMG?>fav.png">
<title><?=(isset(SEO['titulo']))?SEO['titulo']:'';?></title>
<meta name="description" content="<?=(isset(SEO['descricao']))?SEO['descricao']:'';?>">
<meta itemprop="url" content="<?=URL?>">
<link rel="canonical" href="<?=URL?>">
<meta itemprop="image" content="<?=IMG?>logo.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="<?=URL?>">
<meta property="og:title" content="<?=(isset(SEO['titulo']))?SEO['titulo']:'';?>">
<meta property="og:description" content="<?=(isset(SEO['descricao']))?SEO['descricao']:'';?>">
<meta property="og:image" content="<?=IMG?>logo.jpg">
<meta property="og:site_name" content="<?=(isset(SEO['titulo']))?SEO['titulo']:'';?>">
<meta property="og:locale" content="pt_BR">	
<meta name="author" content="Randiclecio Moura">
<meta name="robots" content="index, follow">
<?php 
	function tagHead(){	
	$tagHead = '<link rel="stylesheet" href="'.LIB.'main.css'.V.'"/>
	<link rel="stylesheet" href="'.LIB.'header.css'.V.'"/>';
	echo $tagHead;
	} tagHead();

	function tagBody(){ 
	$tagBody = '<link rel="stylesheet" href="'.LIB.'site.css'.V.'"/>';
	if(isset($SA)){
		$tagBody .= '<link rel="stylesheet" href="'.LIB.'editor.css'.V.'"/>';
	} $tagBody .= '<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.0/dist/css/uikit.min.css">
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.0/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.1/dist/js/uikit-icons.min.js"></script>
	<script src="'.LIB.'main.js'.V.'"></script>'; echo $tagBody; 
	} 
?>

