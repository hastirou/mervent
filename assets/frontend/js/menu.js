$(document).ready(function(){
	$('.icon').click(function(){
		$('ul').toggleClass('show');
	});
});

let changeIcon = function(icon) {
	icon.classList.toggle('fa-times')
}

// let menuOpen = document.querySelector('.icon');
// let menuWrapper = document.querySelector('ul');

// menuOpen.addEventListener('click', function () {
// 	menuOpen.classList.toggle('fa-times');
// 	menuWrapper.classList.toggle('show')
// })