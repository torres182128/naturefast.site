<div id="modal" class="uk-flex-top uk-modal uk-animation-scale-down" tabindex="-1">
	<div class="uk-modal-close"></div>
	<div class="uk-modal-dialog uk-modal-body">
		
		<div id="images">
			<div class="images"></div>
			<form enctype="multipart/form-data" class="upload">
				<label uk-tooltip="Adicionar imagens á biblioteca">
					<input type="file" name="midia[]" multiple></label>
			</form>
		</div>
		<form id="dbu" action="" enctype="multipart/form-data">
			<a rel="noreferrer" class="images" uk-tooltip="Escolher imagem da biblioteca"></a>
			<div class="fields"></div>
			<p class="uk-text-right">
				<button class="uk-button uk-button-default uk-modal-close" type="button">Voltar</button>
				<button class="uk-button uk-button-primary" type="submit">Salvar</button>
			</p>
		</form>
	</div>
</div>