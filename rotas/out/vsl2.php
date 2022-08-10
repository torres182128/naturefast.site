<?php $x=0;$dbe='vsl2Out';?>
<div class="vsl">
	<div class="midle">
		<h1 <?=dbe("$dbe.1",1,'titulo')?>><?=data("$dbe.1",1)?></h1>
		<div <?=dbe("$dbe.2",6,'video coder')?>><?=data("$dbe.2",6)?></div>
		<h2 <?=dbe("$dbe.3",1,'msg')?>><?=data("$dbe.3",1)?></h2>
	</div>
</div>
<div class="midle link" id="time">
	<div class="link">
		<a <?=dbe("$dbe.4",2,'pulsar zzz')?> href="./#oferta"><?=data("$dbe.4",2)?></a>
	</div>
</div>
<?php $x=0;$dbe='comentsface';?>
<div class="comentsface">
	<div class="midle">
		<div class="fb-comments" data-href="https://gotadohimalaia.com/vsl" data-width="100%" data-numposts="5"></div>
	</div>
</div>
	
<div id="ofertas">
	<div class="midle link">
		<div class="link">
			<a <?=dbe("$dbe.5",2,'pulsar zzz')?> href="./#oferta"><?=data("$dbe.5",2)?></a>
		</div>
	</div>
	
	<?php $x=0;$dbe='offers5';?>
	<div id="oferta" class="offers out">
		<div class="midle">
			<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
			<h3 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h3>
			<ul class="cards">
			<?php for($i=1;$i<=4;$i++):?>
			<li class="card">
				<a href="#" <?=dbe("$dbe.a$i".$x,2,'aaa not')?>>
					<?php if(!empty($SA)){
						echo '<span data-id="'.hashs("$dbe.a$i".$x++,2).'" class="xxx zzz edite"></span>';
					}else{$x++;}?>
					<img <?=dbe("$dbe.a$i".$x++,3,'not')?>>
				</a>
			</li>
			<?php endfor;?>
			</ul>
		</div>
	</div>
	
	<?php $x=0;$dbe='formulaOut';?>
	<div class="formula out">
		<?=edx($dbe)?>
		<div class="midle">
			<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
			<ul class="cards">
				<li <?=dbe("$dbe.7",6,'card coder')?>><?=data("$dbe.7",6)?></li>
				<li <?=dbe("$dbe.8",6,'card coder')?>><?=data("$dbe.8",6)?></li>
				<li <?=dbe("$dbe.9",6,'card coder')?>><?=data("$dbe.9",6)?></li>
			</ul>
			<div class="link">
				<a <?=dbe("$dbe.12",2,'pulsar zzz')?> href="./#oferta"><?=data("$dbe.12",2)?></a>
			</div>
		</div>
	</div>
	
	<?php $x=0;$dbe='doubtOut';?>
	<div class="doubt out">
		<?=edx($dbe)?>
		<div class="midle">
			<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
			<h3 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h3>
			<ul uk-accordion>
				<?php for($i=1;$i<=6;$i++):?>
				<li>
					<a <?=dbe("$dbe.a$i".$x,1,'uk-accordion-title')?> href="#"><?=data("$dbe.a$i".$x++,1)?></a>
					<div class="uk-accordion-content">
						<p <?=dbe("$dbe.a$i".$x,1,'uk-accordion-title')?>><?=data("$dbe.a$i".$x++,1)?></p>
					</div>
				</li>
				<?php endfor;?>
			</ul>
		</div>
	</div>
	
	<?php $x=0;$dbe='offers6';?>
	<div id="oferta" class="offers out">
		<div class="midle">
			<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
			<h3 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h3>
			<ul class="cards">
			<?php for($i=1;$i<=4;$i++):?>
			<li class="card">
				<a href="#" <?=dbe("$dbe.a$i".$x,2,'aaa not')?>>
					<?php if(!empty($SA)){
						echo '<span data-id="'.hashs("$dbe.a$i".$x++,2).'" class="xxx zzz edite"></span>';
					}else{$x++;}?>
					<img <?=dbe("$dbe.a$i".$x++,3,'not')?>>
				</a>
			</li>
			<?php endfor;?>
			</ul>
		</div>
	</div>
	
	<?php include("$IN/whatsapp.php");?>
	
</div>

<?php if(!empty($SA)||$LHT=="localhost"): ?>
<style>#ofertas{display: block !important;}#footer{display: block !important;}#time{display: block !important;}</style>
<?php else:?>
<style>.footer{display: none;}#time{display: none !important;}</style>
<script>
setTimeout(function() {
	document.getElementById('time').removeAttribute('id');
	document.getElementById('ofertas').style.display = 'block';
	document.getElementById('footer').style.display = 'block';
}, <?=(!empty(SEO['vsl']))?SEO['vsl']*60000:60000?>);
</script>
<?php endif;?>