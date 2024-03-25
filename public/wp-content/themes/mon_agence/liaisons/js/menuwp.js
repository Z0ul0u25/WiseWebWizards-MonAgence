const burgerMenu = document.getElementById('hamburgerlogo');
const overlay = document.querySelector('.nav-principale');
burgerMenu.addEventListener('click', function() {
    this.classList.toggle("close");
    overlay.classList.toggle("overlay");
});