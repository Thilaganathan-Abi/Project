$(document).ready(function() {
    
    // Toggle navbar and menu icon on click
    $('.ri-menu-line').click(function() {
        $(this).toggleClass('fa-time');
        $('.navbar').toggleClass('nav-toggle');
    });
    
    // Navbar styling on load and scroll
    $(window).on('load scroll', function() {
        // Remove 'fa-time' and 'nav-toggle' classes on scroll or load
        $('.ri-menu-line').removeClass('fa-time');
        $('.navbar').removeClass('nav-toggle');

        // Navbar background and shadow change on scroll
        if ($(this).scrollTop() > 20) {
            $('.header').css({
                'background': '#0c3e26',
                'box-shadow': '0 .3rem .5rem rgba(0, 0, 0, .3)'
            });
        } else {
            $('.header').css({
                'background': 'none',
                'box-shadow': 'none'
            });
        }
    });

});


const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const innerbtn = document.querySelector('.inner_btn');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});
innerbtn.addEventListener('click',()=>{
    wrapper.classList.add('active-popup');
});
iconClose.addEventListener('click',()=>{
    wrapper.classList.remove('active-popup');
});




gsap.set(['.hero_txt, .hero_icon'], {
    x: -1000,
 });
 
 gsap.to(['.hero_txt, .hero_icon'], {
    x: 0,
    stagger: 0.,
    ease: 'power4.out',
    duration: 2,
 });
 
 gsap.set('.content_middle', {
    y: 1000,
 });
 
 gsap.to('.content_middle', {
    y: 0,
    duration: 2,
    ease: 'power4.out',
 });
 
 gsap.set('.content_right', {
    x: 1000,
 });
 
 gsap.to('.content_right', {
    x: 0,
    duration: 2,
    ease: 'power4.out',
 });

