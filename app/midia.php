<?php 
	$URL = $_REQUEST["url"];
	$dire = $URL."/midia/d/";
	$path = dir("../midia/d/");
	$h=[];
	while($file = $path->read()):
		if($file!='.'&&$file!='..'):
			$f=explode('.',$file)[0];
			$x=explode('.',$file)[1];
			if($x!='webp'){
				if(file_exists('../midia/c/'.$f.'.webp')){
					$h[]=["$file",1];					
				}else{
					$h[]=["$file",0];						
				}
			}
		endif;
	endwhile;
	$path->close();
	print_r(json_encode($h));
?>