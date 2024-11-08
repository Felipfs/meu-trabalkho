document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.carousel-slide');
    let currentIndex = 0;
    const intervalTime = 3000; 
    const changeImage = () => {
        slides[currentIndex].classList.remove('active'); 
        currentIndex++;
        if (currentIndex >= slides.length) {
            currentIndex = 0; 
        }
        slides[currentIndex].classList.add('active'); 
    };
    setInterval(changeImage, intervalTime);
});