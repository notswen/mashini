"use strict"

const authForm = document.authentication;

const fnum = authForm.elements.namedItem("first");
const snum = authForm.elements.namedItem("second");
const sign = authForm.elements.namedItem("sign");



function calculate() {
    let summ = document.createElement("p");
    if (sign.value === "plus"){
        summ.innerText = +fnum.value + +snum.value;
    } else if ()

    document.body.appendChild(summ)
}

fnum.addEventListener("input", calculate);
snum.addEventListener("input", calculate)