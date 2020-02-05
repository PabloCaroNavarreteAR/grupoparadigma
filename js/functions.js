
//nav
$(function(){
	//clic en un enlace de la lista
	$('.nav-link').on('click',function(e){
		//prevenir en comportamiento predeterminado del enlace
		e.preventDefault();
		//obtenemos el id del elemento en el que debemos posicionarnos
		var strAncla=$(this).attr('href');
		
		//utilizamos body y html, ya que dependiendo del navegador uno u otro no funciona
		$('body,html').stop(true,true).animate({
			//realizamos la animacion hacia el ancla
			scrollTop: $(strAncla).offset().top
		},1500);
	});
});


//scroll
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $('.nav .menu').addClass("bg-light");
    } else {
       $('.nav .menu').removeClass("bg-light");
    }
}


//video intro

function videoEnded(){
    $('.intro').hide(400);
    document.cookie = "videostatus=finished";
    //console.log(document.cookie);
}


$(document).ready(function(){
    var videoelement = document.createElement("video");
    videoelement.setAttribute("id", "video1");
    videoelement.setAttribute("width", "400");
    videoelement.setAttribute("controls", "");
    videoelement.setAttribute("autoplay", "");
    videoelement.setAttribute("muted", "");
    videoelement.setAttribute("name", "media");
    videoelement.setAttribute("onended", "videoEnded()");
    videoelement.setAttribute("onplaying", "onplay()");

    if ($(window).width() < 960) {
        var sourceMP4 = document.createElement("source"); 
        sourceMP4.type = "video/mp4";
        sourceMP4.src = "./img/paradigma-small.mp4";
        videoelement.appendChild(sourceMP4);
    
        var sourceWEBM = document.createElement("source"); 
        sourceWEBM.type = "video/webm";
        sourceWEBM.src = "./img/paradigma-small.mp4";
        videoelement.appendChild(sourceWEBM);
     }
     else {
    
        var sourceMP4 = document.createElement("source"); 
        sourceMP4.type = "video/mp4";
        sourceMP4.src = "./img/paradigma.mp4";
        videoelement.appendChild(sourceMP4);
    
        var sourceWEBM = document.createElement("source"); 
        sourceWEBM.type = "video/webm";
        sourceWEBM.src = "./img/paradigma.mp4";
        videoelement.appendChild(sourceWEBM);
     }


    $('#introVideo').html(videoelement);
    var video = document.getElementById("video1");
    document.getElementById('video1').play();

});



 

$(document).ready(function(){
    $('.closeButton').click(function(){
        $('.intro').hide();
    });
    $('#video1').click(function(){
        $('.playButton').hide();
    });
    $(".status .close").click(function(){
        $(this).hide(400);
        window.location.href = "./";
    });

    $('.input').keyup(function(){
        if($(this).val().length == 0){
            $(this).removeClass('valido');
            $(this).addClass('invalido');
        }
        else{
            $(this).addClass('valido');
            $(this).removeClass('invalido');
        }
    });
});





