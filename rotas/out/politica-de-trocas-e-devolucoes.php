<?php $x=0;$dbe='politica-de-trocas-e-devolucoes';?>
<style>body{background: #f5f5f5;}</style>
<div class="politica-de-privacidade">
	<?=edx($dbe)?>
	<div class="midle">
		<img <?=dbe("$dbe.2",3,'')?>>
		<h1 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h1>
		<div <?=dbe("$dbe.3",5,'text')?>><?=data("$dbe.3",5)?></div>
	</div>
</div>