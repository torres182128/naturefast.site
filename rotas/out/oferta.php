<?php $x=0;$dbe='offers7';?>
<div id="oferta" class="offers out">
	<div class="midle">
		<h1 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h1>
		<h2 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h2>
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

<?php $x=0;$dbe='comentsface';?>
<div class="comentsface">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
		<path class="elementor-shape-fill" fill="#131d22 " d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
		c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
		c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
	</svg>
	<br>
	<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
	<h3 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h3>
	<div class="midle">
		<div class="fb-comments" data-href="https://gotadohimalaia.com/vsl" data-width="100%" data-numposts="5"></div>
	</div>
</div>


<?php $x=0;$dbe='formulaOut';?>
<div class="formula out">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<ul class="cards">
			<li <?=dbe("$dbe.7",6,'card coder')?>><?=data("$dbe.7",6)?>
			</li>
			<li <?=dbe("$dbe.8",6,'card coder')?>><?=data("$dbe.8",6)?>
			</li>
			<li <?=dbe("$dbe.9",6,'card coder')?>><?=data("$dbe.9",6)?>
			</li>
		</ul>
		<div class="link">
			<a <?=dbe("$dbe.10",2,'pulsar zzz')?> href="#"><?=data("$dbe.10",2)?></a>
		</div>
	</div>
</div>

<?php $x=0;$dbe='offers8';?>
<div class="offers out">
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


<?php $x=0;$dbe='usarOut';?>
<div class="usar out">
	<div class="midle">
		<h4 <?=dbe("$dbe.1",5,'')?>><?=data("$dbe.1",5)?></h4>
		<div class="content">
			<p <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></p>
			<figure>
				<img <?=dbe("$dbe.3",3,'')?>>
			</figure>
		</div>
	</div>
</div>


<?php $x=0;$dbe='duvidaOut';?>
<div class="duvida out">
	<div class="midle link">
		<a <?=dbe("$dbe.0",2,'pulsar zzz')?> href="#"><?=data("$dbe.0",2)?></a>
	</div>
	<br>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<h3 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h3>
		<ul class="duv">
			<?php for($i=2;$i<=5;$i++): ?>
			<li>
				<img <?=dbe("$dbe.a$i".$x++,3,'')?>>
				<p <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></p>
			</li>
			<?php endfor; ?>				
		</ul>
	</div>
</div>


<?php $x=0;$dbe='promessaOut';?>
<div class="promessa out">
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<h3 <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></h3>
		<div class="promessas">
			<div <?=dbe("$dbe.3",5,'texto')?>><?=data("$dbe.3",5)?></div>
			<div class="imagem">
				<img <?=dbe("$dbe.4",3,'')?>>
			</div>
			<div <?=dbe("$dbe.5",5,'texto')?>><?=data("$dbe.5",5)?></div>
		</div>
	</div>
	<div class="link">
		<a <?=dbe("$dbe.7",2,'pulsar zzz')?> href="./#oferta"><?=data("$dbe.7",2)?></a>
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


<?php $x=0;$dbe='offers9';?>
<div class="offers out">
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

<?php $x=0;$dbe='whatsappOut';?>
<div class="whatsapp">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<div <?=dbe("$dbe.2",1,'text')?>><?=data("$dbe.2",1)?></div>
		<figure class="pulsar">
			<a href="#" <?=dbe("$dbe.3",2,'aaa')?> target="_blank">
				<?php if(!empty($SA)){
					echo '<span data-id="'.hashs("$dbe.3",2).'" class="xxx zzz edite"></span>';
				}?>
				<img <?=dbe("$dbe.4",3,'')?>>
			</a>
		</figure>
	</div>
</div>