window.addEventListener('DOMContentLoaded', (event) => {

    const contactBtn = document.getElementById('contact-submit');
    const contactNameValue = document.getElementById('name');
    const contactEmailValue = document.getElementById('email-input');
    const contactSubjectValue = document.getElementById('option');

    contactBtn.addEventListener('click', (e) => {
        e.preventDefault();
        console.log("Submit btn clicked")

        let name = contactNameValue.value;
        let email = contactEmailValue.value
        let subject = contactSubjectValue.value

        if (name === "") {
            console.log('FALSE')
        } else if (email === "") {
            console.log('FALSE')
        } else if (subject === '0') {
            console.log('FALSE')
        } else {
            console.log('ALL TRUE')
            window.location.href = 'contact-success.html';
        }

    })

})