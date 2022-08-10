<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
<style>
	.adv *{font-family: Arial,Helvetica Neue,Helvetica,sans-serif; }
	.adv .article h1{
		font-family: 'Roboto', sans-serif !important;
	}
	.footer{display: none;}
</style>
<?php $x=0;$dbe='g1Out';?>
<div class="adv g1">
	<div class="mm">
		<div class=" midle">
			<div>
				<a href="#" class="g1"><img src="<?=IMG?>g1.png" alt="g1"></a>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<a href="#" class="m2">ENTRAR<span uk-icon="chevron-right"></span></a>
		</div>
	</div>
	<div class="topo">
		<div class="midle">
			<div>
				<button class="uk-button">
					<i uk-icon="icon: menu; ratio: 1.6"></i>
					<span>MENU</span>
				</button>
				<a href="#" class="g1"><img src="<?=IMG?>g1.png" alt="g1"></a>
			</div>
			<a href="#" class="titulo">BEM ESTAR</a>
			<label class="uk-search uk-search-default">
				<span uk-search-icon></span>
				<input class="uk-search-input" type="search" placeholder="Busca...">
			</label>
		</div>
	</div>
	<div class="content">
		<div class="midle">
			<div class="article">
				<h1 <?=dbe("$dbe.1",4,'')?>><?=nl2br(data("$dbe.1",4))?></h1>
				<h2 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h2>
				<div class="share">
					<p <?=dbe("$dbe.3",1,'')?>><?=data("$dbe.3",1)?></p>
					<ul>
						<li><span uk-icon="facebook"></span></li>
						<li><span uk-icon="twitter"></span></li>
						<li><span uk-icon="whatsapp"></span></li>
						<li><span uk-icon="linkedin"></span></li>
						<li><span uk-icon="pinterest"></span></li>
					</ul>
				</div>
				<p <?=dbe("$dbe.3b",1,'left')?>><?=data("$dbe.3b",1)?></p>				
				<hr>
				<figure class="legend"><img <?=dbe("$dbe.4",3,'')?>></figure>
				<div <?=dbe("$dbe.5",5,'txt dtq')?>>
						<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.5",5))?>
				</div>
				<figure class="legend"><img <?=dbe("$dbe.6",3,'')?>></figure>
				<div <?=dbe("$dbe.7",5,'txt dtq')?>>
					<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.7",5))?>
				</div>
				<figure class="legend"><img <?=dbe("$dbe.8",3,'')?>></figure>
				<div <?=dbe("$dbe.9",5,'txt dtq')?>>
					<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.9",5))?>
				</div>
				<figure class="legend"><img <?=dbe("$dbe.10",3,'')?>></figure>
				<div <?=dbe("$dbe.11",5,'txt dtq')?>>
					<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.11",5))?>
				</div>
				<figure class="legend"><img <?=dbe("$dbe.12",3,'')?>></figure>
				<div <?=dbe("$dbe.13",5,'txt dtq')?>>
						<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.13",5))?>
				</div>
				<figure class="legend"><img <?=dbe("$dbe.14",3,'')?>></figure>
				<div <?=dbe("$dbe.15",5,'txt dtq')?>>
					<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.15",5))?>
				</div>
				
				<div <?=dbe("$dbe.17",5,'txt dtq')?>>
					<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.17",5))?>
				</div>
				<figure class="legend"><img <?=dbe("$dbe.18",3,'')?>></figure>
				<div <?=dbe("$dbe.19",5,'txt dtq')?>>
					<?=str_replace('https://gotadohimalaia.com',URL, data("$dbe.19",5))?>
				</div>
				
				<a href="#" <?=dbe("$dbe.a20",2,'aaa not')?>>
					<?php if(!empty($SA)){
						echo '<span data-id="'.hashs("$dbe.a20",2).'" class="xxx zzz edite"></span>';
					}else{$x++;}?>
					<figure><img <?=dbe("$dbe.20",3,'')?>></figure>
				</a>
				
				<a href="<?=URL?>" <?=dbe("$dbe.14",2,'uk-button uk-button-danger pulsar')?>><?=data("$dbe.14",2)?></a>

				<hr>
				<?php $x=0;$dbe='comentarios';?>
				<div class="comentarios">
					<h3 <?=dbe("$dbe.c1",5,'')?>><?=data("$dbe.c1",5)?></h3>
					<hr>
					<p <?=dbe("$dbe.c2",1,'desc')?>><?=data("$dbe.c2",1)?></p>
					<ul>
						<?php for($i=1;$i<=4;$i++): ?>
						<li>
							<img <?=dbe("$dbe.a$i",3,'')?>>
							<div class="text">
								<h4 <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></h4>
								<span <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></span>
								<p <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></p>
							</div>
						</li>
						<?php endfor; ?>
					</ul>
					<div class="end">Este conteúdo não recebe mais comentários</div>
				</div>
			</div>

			<div class="aside">
				<h4><img src="<?=IMG?>g1.png" alt="g1">Últimas Notícias</h4>
				<h5 <?=dbe("$dbe.a0",1,'')?>><?=data("$dbe.a0",1)?></h5>
				<ul>
					<?php for($i=1;$i<=3;$i++): ?>
					<li>
						<a href="<?=URL?>">
							<img <?=dbe("$dbe.a$i".$x++,3,'')?>>
							<p <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></p>
						</a>
					</li>
					<?php endfor; ?>	
				</ul>
			</div>
	</div>
	</div>
</div>
<?php $x=0;$dbe='outFooter';?>
<footer class="g1">
	<div class="midle">
		<div class="links">
			<ul>
				<li><a href="">globo.com</a></li>|
				<li><a href="">g1</a></li>|
				<li><a href="">globoesporte</a></li>|
				<li><a href="">gshow</a></li>|
				<li><a href="">famosos</a></li>|
				<li><a href="">vídeos</a></li>|
				<li><a href="">todos os sites</a></li>
			</ul>
		</div>
		<div class="links">
			<a href="#" class="g1">globo.com</a>
			<p>G1</p>
		</div>
	</div>
	<div class="copy">
		<div class="midle">
			<p>© Copyright 2000-2022 Globo Comunicação e Participações S.A</p>
			<p><a href="">princípios</a>|<a href="">editoriais</a>|<a href="">política de privacidade</a>|<a href="">minha conta</a>|<a href="">anuncie conosco</a></p>
		</div>
	</div>
</footer>