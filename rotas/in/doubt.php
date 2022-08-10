<?php $x=0;$dbe='doubt';?>
<div class="doubt">
	<?=edx($dbe)?>
	<div class="midle">
		<h2 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h2>
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