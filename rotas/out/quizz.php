<style> body,html{ background: #1a262c; } .footer{display: none;}</style>
<?php $x=0;$dbe='quizzOut';?>
<div id="quizz">
	<div class="midle">
		<form action="" name="quizz" class="formquizz" method="post">
			<h1 <?=dbe("$dbe.1",1,'')?>><?=data("$dbe.1",1)?></h1>
			<input type="hidden" name="origem" value="<?=(isset($page))?explode('=',$page)[1]:'';?>">
			<ul class="quizz">
				<li class="q1">
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio hidden" name="q1" value="1">
						<span>FAZER TESTE</span>
					</label>
				</li>
				<li class="q2">
					<!-- <p>PERGUNTA 1/3</p> -->
					<p <?=dbe("$dbe.2",1,'')?>><?=data("$dbe.2",1)?></p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio" name="q2" value="1">
						<span>MASCULINO</span>
					</label>
					<label class="uk-button uk-button-danger uk-button-large">
						<input type="radio" class="uk-radio" name="q2" value="2">
						<span>FEMININO</span>
					</label>
				</li>
				<li class="q3">
					<!-- <p>PERGUNTA 2/3</p> -->
					<p <?=dbe("$dbe.3",1,'')?>><?=data("$dbe.3",1)?></p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio" name="q3" value="1">
						<span>SIM</span>
					</label>
					<label class="uk-button uk-button-danger uk-button-large">
						<input type="radio" class="uk-radio" name="q3" value="2">
						<span>NÃO</span>
					</label>
				</li>
				<li class="q4">
					<!-- <p>PERGUNTA 3/3</p> -->
					<p <?=dbe("$dbe.4",1,'')?>><?=data("$dbe.4",1)?></p>
					<label class="uk-button uk-button-primary uk-button-large">
						<input type="radio" class="uk-radio" name="q4" value="1">
						<span>SIM</span>
					</label>
					<label class="uk-button uk-button-danger uk-button-large">
						<input type="radio" class="uk-radio" name="q4" value="2">
						<span>NÃO</span>
					</label>
				</li>
				<li class="q5">
					<p <?=dbe("$dbe.5",1,'')?>><?=data("$dbe.5",1)?></p>
					<p <?=dbe("$dbe.6",1,'')?>><?=data("$dbe.6",1)?></p>
					<label>
						<button type="button" id="quizzlink" onclick="myFunction()" class="uk-button uk-button-primary uk-button-large">QUERO VER O VÍDEO!</button>
					</label>
				</li>
			</ul>
			<div class="bottom">
				<p><a href="<?=URL?>/termos-de-uso">Termos de Uso</a> | <a href="<?=URL?>/politica-de-privacidade">Políticas de Privacidade</a></p>
			</div>
		</form>
	</div>
</div>
<script>
function myFunction() {
	window.location.href = "<?=SEO['quizz']?>";
}
</script>