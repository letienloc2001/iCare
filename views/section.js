let section = document.querySelector('.section-bar');

if (section) {
    console.log("success");
} else {
    console.log("failure");
}

let btns = document.querySelectorAll('.section');

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        let current = document.querySelector('.active');
        current.classList.remove("active");
        this.classList.add("active");
    })
}

// let request_appointment = document.querySelectorAll('request-appointment');

// for (let i = 0; i < request_appointment.length; i++) {
//     let accepted_button = request_appointment[i].querySelector('accept-button');
//     accepted_button.addEventListener('click', function () {
//         request_appointment.remove();
//     })
// }
