let imageSlider = document.querySelectorAll('.slider-img');

imageSlider.forEach(div => {
    div.addEventListener('click', function () {
        imageSlider.forEach(d => d.classList.remove('active'));
        this.classList.add('active');
    });
});
