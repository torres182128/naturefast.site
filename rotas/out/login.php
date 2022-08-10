<?php 
	if(!empty($_SESSION["editor"])): 
	
?>
<div id="login" class="_seo">
	<form action="" class="seo" method="post" enctype="multipart/form-data">
		<img src="file/backlogin.svg" alt="user" width="200" height="400" class="backlogin">
		<ul class="tabs">
			<li index="1" class="tab active">SEO</li>
			<li index="2" class="tab">PÁGINAS</li>
		</ul>
		<div class="ui stacked segment">
			<div class="tabx active" index="1">
				<input type="hidden" name="seoapp" value="true" value="true">
				<div class="field">
					<label>TÍTULO DO SITE</label>
					<input type="text" name="titulo" value="<?=(isset(SEO['titulo']))?SEO['titulo']:'';?>" placeholder="Título do site">
				</div>
				<div class="field">
					<label>DESCRIÇÃO DO SITE</label>
					<input type="text" name="descricao" value="<?=(isset(SEO['descricao']))?SEO['descricao']:'';?>" placeholder="Descrição do site!">
				</div>
				<div class="field">
					<label>ADICIONAR SCRIPTS ANTES DO FECHAMENTO DO HEAD</label>
					<textarea name="head" placeholder="Scripts do Head"><?=(isset(SEO['head']))?stripslashes(SEO['head']):'';?></textarea>
				</div>
				<div class="field">
					<label>ADICIONAR SCRIPTS ANTES DO FECHAMENTO DO BODY</label>
					<textarea name="body" placeholder="Scripts do Body"><?=(isset(SEO['body']))?stripslashes(SEO['body']):'';?></textarea>
				</div>
				<div class="field">
					<label>Link de BackRedirect da PV</label>
					<input type="text" name="backredirect" value="<?=(isset(SEO['backredirect']))?SEO['backredirect']:'';?>" placeholder="Link de BackRedirect da PV!">
				</div>
				<div class="group">
					<div class="field">
						<label>TEMPO EM MINUTOS DE DELAY DO VSL</label>
						<input type="number" name="vsl" value="<?=(isset(SEO['vsl']))?SEO['vsl']:'';?>" placeholder="Delay do VSL EX: 10">
					</div>
					<div class="field">
						<label>LINK DE REDIRECIONAMENTO DO QUIZZ</label>
						<input type="url" name="quizz" value="<?=(isset(SEO['quizz']))?SEO['quizz']:'';?>" placeholder="Link do Quizz">
					</div>
				</div>
				<div class="group">
					<div class="field">
						<label>Usuário</label>
						<input type="text" name="user" value="<?=(isset(SEO['user']))?SEO['user']:'';?>" placeholder="Usuário">
					</div>
					<div class="field">
						<label>Mudar Senha</label>
						<a class="uk-form-icon uk-form-icon-flip"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#666" d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/></svg></a>
						<input type="password" name="pass" value="<?=(isset(SEO['pass']))?SEO['pass']:'';?>" placeholder="Senha">
					</div>
				</div>
			</div>
			<div class="tabx pages" index="2">
				<?php 
					chdir("rotas/out/");
					$files = glob("{*.php}",GLOB_BRACE);
					foreach($files as $file):
						if($file!='404.php'&&$file!='login.php'):
						$f=explode('.',$file)[0];
						$x=explode('.',$file)[1];	
				?>
				<div class="field">
					<label><?=$f?></label>
					<input type="text" name="pages[<?=$f?>]" value="<?=SEO['pages'][$f]?>" placeholder="Coloque o link da URL para backredirect aqui">
				</div>
				<?php endif; endforeach;  ?>
			</div>
			<div class="field">
				<button type="submit" class="submit button"><b>Atualizar</b></button>
			</div>
			<a href="<?=URL?>" class="home"><img src="file/home.svg" alt="user" width="20" height="20">IR PARA HOME</a>
		</div>
	</form>
</div>
<script>
	const pages = <?=(!empty($PGS))?json_encode($PGS):''?>
	setTimeout(function() {
		for(k in pages){
			document.querySelector('input[name="pages['+k+']"]').value = pages[k];
		}
	}, 300);
	let tabs = document.querySelectorAll('.tab');
	for(let i=0;i<tabs.length;i++){
		let tab = tabs[i]
		tab.addEventListener('click',function(){
			document.querySelectorAll('.tabx')[0].classList.remove('active');
			document.querySelectorAll('.tabx')[1].classList.remove('active');
			document.querySelectorAll('.tabx')[i].classList.add('active');
			
			document.querySelectorAll('.tab')[0].classList.remove('active');
			document.querySelectorAll('.tab')[1].classList.remove('active');
			document.querySelectorAll('.tab')[i].classList.add('active');
		})
	}
</script>
<?php else:?>
<div id="login">
	<form action="" class="login" method="post">
		<img src="file/backlogin.svg" alt="user" width="200" height="400" class="backlogin">
		<img src="file/login.svg" alt="user" width="200" height="400" class="user">
		<div class="ui stacked segment">
			<input type="hidden" name="logg-app" value="true">
			<div class="field">
				<label>Usuário</label>
				<input type="text" name="user" placeholder="User">
			</div>
			<div class="field">
				<label>Pass</label>
				<input type="password" name="pass" placeholder="Senha">
			</div>
			<div class="field">
				<button type="submit" class="submit button"><b>Entrar</b></button>
			</div>
		</div>
	</form>
</div>
<?php endif;?>