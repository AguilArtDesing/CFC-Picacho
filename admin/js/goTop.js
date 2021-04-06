window.onscroll = () => {
	let goTop = document.querySelector('#go__top');
	let header = document.querySelector('#header');
    if (document.documentElement.scrollTop > 400) { // > 300 Modifica que tantos px desea
        document.getElementById("go__top").style.right = '40px';
        document.getElementById("header").style.background = '#000000';
        document.getElementById("header").style.borderBottom = '3px solid #F76402';
        document.getElementById("header").style.height = '73px';
        document.getElementById("header").style.transition = '.8s'
    } 
    else { 
    	document.getElementById("go__top").style.right = '-100%';
    	document.getElementById("header").style.background = 'linear-gradient(to bottom, #000000, transparent)';
        document.getElementById("header").style.height = '70px';
        document.getElementById("header").style.borderBottom = 'none';
    }
    goTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth'});
    }) }