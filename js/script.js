const header = document.querySelector("header");
window.addEventListerner ("scroll" , function() {
    header.classList.toggle ("sticky" , window.scrollY > 100)
})