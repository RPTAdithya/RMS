// slideshow.js

let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.querySelectorAll('.slide');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.opacity = 0;  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.opacity = 1;  
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}
