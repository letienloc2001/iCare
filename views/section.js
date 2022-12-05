let section = document.querySelector("#section-bar");

let btns = section.querySelectorAll(".section");

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        let current = document.querySelector(".active");
        current.classList.remove("active");
        this.classList.add("active");
    })
}