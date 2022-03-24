window.addEventListener('DOMContentLoaded', (event) => {

    const labels = document.querySelectorAll('.hbspt-form label');
    const inputText = document.querySelectorAll('.hbspt-form .hs-input');
    const formBtn = document.querySelectorAll('.hbspt-form .input.hs-button.primary.large');
    const formBtnHover = document.querySelectorAll('.hbspt-form .input.hs-button.primary.large:hover');
    const hubSpotLogo = document.querySelectorAll('.hubspot-link__container.sproket');


    const addStyles = () => {
        // labels.classList.add('labelWhite')
        hubSpotLogo.classList.add('d-none');
        labels.style.display = 'none';
    }

    addStyles();


})