<?php 
	function data ($h,$t){
		$h = md5($h);
		$h = substr($h, 0, 10).'-'.$t;
		if(!empty(DATA[$h])&&DATA[$h]!=" "){
			return DATA[$h][0];
		}else{
			return 'editar...';
		}
	}
	function hashs($h,$t){
		$h = md5($h);
		return $h = substr($h, 0, 10).'-'.$t;
	}
	function dbe($h,$t,$c){
		$h = md5($h);
		$h = substr($h, 0, 10).'-'.$t;
		$c=($c!='')?' '.$c:'';
		if(!empty($_SESSION["editor"])){
			$z = ' zzz';
		}else{
			$z = '';
		}
		if($t==3){
			$size = 'width="100" height="100"';
			$alt = 'tmp';
			$src = IMG.'img.svg';
			if(!empty(DATA[$h])){
				$siz = ['a'=>'1000','b'=>'750','c'=>'500','d'=>'250'];		
				if(!empty(DATA[$h][3])){
					$size = 'width="'.$siz[DATA[$h][3]].'" height="'.$siz[DATA[$h][3]].'"';					
				}
				$alt = DATA[$h][0];
				$img = explode('/',DATA[$h][1]);
				$ext = explode('.',$img[1])[1];
				if($img[0]==1&&$ext!='gif'){
					$src = URL.'/midia/'.DATA[$h][3].'/'.explode('.',$img[1])[0].'.webp';						
				}else{
					$src = URL.'/midia/'.DATA[$h][3].'/'.$img[1];	
				}
			}
			return 'class="xxx'.$c.$z.'" src="'.$src.'" alt="'.$alt.'" data-id="'.$h.'" '.$size.' uk-img="loading: eager"';
		}elseif($t==2){
			return 'class="xxx'.$c.'" data-id="'.$h.'"';
		}else{
			return 'class="xxx'.$c.$z.'" data-id="'.$h.'"';
		}
	}

	function edx($h){
		if(!empty($_SESSION["editor"])):
			return '<button class="bdx" onClick="bdx(\''.$h.' edx\');"></button>';
		endif;
	}

	$backredirect = '';
	if(!empty($rota)):
		if(file_exists("$OUT/$rota.php")):
			if(!empty(SEO['pages'][$rota])):
				$backredirect = stripslashes(SEO['pages'][$rota]);
			endif;
		endif;
	elseif(!empty(SEO['backredirect'])):
		$backredirect = stripslashes(SEO['backredirect']);
	endif;
?>

<script id="node">
	"index.php" == window.location.href.split("/")[4] && window.history.pushState("object or string", "Title", "./");
	const ss = sessionStorage;
	const sURL = '<?=URL?>'; 
	const MOB = '<?=MOB?>';
	
	var urlBackRedirect = '<?=$backredirect?>';

	(function (b) {
		var a = {
			version: "0.0.1",
			history_api: typeof history.pushState !== "undefined",
			init: function () {
				b.location.hash = "#no-back";
				a.configure();
			},
			hasChanged: function () {
				if (b.location.hash == "#no-back") {
					b.location.hash = "#";
					if (b.location.search == null || b.location.search == undefined || b.location.search ==
						'') {
						b.location.href = urlBackRedirect;
					} else {
						if (location.search.indexOf("src") > -1) {
							var partes = location.search.slice(1).split('&');
							var data = {};
							var new_search = '?';
							partes.forEach(function (parte) {
								var chaveValor = parte.split('=');
								var chave = chaveValor[0];
								var valor = chaveValor[1];
								data[chave] = valor;
							});
							data.src = data.src + "-->back_home";
							new_search += JSON.stringify(data).replace(/[{}"]/g, "").replace(/[:]/g, "=")
								.replace(/[,]/g, "&");
							b.location.href = urlBackRedirect + new_search;
						} else {
							b.location.href = urlBackRedirect + b.location.search + "&src=back_home";
						}
					}
				}
			},
			checkCompat: function () {
				if (b.addEventListener) {
					b.addEventListener("hashchange", a.hasChanged, false);
				} else {
					if (b.attachEvent) {
						b.attachEvent("onhashchange", a.hasChanged);
					} else {
						b.onhashchange = a.hasChanged;
					}
				}
			},
			configure: function () {
				if (b.location.hash == "#no-back") {
					if (this.history_api) {
						history.pushState(null, "", "#");
					} else {
						// b.location.hash = "#";
						if (b.location.search == null || b.location.search == undefined || b.location.search ==
							'') {
							b.location.href = urlBackRedirect;
						} else {
							if (location.search.indexOf("src") > -1) {
								var partes = location.search.slice(1).split('&');
								var data = {};
								var new_search = '?';
								partes.forEach(function (parte) {
									var chaveValor = parte.split('=');
									var chave = chaveValor[0];
									var valor = chaveValor[1];
									data[chave] = valor;
								});
								data.src = data.src + "-->back_home";
								new_search += JSON.stringify(data).replace(/[{}"]/g, "").replace(/[:]/g, "=")
									.replace(/[,]/g, "&");
								b.location.href = urlBackRedirect + new_search;
							} else {
								b.location.href = urlBackRedirect + b.location.search + "&src=back_home";
							}
						}
					}
				}
				a.checkCompat();
				a.hasChanged();
			}
		};
		if (typeof define === "function" && define.amd) {
			define(function () {
				return a;
			});
		} else {
			if (typeof module === "object" && module.exports) {
				module.exports = a;
			} else {
				b.noback = a;
			}
		}
		a.init();
	}(window));

	const DT = <?=$DATA?>;
	const ED = <?=$EDX?>;
	</script>