<?php $x=0;$dbe='offers';?>
<div class="offers" id="oferta">
	<?=edx($dbe)?>
	<svg class="first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
		<path class="elementor-shape-fill" fill="#D70024 " d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
		c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
		c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
	</svg>
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
	<svg class="last" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
		<path class="elementor-shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
		c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
		c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
	</svg>
</div>