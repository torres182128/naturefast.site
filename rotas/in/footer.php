<?php $x=0;$dbe='footer';?>
<footer id="footer" class="footer">
	<?=edx($dbe)?>
	<div class="midle">
		<div class="cards">
			<div class="card">
				<p <?=dbe("$dbe.1",1,'')?>>COMPRA 100% SEGURA</p>
				<img <?=dbe("$dbe.2",3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
			</div>
			<div class="card">
				<p <?=dbe("$dbe.3",1,'')?>>FORMAS DE PAGAMENTO</p>
				<img <?=dbe("$dbe.4",3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
			</div>
			<div class="card">
				<p <?=dbe("$dbe.5",1,'')?>>MÉTODOS DE ENTREGA</p>
				<img <?=dbe("$dbe.6",3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
			</div>
		</div>
	</div>
	<div class="copi">
		<div class="midle">
			<?php if(MOB=='desktop'):?>
			<a href="#" <?=dbe("$dbe.7",2,'')?>><?=data("$dbe.7",2)?></a>
			<a href="#" <?=dbe("$dbe.8",2,'')?>><?=data("$dbe.8",2)?></a>
			<?php else:?>
			<a href="#" <?=dbe("$dbe.7",2,'')?>><?=data("$dbe.7",2)?></a>
			<a href="#" <?=dbe("$dbe.8",2,'')?>><?=data("$dbe.8",2)?></a>
			<?php endif;?>
			<p <?=dbe("$dbe.9",1,'')?>><?=data("$dbe.9",1)?></p>
		</div>
	</div>
</footer>