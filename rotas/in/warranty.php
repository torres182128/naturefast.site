<?php $x=0;$dbe='warranty';?>
<div class="warranty">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<img <?=dbe("$dbe.2",3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
		<div <?=dbe("$dbe.3",1,'text')?>><?=data("$dbe.3",1)?></div>
		<div class="link">
			<a <?=dbe("$dbe.4",2,'pulsar')?> href="#"><?=data("$dbe.4",2)?></a>
			<span <?=dbe("$dbe.5",1,'')?>><?=data("$dbe.5",1)?></span>
		</div>
		<h3 <?=dbe("$dbe.6",1,'')?>><?=data("$dbe.6",1)?></h3>
		<ul>
			<li <?=dbe("$dbe.7",1,'')?>><?=data("$dbe.7",1)?></li>
			<li <?=dbe("$dbe.8",1,'')?>><?=data("$dbe.8",1)?></li>
			<li <?=dbe("$dbe.9",1,'')?>><?=data("$dbe.9",1)?></li>
		</ul>
	</div>
</div>