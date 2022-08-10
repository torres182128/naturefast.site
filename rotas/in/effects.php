<hr>
<?php $x=0;$dbe='effects';?>
<div class="effects">
	<?=edx($dbe)?>
	<div class="midle" uk-grig>
		<h2 <?=dbe("$dbe.1",1,'')?>>Editar...</h2>
		<h3 <?=dbe("$dbe.2",1,'')?>>Editar...</h3>
		<div class="content">	
			<div class="banner">
				<img <?=dbe("$dbe.3",3,'')?> src="<?=IMG?>" alt="no image" width="500" height="500">
			</div>
			<div class="info">
				<ul class="uk-list">
					<?php for($i=1;$i<=7;$i++): ?>
					<li <?=dbe("$dbe.a$i".$x++,1,'')?>>Editar...</li>
					<?php endfor; ?>
				</ul>
				<div class="link">
					<a <?=dbe("$dbe.4",2,'pulsar zzz')?> href="#">Editar...</a>
					<span <?=dbe("$dbe.5",1,'')?>>Editar...</span>
				</div>
			</div>
		</div>
	</div>
</div>