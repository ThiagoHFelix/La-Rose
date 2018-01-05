

/* ====== Menu Mobile ======= */

$(".btn-menu").click(function () {
    mostrando_menu();
});

$(".fechar").click(function () {
    escondendo_menu();
});


/* ====== Menu Navegando ====== */
$("#contato").click(function () {

    escondendo_menu();

    /*Faço a navegação na pagina*/
    var ancora = $("#formulario-contato").offset().top;
    $("html, body").animate({scrollTop: ancora}, "slow");

});


$("#quem-somos").click(function () {

    escondendo_menu();

    var ancora = $("#equipe").offset().top;
     $("html,body").animate({scrollTop: ancora}, "slow");

});


$(".mover-para-inicio").click(function () {

    $("html, body").animate({scrollTop: 0}, "slow");

});


function escondendo_menu() {
    /*Escondendo o Menu*/
    $(".menu").addClass("hidde-menu");
    $(".menu").removeClass("show-menu");
    /*Escondendo itens do Menu*/
    $("#itens-menu").addClass("hidde-item-menu");
    $("#itens-menu").removeClass("show-item-menu");
    /*Retirando o botão fechar da frente do botão de mostrar*/
    $(".fechar").hide("fast");
}

function mostrando_menu() {
    /*Mostrando o Menu*/
    $(".menu").addClass("show-menu");
    $(".menu").removeClass("hidde-menu");
    /*Mostrando itens do menu*/
    $("#itens-menu").addClass("show-item-menu");
    $("#itens-menu").removeClass("hidde-item-menu");

    $(".fechar").show("fast");
}


/*Abilitando o botão totop*/
 $(window).scroll(function(){
     
    
     if($(window).scrollTop() > 100){
         
         $('.mover-para-inicio').show('slow');
     }
     else{
         $('.mover-para-inicio').hide('slow');
     }
     
 });
 
