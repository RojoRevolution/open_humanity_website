window.addEventListener('DOMContentLoaded', (event) => {

    const labels = document.querySelectorAll('.hbspt-form label');
    const inputText = document.querySelectorAll('.hbspt-form .hs-input');
    const formBtn = document.querySelectorAll('.hbspt-form .input.hs-button.primary.large');
    const formBtnHover = document.querySelectorAll('.hbspt-form .input.hs-button.primary.large:hover');
    const hubSpotLogo = document.querySelectorAll('.hubspot-link__container.sproket');

    const formIFrame = document.getElementById('hs-form-iframe-0');

    const addStyles = () => {
        // labels.classList.add('labelWhite')
        // hubSpotLogo.classList.add('d-none');
        // labels.style.display = 'none';
        formIFrame.contentWindow.document.getElementsByTagName('label').style.color = "#ffffff"
    }

    setTimeout(function () {
        formIFrame.contentWindow.document.getElementsByTagName('label').style.color = "#ffffff"
    }, 2000);


})