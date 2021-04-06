////document.querySelector se usa como si fuera un Selector de CSS
const slider = document.querySelector("#slider");
//Los Slider Section (document.querySelectorAll = Para seleccionar
// a todos los que tengan la misma clase)
let sliderSection = document.querySelectorAll(".slider__section");
//Variable para seleccionar el Ultimo Slider Section y colocarlo
//al Principio
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

//Metodo                  Despues de Empezar
slider.insertAdjacentElement("afterbegin", sliderSectionLast);

//Funciones para los Botones
function Next() {
	//sliderSectionFirst Eligue al Primero y va a tener solamente al Primero [0]
	let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
	slider.style.marginLeft = "-200%";
	slider.style.transition = "all 1s";
	setTimeout(function(){
		slider.style.transition = "none";
		slider.insertAdjacentElement('beforeend', sliderSectionFirst);
		slider.style.marginLeft = "-100%";
	}, 1000);
}

function Prev() {
	//sliderSectionFirst Eligue al Primero y va a tener solamente al Primero [0]
	let sliderSection = document.querySelectorAll(".slider__section");
	let sliderSectionLast = sliderSection[sliderSection.length -1];
	slider.style.marginLeft = "0";
	slider.style.transition = "all 1s";
	setTimeout(function(){
		slider.style.transition = "none";
		slider.insertAdjacentElement('afterbegin', sliderSectionLast);
		slider.style.marginLeft = "-100%";
	}, 1000);
}

btnRight.addEventListener('click', function(){
	Next();
});
btnLeft.addEventListener('click', function(){
	Prev();
});

//Para que se mueva solo
setInterval(function(){
	Next();
}, 6000);
