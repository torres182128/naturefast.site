<?php $x=0;$dbe='whatsapp';?>
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