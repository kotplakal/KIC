//Якори Anchors
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()
        const blockID = anchor.getAttribute('href').substr(1)
        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
}

// Бургер меню
let menuBtn = document.querySelector('.menu-btn');
let header__nav = document.querySelector('.header__nav');
menuBtn.addEventListener('click', function () {
    menuBtn.classList.toggle('active');
    header__nav.classList.toggle('active');
});

