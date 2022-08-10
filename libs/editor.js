const editor = ()=>{
	const editor = Jodit.make("#editor", {
		"language": "pt_br",
		"useSearch": false,
		"enter": "BR",
		"defaultMode": "1",
		"askBeforePasteHTML": false,
		"askBeforePasteFromWord": false,
		"defaultActionOnPaste": "insert_clear_html",
		"maxHeight": 500,
		"maxWidth": null,
		"buttons": "source,|,bold,italic,underline,strikethrough,eraser,ul,ol,fontsize,paragraph,lineHeight,image,hr,table,link,symbol,indent,outdent,left,brush"
	});
}

function bdx(e){
	let v = '';
	if(ss['edx']){
		let x = JSON.parse(ss['edx']);
		if(x[e]){
			v = x[e];
		}
	}
	$("#modal").addClass('uk-open uk-flex');
	let h = `<div class="uk-inline xcss">
		<input name="0" type="hidden" value="${e}">
		<textarea class="uk-textarea" id="coder" name="1" rows="5" placeholder="CSS personalizado do elemento!"></textarea>
	</div>`;
	$("#modal .fields").html(h);
	$("#modal form#dbu").addClass('bdx');
	$("#modal form#dbu textarea").val(v);
}

$("#modal #images .images").on("click","img",function(){
	let id = $(this).attr("data-id");
	$("#modal #dbu input[name='2']").val(id)
});

$("#modal #images .images").on("click","a",function(){
	let id = $(this).attr("data-id");
	let url = sURL+"/app/delete.php";	
	let data = 'id='+id;
	
	fetch(url, {method: 'POST',	headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
	body: data }).then(res => res.text()).then(res => {
		console.log(res);
		if(res==''){
			$(this).parent().remove()
			$(".uk-alert-success").show()
			ss.removeItem('images');
			midia()
			UIkit.notification({
				message: 'Imagem removida :)',
				status: 'primary',
				pos: 'top-center',
				timeout: 5000
			});
		}
	}).catch(function (err) {
		console.log(err)
	})
});

$("#modal #dbu").on("click","a.images",function(){
	if($("#modal #images").is(":visible")){
		$("#modal #images").slideUp()
	}else{
		if(!ss.images){
			midia()
			$("#modal #images").slideDown()
		}else{
			$("#modal #images .images").html(ss.images)
			$("#modal #images").slideDown()
		}
	}
});

$("#modal").on("submit","form.upload",function(e){
	e.preventDefault();
	let url = sURL+"/app/upload.php";		
	let form = document.querySelector('form.upload');
	const data = new FormData(form)
	fetch(url,{method:'POST', body:data})
	.then(res=>res.text()).then(res=>{
		ss.removeItem('images');
		midia()
	}).catch(function(err){ console.log(err)})
});

$("#modal").on("change","form.upload input:file",function(){	
	$("#modal form.upload").submit();
});

$("#modal").on("click",".uk-modal-close",function(){
	$("#modal").removeClass('uk-open uk-flex');
	$("#modal #dbu").removeClass('bdx')
	document.location.reload(true);
});

$("#login").on("click","a.uk-form-icon",function(){
	let t = $(this).next('input').attr('type')
	if(t=='text'){
		$(this).next('input').attr('type','password')
	}else{
		$(this).next('input').attr('type','text')		
	}
});

$("body").on("click",".zzz",function(e){
	e.preventDefault()
	if($(this).hasClass('not')){
		return false;
	}
	$("#modal").addClass('uk-open uk-flex');
	let h = $(this).attr('data-id');
	let x = DT[1][h];
	let t = h.split('-')[1];
	let v = `<input name="0" type="hidden" value="${h}">`; 
	if(!x){ x=["","","",""] }
	if(t==1){ //text
		v += `<div class="uk-inline xcss">
			<span class="uk-form-icon" uk-icon="icon: paint-bucket"></span>
			<input value="${x[2]!=""?x[2]:""}" class="uk-input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="uk-inline">
			<span class="uk-form-icon" uk-icon="icon: pencil"></span>
			<input value="${x[0]!=""?x[0]:""}" class="uk-input" name="1" type="text" placeholder="Texto do elemento!">
		</div>`;
	}else if(t==2){ //link
		console.log(x);
		v += `<div class="uk-inline xcss">
			<span class="uk-form-icon" uk-icon="icon: paint-bucket"></span>
			<input value="${x[2]!=""?x[2]:""}" class="uk-input" name="3" type="text" placeholder="CSS personalizado do link!">
		</div>
		<div class="uk-inline">
			<span class="uk-form-icon" uk-icon="icon: link"></span>
			<input value="${x[1]!=""?x[1]:""}" class="uk-input" name="2" type="text" placeholder="URL do link">
		</div>
		<div class="uk-inline">
			<span class="uk-form-icon" uk-icon="icon: pencil"></span>
			<input value="${x[0]!=""?x[0]:""}" class="uk-input" name="1" type="text" placeholder="Texto do link!">
		</div>`;
	}else if(t==3){ //img
		v += `<div class="uk-inline xcss">
			<span class="uk-form-icon" uk-icon="icon: paint-bucket"></span>
			<input value="${x[2]!=""?x[2]:""}" class="uk-input" name="3" type="text" placeholder="CSS personalizado da imagem!">
		</div>
		<div class="uk-inline grup">
			<div class="uk-inline">
				<span class="uk-form-icon" uk-icon="icon: image"></span>
				<input value="${x[1]!=""?x[1]:""}" class="uk-input" name="2" type="text" placeholder="Url da Imagem ou selecione acima!">
			</div>
			<div class="uk-inline">
				<span class="uk-form-icon" uk-icon="icon: move"></span>
				<input value="${x[3]!=""?x[3]:""}" class="uk-input" name="4" type="text" placeholder="Tamanho da Imagem!" required>
			</div>
		</div>
		<div class="uk-inline">
			<span class="uk-form-icon" uk-icon="icon: pencil"></span>
			<input value="${x[0]!=""?x[0]:""}" class="uk-input" name="1" type="text" placeholder="Descrição da imagem!" required>
		</div>`;
		console.log(v);
		$("#modal #dbu a.images").css({visibility: 'visible'})
	}else if(t==4){ //textarea
		v += `<div class="uk-inline xcss">
			<span class="uk-form-icon" uk-icon="icon: paint-bucket"></span>
			<input value="${x[2]!=""?x[2]:""}" class="uk-input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="uk-inline">
			<textarea class="uk-textarea" name="1" rows="5" placeholder="Texto do elemento!"></textarea>
		</div>`;
	}else if(t==5){ //editor
		v += `<div class="uk-inline xcss">
			<span class="uk-form-icon" uk-icon="icon: paint-bucket"></span>
			<input value="${x[2]!=""?x[2]:""}" class="uk-input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="uk-inline">
			<textarea class="uk-textarea" id="editor" name="1" rows="5" placeholder="Texto do elemento!"></textarea>
		</div>`;
	}else if(t==6){ //iframe
		v += `<div class="uk-inline xcss">
			<span class="uk-form-icon" uk-icon="icon: paint-bucket"></span>
			<input value="${x[2]!=""?x[2]:""}" class="uk-input" name="3" type="text" placeholder="CSS personalizado do texto!">
		</div>
		<div class="uk-inline">
			<textarea class="uk-textarea" name="1" rows="5" placeholder="Código do elemento!"></textarea>
		</div>`;
	}
	$("#modal .fields").html(v);
	
	if(t==6){
		$('#modal textarea[name="1"]').val(x[0])
	}else if(t==5){
  	editor()
		$('#modal textarea[name="1"]').val(x[0])
		$('#modal').find('.jodit-wysiwyg').append(x[0])
	}else if(t==4){
		$('#modal textarea[name="1"]').val(x[0])
	}
});

$("#modal").on("submit","form#dbu",function(e){
	e.preventDefault();
	let url = sURL+"/app/crud.php";		
	if($(this).hasClass('bdx')){
		url = sURL+"/app/bdx.php";		
		ss.removeItem('edx');
	}else{
		ss.removeItem('data');		
	}
	let form = document.querySelector('form#dbu');
	const data = new FormData(form)
	fetch(url,{method:'POST', body:data})
	.then(res=>res.text()).then(res=>{
	console.log(res);
		if(!$(this).hasClass('bdx')){
			$(".uk-alert-success").show()
			UIkit.notification({
				message: 'Elemento atualizado :)',
				status: 'primary',
				pos: 'top-center',
				timeout: 5000
			});
		}else{
			checkar('edx');
		}
	}).catch(function(err){ console.log(err)})
});