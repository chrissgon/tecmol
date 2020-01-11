// MODAL
$(".btn-modal").click(function(){
    $("html").css("overflow-y", "hidden")
    $(".container-modal").fadeIn(100)
})
$(".container-modal").click(function(e){
    let modal = $(".modal")
    if(!modal.is(e.target) && modal.has(e.target).length === 0){
        $("html").css("overflow-y", "auto");
        $(".container-modal").fadeOut(100);
        $(".modal .campo input").val("")
    }
})
$(".btn-modal-close").click(function(){
    $("html").css("overflow-y", "auto");
    $(".container-modal").fadeOut(100);
})

// NAV
$(".btn-menu").click(function(){
    $(".menu").toggleClass("menuIn")
})
$(document).click(function(e){
    let menu = $(".menu");
    let btn = $(".btn-menu");
    if(!menu.is(e.target) && menu.has(e.target).length === 0 && !btn.is(e.target) && btn.has(e.target).length === 0){
        $(".menu").removeClass("menuIn")
    }
})
$(".menu .aba").click(function(){
    $(".menu").removeClass("menuIn")
})