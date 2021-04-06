var hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
});

// MENU DESPLEGABLE RESPONSIVE
const iconoMenu = document.querySelector('#icono-menu');
menu = document.querySelector('#menu');
iconoMenu.addEventListener('click', (e)=>{ 
	menu.classList.toggle('active'); });
