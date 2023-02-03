const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

const contactForm = document.querySelector('#contact-form');

//get input fields data
let senderName = document.getElementById('name');
let email = document.getElementById('email');
let subject = document.getElementById('subject');
let message = document.getElementById('message');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    let formFieldsData = {
        name: senderName.value,
        email: email.value,
        subject: subject.value,
        message: message.value

    }

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/');
    xhr.setRequestHeader('content-type', 'application/json');
    xhr.onload = function() {
        console.log(xhr.responseText);
        if (xhr.responseText == 'success') {
            Toast.fire({
                icon: 'success',
                title: 'Email Sent'
            });
            senderName.value = '';
            email.value = '';
            subject.value = '';
            message.value = '';
        } else {
            Toast.fire({
                icon: 'error',
                title: 'Error! Something went wrong.',
            });
        }
    }
    //send form data to backend '/functions/index.js'
    xhr.send(JSON.stringify(formFieldsData));
})