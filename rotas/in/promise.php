<?php $x=0;$dbe='promise';?>
<div class="promise edx">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
		<h3 <?=dbe("$dbe.3",5,'')?>><?=data("$dbe.3",5)?></h3>
		<ul class="cards">
			<?php for($i=1;$i<=6;$i++): ?>
			<li class="card">
				<img <?=dbe("$dbe.a$i".$x++,3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
				<h4 <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></h4>
				<p <?=dbe("$dbe.a$i".$x,1,'')?>><?=data("$dbe.a$i".$x++,1)?></p>
			</li>
			<?php endfor; ?>
		</ul>
		<div class="link">
			<a <?=dbe("$dbe.4",2,'pulsar zzz')?> href="#"><?=data("$dbe.4",2)?></a>
			<span <?=dbe("$dbe.5",1,'')?>><?=data("$dbe.5",1)?></span>
		</div>
	</div>
</div>