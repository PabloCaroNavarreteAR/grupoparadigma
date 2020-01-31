//scroll
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $('.nav .menu').addClass("bg-light");
    } else {
       $('.nav .menu').removeClass("bg-light");
    }
}

$(document).ready(function(){
    $(".modal .close").click(function(){
        $(".modal").hide(400);
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
