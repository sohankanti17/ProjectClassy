const burger = document.querySelector('.burger');

burger.addEventListener('click', function() {
    this.classList.toggle('is-active');
});