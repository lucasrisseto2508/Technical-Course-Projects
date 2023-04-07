new fullScroll({
    mainElement: "main",
    displayDots: true,
    dotsPosition: "left",
    animateTime: 0.7,
    animateFunction: "ease",
});

const navSlide = () =>  {
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.nav-links');
    const linha1 = document.querySelector('.linha1');
    const linha2 = document.querySelector('.linha2');
    const linha3 = document.querySelector('.linha3');
    const links = document.querySelectorAll('.nav-links li');
 

    burger.addEventListener('click', () => {
        menu.classList.toggle('nav-active');
        linha1.classList.toggle('linha1-active');
        linha2.classList.toggle('linha2-active');
        linha3.classList.toggle('linha3-active');

        links.forEach(link => {
            link.classList.toggle('active');
        });


    });
}

navSlide();
