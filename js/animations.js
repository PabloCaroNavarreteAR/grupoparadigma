document.addEventListener('DOMContentLoaded', () =>{
	//console.log('works');
	//animaciones iniciales
	anime.timeline({
		easing: 'easeOutExpo',
		
	})
	.add({
		targets: '.carousel-item > img',
		opacity:[0,1],
		translateY:[-100,0],
		delay: (el, i) => 10 * i,
		offset: '-*50',
	})
	.add({
		targets: '.nav, .carousel-item h1, .carousel-caption img, .carousel-caption p, .carousel-caption a',
		opacity:[0,1],
		translateY:[-100,0],
		delay: (el, i) => 10 * i,
		offset: '-*350',
	})
	.add({
		targets: '.holding',
		opacity:[0,1],
		translateY:[-100,0],
		delay: (el, i) => 10 * i,
		offset: '-*200',
	})
})

//animacion botones