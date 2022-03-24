window.addEventListener('DOMContentLoaded', (event) => {

    const contactFormEl = document.getElementById('contact-form');
    const contactBtn = document.getElementById('contact-submit');
    const contactNameValue = document.getElementById('name');
    const contactEmailValue = document.getElementById('email-input');
    const contactSubjectValue = document.getElementById('option');
    const respondDiv = document.getElementById('response');

    // contactBtn.addEventListener('click', (e) => {
    //     e.preventDefault();
    //     console.log("Submit btn clicked")

    //     if (name === "") {
    //         console.log('FALSE')
    //     } else if (email === "") {
    //         console.log('FALSE')
    //     } else if (subject === '0') {
    //         console.log('FALSE')
    //     } else {
    //         console.log('ALL TRUE')
    //         window.location.href = 'contact-success.html';
    //     }

    // })

    contactFormEl.addEventListener('submit', (e) => {
        // respondDiv.innerHTML = 'Form Submitted'
        window.location.href = 'contact-success.html';
    })

})