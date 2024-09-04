const path = location.pathname;

function seeMore(e){
    const currentIndex = document.querySelector('.carousel-inner .carousel-item.active');
    const currentID = currentIndex.id;
    console.log(currentID);
    window.location.href = `/pages/${currentID}.html`;
}

function header(){
    // window.addEventListener('scroll', function (e) {
    //     if(window.pageYOffset > 75){
    //         document.querySelector('.nav-container').classList.add('is-scrolling');
    //     } else {
    //         document.querySelector('.navigation-link').classList.remove('is-scrolling');
    //     }
    // });

    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');

    menu_btn.addEventListener('click', function (){
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');
    })
}

switch(path){
    case '/':
    case '/index.html':
    case '/portfolio/':
        case '/portfolio/index.html':
        // document.querySelector('#seeMore').addEventListener('click', seeMore);
        break;
}

window.onload = header();