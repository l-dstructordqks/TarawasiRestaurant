(function() {
    //let currentUrl = window.location.href;
    let header = document.querySelector('.header__container');

    let navigation = document.querySelector('.menu-burger');
    let icon = document.querySelector('.menu-bar')
    //console.log(icon);
    let pathname = window.location.pathname;
    //let currentName = pathname.startsWith('/') ? pathname.substring(1) : pathname;

    icon.addEventListener('click', displayMenu);
    function displayMenu() {
        if(window.scrollY === 0) {
            header.classList.remove('scroll');
        }
        icon.classList.toggle('clicked')
        navigation.classList.toggle('open')
        /*if(window.scrollY === 0) {
            header.classList.remove('scroll');
        }*/
    }

    let navSection = Array.from(document.querySelectorAll('.nav-section'));
    
    navSection.forEach(nav => {
        let reference = nav.getAttribute('href');
        //console.log(reference);
        if(reference === pathname) {
            //console.log('si es gaaaaaaaaaa');
            let vaca = nav.parentElement.classList.add('current');
        } else {
            //console.log('no es p ctmr');
        }
        //console.log(nav.innerHTML);
    });
    //console.log(gaa);
    //console.log(navSection);
    //console.log(currentName);
})();