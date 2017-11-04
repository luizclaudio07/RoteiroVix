var map;
var marker;
var pontos;
var tipoMapa = {
	comum : 'roadmap',
	satelite : 'satellite',
	hibrido : 'hybrid',
	terreno : 'terrain'
};

$(document).ready(function(){

	//Iniciando o mapa via API
	var latlng = new google.maps.LatLng(-20.300769, -40.291355);

	var preferencias = {
		zoom: 15,
		center: latlng,
		mapTypeId: tipoMapa.comum,
		disableDefaultUI:true,
		mapTypeControl:true,
		tilt:45,
		mapTypeControl: false,

		streetViewControl: true,
		streetViewControlOptions: {
		  position: google.maps.ControlPosition.RIGHT_BOTTOM
		},

		zoomControl: true,
		zoomControlOptions: {
		  position: google.maps.ControlPosition.RIGHT_BOTTOM
		}
	};

	map = new google.maps.Map(document.getElementById("mapa"), preferencias);

	
	//Verificando cookie e modal de abertura
	//hello();


	// Preenchendo com os pontnos existente no banco de dados
	$.ajax({
		url: 'php/abrirPontos.php',
		dataType: 'json'

	}).done(function(retorno){

		pontos = retorno;

		for(i in retorno){
			
			marker = new google.maps.Marker({
			    position: new google.maps.LatLng(retorno[i].x, retorno[i].y),
			    title: retorno[i].nome,
			    codponto: retorno[i].id,
			    map: map,
			    icon: getIcon(retorno[i].tipo)
			});

			google.maps.event.addListener(marker, 'click', function(e){ abrirModalDetalhe(this.codponto); });	
		}

	});



	$("#btnPesquisa").click(function(){
		buscarPonto($("#txtPesquisa").val(), map);
	});
 
	$("#txtPesquisa").keydown(function(e){
		if(e.keyCode == 13){
			buscarPonto($("#txtPesquisa").val(), map);
		
}	});

	$(".opt-mapa").click(function(e){
		e.preventDefault();
		
		map.setOptions({mapTypeId: $(this).data('tipo')});
	});

});

function buscarPonto(nome, mapa){
	var aux;
	//mapa.panTo(new google.maps.LatLng(-20.300769, -40.291355));

	if(nome.lenght = 0) return;

	for(var a in pontos){
		//console.log("Comparando " + nome.toUpperCase()+ " com " + pontos[a].nome.toUpperCase());
		if(pontos[a].nome.toUpperCase().search(nome.toUpperCase()) >= 0){
			mapa.panTo(new google.maps.LatLng(pontos[a].x, pontos[a].y));
			//abrirModalDetalhe(pontos[a].codponto);
			break;
		}

	}
}

function abrirModalDetalhe(codLocal){
	//console.log('Passando codigo pra abrir modal: ' + codLocal);
	$.ajax({
		url: 'php/buscaDadosPonto.php',
		data : {codigo : codLocal},
		dataType : 'json',
		method: 'POST'

	}).done(function(retorno){
		
		$("#txtNomeLocal").html(retorno[0].nome);
		$("#linkGoogleMaps").attr('href', 'http://maps.google.com/?q=' + retorno[0].x + ',' + retorno[0].y);
		//$("#imgCapaLocal").attr('src', (retorno[0].urlfotocapa.lenght > 0 ? retorno[0].urlfotocapa : 'imgLocalDefault.png'));
		//$("#txtConstrutor").hide();
		
		$("#myModal").modal();
	}).fail(function(error){
		alert("Erro na comunicação. Verifique os detalhes no log do navegador.");
	})
}

function getIcon(tipo){
	var a;
	switch(tipo){
		case 'CO':
			a = 'construcao.png';
			break;

		case 'MO':
			a = 'montanha.png';
			break;

		case 'PA':
			a = 'praia.png';
			break;
	}
	return a;
}

function hello(){

	if ($.cookie('ckpontosvix') != '1'){
        
        	setTimeout(function(){        
	            $("#modalInit").modal();      
	               
	                var date = new Date(); 
	                var tempo = 1; // minutos 
	                date.setTime(date.getTime() + (tempo * 60 * 1000));
	                $.cookie('ckpontosvix', '1', { expires: date });
            }, 1000);
    }
}