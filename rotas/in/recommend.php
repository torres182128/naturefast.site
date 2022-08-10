<hr>
<?php $x=0;$dbe='recommend';?>
<div class="recommend">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>>Editar...</h2>
		<h3 <?=dbe("$dbe.2",1,'')?>>Editar...</h3>
		<h4 <?=dbe("$dbe.3",1,'')?>>Editar...</h4>
		<ul class="cards">
			<?php for($i=1;$i<=4;$i++): ?>
			<li class="card">
				<img <?=dbe("$dbe.a$i".$x++,3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
			</li>
			<?php endfor; ?>
		</ul>
		<div class="link">
			<a <?=dbe("$dbe.4",2,'pulsar zzz')?> href="#">Editar...</a>
			<span <?=dbe("$dbe.5",1,'')?>>Editar...</span>
		</div>
	</div>
</div>