window.onload = function(){
    // NAV
    if(scrollY > 50){
        $(".nav").addClass("ativado")
    }
    else{
        $(".nav").removeClass("ativado")
    }

    // CAROUSEL
    $(".carousel#1").show()
    slider(1)

    // GALERIA
    $(".galeria .fotos .img").show()
}

// NAV
lastScrollY = scrollY
$(window).scroll(function(){
    scrollTop = $(this).scrollTop()
    // nav - ativado
    if(scrollTop > 50){
        $(".nav").addClass("ativado")
    }
    else{
        $(".nav").removeClass("ativado")
    }

    // nav - scroll
    if(scrollTop > lastScrollY){
        $(".nav").addClass("scroll")
    }
    else{
        $(".nav").removeClass("scroll")
    }
    lastScrollY = scrollY
})

// CAROUSEL
$(".btn-carousel a").click(function(){
    clearInterval(timer)
    carousel = $(this).prop("class")

    $(".btn-carousel a").removeClass("ativado")
    $(this).addClass("ativado")
    $(".home .info .carousel").hide()
    $(".home .info .carousel#"+carousel+"").show()
    slider(carousel)
})

function slider(carousel){
    hover = true
    $(".home").hover(function(){
        hover = false
    })
    $(".home").mouseleave(function(){
        hover = true
    })
    
    timer = setInterval(() => {
        if(hover){
            carousel += 1
            if(carousel > 3){
                carousel = 1
            }
            $(".btn-carousel a").removeClass("ativado")
            $(".btn-carousel a."+carousel+"").addClass("ativado")

            $(".home .info .carousel").hide()
            $(".home .info .carousel#"+carousel+"").show()
        }
    }, 10000);
}

// GALERIA
num_ft = $(".galeria .fotos .img").length
size_glr = num_ft * 300
size_atual = 0
num_items = Math.ceil($(".galeria .fotos").width() / 300)

$(".galeria .aba p").click(function(){
    filtro = $(this).text().toLowerCase()

    $(".galeria .aba p").removeClass("ativo")
    $(this).addClass("ativo")

    if(filtro == "todas"){
        $(".galeria .fotos .img").show()
    }
    else{
        $(".galeria .fotos .img").hide()
        $(".galeria .fotos .img."+filtro+"").show()
    }
    $(".galeria .fotos .img").css("transform", "translateX(0px)")
    $(".btn-galeria #anterior").addClass("desabilitado")
    $(".btn-galeria #proximo").removeClass("desabilitado")
    num_ft = $(".galeria .fotos .img:visible").length
    size_glr = num_ft * 300
    size_atual = 0
})

$(".btn-galeria i").click(function(){
    action = $(this).prop("id")
    if(action == "anterior" && size_atual <= 300){
        $(".btn-galeria #anterior").addClass("desabilitado")
    }
    else{
        $(".btn-galeria #anterior").removeClass("desabilitado")
    }
    if(action == "proximo" && size_atual >= size_glr-(num_items*300)){
        $(".btn-galeria #proximo").addClass("desabilitado")
    }
    else{
        $(".btn-galeria #proximo").removeClass("desabilitado")
    }
    
    if(action == "anterior" && size_atual > 0){
        size_atual -= 300
        $(".galeria .fotos .img").css("transform", "translateX(-"+size_atual+"px)")
    }
    else if(action == "proximo" && size_atual < size_glr){
        size_atual += 300
        $(".galeria .fotos .img").css("transform", "translateX(-"+size_atual+"px)")
    }
})