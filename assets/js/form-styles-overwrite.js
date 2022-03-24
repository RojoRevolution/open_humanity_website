window.addEventListener('DOMContentLoaded', (event) => {

    const labels = docment.querySelectorAll('.hbspt-form label');
    const inputText = docment.querySelectorAll('.hbspt-form .hs-input');
    const formBtn = docment.querySelectorAll('.hbspt-form .input.hs-button.primary.large');
    const formBtnHover = docment.querySelectorAll('.hbspt-form .input.hs-button.primary.large:hover');
    const hubSpotLogo = docment.querySelectorAll('.hubspot-link__container.sproket');


    const addStyles = () => {
        labels.classList.add('labelWhite')
    }

    addStyles();


})