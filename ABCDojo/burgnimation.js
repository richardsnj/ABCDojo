const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector('.nav-links');
const links = document.querySelectorAll('.nav-links li');

let menuOpen = false;
menuBtn.addEventListener('click', () => {
	if(!menuOpen) {
		menuBtn.classList.add('open');
		menuOpen = true;
	}
	else {
		menuBtn.classList.remove('open');
		menuOpen = false;
	}
});

menuBtn.addEventListener("click", () => {
	navLinks.classList.toggle("open");
	links.forEach(link => {
		link.classList.toggle("fade");
	});
});

function togglePopup(){
	document.getElementById("popup-1").classList.toggle("active");
}