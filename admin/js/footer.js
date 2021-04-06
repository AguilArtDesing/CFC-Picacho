let footerSlider = document.querySelector(".footer__slider-box")
let sliderIndividual = document.querySelectorAll(".footer__slider-content")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 9000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})
setInterval(function(){
    slides();
},intervalo);
function slides(){
    footerSlider.style.transform = "translate("+(-width*contador)+"px)";
    footerSlider.style.transition = "transform .7s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            footerSlider.style.transform = "translate(0px)";
            footerSlider.style.transition = "transform 0s";
            contador=1;
        },4500)
    }
}