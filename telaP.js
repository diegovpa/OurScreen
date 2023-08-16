new Vue({
    el: '#carousel3d',
    data: {
        slides: 7
    },

    components: {
        'carousel-3d': window['carousel-3d'].Carousel3d,
        'slide': window['carousel-3d'].Slide
    }
});


var mouse = document.getElementById("reels")

mouse.addEventListener('mouseover', () =>{
    if(mouse.currentTime === 0 || mouse.ended){
        mouse.play()
    }
});

mouse.addEventListener('mouseout', () =>{
    mouse.pause()
})

var botao = document.getElementById("botaVM")

botao.addEventListener("click", function() {
    var card = document.querySelector(".contReels")
    card.classList.toggle("active")
})

