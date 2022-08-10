<?php $x=0;$dbe='formula';?>
<div class="formula">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<div class="content">
			<div class="banner">
				<img <?=dbe("$dbe.2",3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
			</div>
			<p <?=dbe("$dbe.3",4,'')?>><?=data("$dbe.3",4)?></p>
		</div>
		<div class="link">
			<a <?=dbe("$dbe.4",2,'pulsar zzz')?> href="#"><?=data("$dbe.4",2)?></a>
			<span <?=dbe("$dbe.5",1,'')?>><?=data("$dbe.5",1)?></span>
		</div>
		<h3 <?=dbe("$dbe.6",1,'')?>><?=data("$dbe.6",1)?></h3>
		<ul class="cards">
			<li <?=dbe("$dbe.7",6,'card coder')?>><?=data("$dbe.7",6)?></li>
			<li <?=dbe("$dbe.8",6,'card coder')?>><?=data("$dbe.8",6)?></li>
			<li <?=dbe("$dbe.9",6,'card coder')?>><?=data("$dbe.9",6)?></li>
		</ul>
		<h4 <?=dbe("$dbe.10",5,'')?>><?=data("$dbe.10",5)?></h4>
	</div>
</div>