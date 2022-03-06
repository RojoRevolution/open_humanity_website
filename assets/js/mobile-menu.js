window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    const menuEl = document.getElementById('menu-icon');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuContent = document.getElementById('mobile-menu-content');
    const menuBarTop = document.getElementById('menu-top')
    const menuBarMiddle = document.getElementById('menu-middle')
    const menuBarBottom = document.getElementById('menu-bottom')


    const openAnimation = () => {
        menuEl.setAttribute('status', 'open')
        mobileMenu.classList.remove('menu-animation-close');
        mobileMenu.classList.add('menu-animation-open');
        mobileMenuContent.style.display = 'block';
        mobileMenuContent.style.opacity = '1';
        mobileMenu.classList.add('menu-open');
        menuBarMiddle.classList.add('d-none');
        menuBarTop.classList.add('top-bar-x');
        menuBarBottom.classList.add('bottom-bar-x');
    }

    const closeAnimation = () => {
        menuEl.setAttribute('status', 'closed')
        mobileMenu.classList.remove('menu-open');
        mobileMenuContent.style.opacity = '0';
        mobileMenuContent.style.display = 'none';
        mobileMenu.classList.remove('menu-animation-open');
        mobileMenu.classList.add('menu-animation-close');
        menuBarTop.classList.remove('top-bar-x');
        menuBarBottom.classList.remove('bottom-bar-x');
        menuBarMiddle.classList.remove('d-none');
    }


    menuEl.addEventListener('click', () => {
        console.log('menu clicked');

        let attribute = menuEl.getAttribute('status');
        console.log('Attr = ', attribute)

        if (attribute === 'closed') {
            openAnimation()
        } else if (attribute == 'open') {
            closeAnimation()
        }
    })

});