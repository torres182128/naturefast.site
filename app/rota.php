<?php 
	$URI = str_replace("/index.php","",$_SERVER['REQUEST_URI']);
	$URI = explode("/",$URI);
	$URI = array_values(array_filter($URI));
	$DIR = str_replace('https://','',$DIR);
	$DIR = str_replace('http://','',$DIR);
	$SSL = $_SERVER['REQUEST_SCHEME']."://";
	$LHT = $_SERVER['HTTP_HOST'];
	if($DIR=='public_html'||$DIR==$_SERVER['HTTP_HOST']){
		$DIR='';
		$NAN = $SSL.$_SERVER['HTTP_HOST'];
	}else{
		$NAN = $SSL.$_SERVER['HTTP_HOST']."/$DIR";	
		unset($URI[0]);
		$URI = array_values(array_filter($URI));
	}
	define("URL", "$NAN");
	define("LIB", URL."/libs/");
	define("IMG", URL."/file/");
	$rota = (empty($URI[0]))?'':$URI[0];
	$page = (empty($URI[1]))?'':$URI[1];
	$IN = "./rotas/in";
	$OUT = "./rotas/out";
	
	$index = 'index.php';
	if($LHT=="localhost"):
		define("V", "?v".date("ZHis"));
	else:
		define("V", "?v".date("ymdHis", filectime($index)));
	endif;

	if(!empty($rota)):
		if(!file_exists("$OUT/$rota.php")):
			if(strpos($rota,'?')){
				$rota = explode('?',$rota)[0];
			}else{
				echo '<script>window.location.href = "'.URL.'";</script>';				
			}
		endif;
	endif;

	$MOB = FALSE;
	$UAS = array("iPhone","iPad","Android","webOS","BlackBerry","iPod","Symbian","IsGeneric");
	foreach($UAS as $UA){ 
		if (isset($_SERVER['HTTP_USER_AGENT'])) { 
			if (strpos($_SERVER['HTTP_USER_AGENT'], $UA) !== FALSE) { 
				$MOB = TRUE; $MOD = $UA; break; 
			}			
		}
	}
	if($MOB){ $DIS = "".strtolower($MOD); }else{ $DIS = "desktop"; }
	define("MOB", $DIS);

	$DATA = file_get_contents('./db/data.json');
	$EDX = file_get_contents('./db/edx.json');
	$SEO = file_get_contents('./db/seo.json');
	define("SEO", json_decode($SEO,true));
	define("DATA", json_decode($DATA,true)[1]);

?>
