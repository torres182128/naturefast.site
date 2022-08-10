function edx(data){
	if(data){
		let x = data;
		$("div.edx").each(function(){
			let c = $(this).attr('class')
			let h = '.'+c.split(' ').join('.');
			if(x[c]!=undefined){
				$(h).attr('style',x[c])
			}
		})
	}
}

function midia(a) {
	//if(!sessionStorage['images'] || a==1){
		fetch(sURL + `/app/midia.php`, { method: 'POST',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
			body: 'url='+sURL}).then(res => res.text()).then(res => {
			let n = JSON.parse(res);
			let h = ``;
			for(k in n){
				let x = n[k][0].split('.')
				if(n[k][1]==1){
					if(MOB!='iPhone' && MOB!='iPad'){
						x = x[0]+'.webp';					
					}else{
						x = n[k][0]					
					}
				}else{
					x = n[k][0]
				}
				let pasta = '/midia/d/';
				if(x[1]=='gif'){
					pasta = '/midia/x/';
				}
				h+=`<figure><img data-id="${n[k][1]+'/'+n[k][0]}" src="${sURL+pasta+x}" alt="thumb" width="50" height="50"><a data-id="${n[k][1]+'/'+n[k][0]}"></a></figure>`
			}
			ss['images']=h;
			$("#modal #images .images").html(h)	
		}).catch(function (err) {
			console.log(err)
		})
	//}else{
	//	$("#modal #images .images").html(sessionStorage['images'])	
	//}
}

console.log(SA);
$('body a.pulsar').click(function(e) {
	if(!$(this).hasClass('zzz')||$(this).hasClass('zzz') && SA==0){
		e.preventDefault();
		var id = $(this).attr('href')
		if (id.indexOf('#') > -1) {
			id = '#'+id.split("#")[1]
			if(id=='#inicio'){
				if(ROTA){
					location.href = sURL;
				}else{
					var to = 0;					
				}
			}else{
				var to = parseInt($(id).offset().top) - 80;
			}
			if($(id).is(":visible")){
				$('html, body').animate({
					scrollTop: to+'px'
				}, 500);
				window.history.pushState("object or string", "Title", "./");				
				$('.menus a').removeClass("active")
				$(this).addClass("active")
			}else{
				location.href = sURL+'/'+id;
			}
		}else{
			location.href = $(this).attr('href')			
		}
	}
});

$("#quizz").on("click","input.uk-radio",function(){
	$(this).parent().parent().slideUp(100)
	$(this).parent().parent().next().fadeIn(100)
});

$(".formula .cards").on("click","img",function(){
	if($(this).parent().find('video').hasClass('played')){
		$(".formula .cards video").trigger('pause').removeClass('played');		
	}else{
		$(".formula .cards video").trigger('pause').removeClass('played');		
		$(this).parent().find('video').trigger('play').addClass('played');
	}
});

$(".adv.g1 .article figure.legend").each(function(){
	let alt = $(this).find('img').attr('alt')
	if(alt!=''){
		$(this).append(`<legend>${alt}</legend>`)
	}
});

function render(data){
	let n = data[1];
	$(".xxx").each(function(){
		let h = $(this).attr('data-id');
		let t = h.split('-')[1];
		if(h!=null){
			//console.log(n[h]);
			if(n[h]!=undefined){
				let x = n[h];
				if(x[2]!=""){
					$(this).attr("style",x[2])
				}
				if(t==1){ //text
					//$(this).text(x[0])
				}else if(t==2){ //link
					if(!$(this).hasClass('not')){
							$(this).remove('zzz')
					}
					if(x[1]==''){
						$(this).attr('href',sURL)						
					}else{
						$(this).attr('href',x[1])						
					}
					if(x[0]!=''){
						//$(this).text(x[0])
					}
				}else if(t==3){ //img
					//console.log(x);
					/*let s = x[1].split('/');
					let v = s[1]
					if(s[0]==1){
						if(MOB!='iPhone' && MOB!='iPad'){
							v = v.split('.')[0]+'.webp';
						}
					}
					$(this).attr("src",URL+'/midia/'+x[3]+'/'+v)*/
				}else if(t==4){ //textarea
					//$(this).text(x[0])
				}else if(t==5){ //editor
					let texto = x[0].replaceAll('https://gotadohimalaia.com',sURL);
					//$(this).html(texto)
				}else if(t==6){ //código
					//$(this).html(x[0])
				}else if(t==7){ //background
				}
			}else{
				if(t==6&&SA==1){
					//$(this).append('<a class="aaa"></a>')
				}
			}
		}
	})
}

window.onload = function(){
	render(DT)
	edx(ED)
	midia(0)
	$("#login form").append(`<a href="https://www.instagram.com/fernandovasconcelos" target="_blank" class="dev">Me siga no instagram @FernandoVasconcelos</a>`)
}


