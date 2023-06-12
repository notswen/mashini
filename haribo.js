"use strict"

let multiply=document.createElement("div")
multiply.innerText = "Таблица умножения №1"
document.body.append(multiply)
multiply.className = "nadpis";

let table = document.createElement("table");

document.body.append(table);





for (let i = 1; i<=9; i++){
    let stroki=document.createElement("tr");
    table.append(stroki);

    for (let j = 1; j<=9; j++){
        let stolbtsy=document.createElement("td")
        table.appendChild(stolbtsy);
        stolbtsy.className = "fortd";
        stolbtsy.innerText = i*j;
    }
}

let multiplya=document.createElement("div")
multiplya.innerText = "Таблица умножения №2"
document.body.append(multiplya)
multiplya.className = "nadpis";


let tablea = document.createElement("table");

document.body.append(tablea);


for (let a = 1; a<=9; a++){
    let stroki=document.createElement("tr");
    tablea.append(stroki);

    for (let b = 1; b<=9; b++){
        let stolbtsy=document.createElement("td")
        tablea.appendChild(stolbtsy);
        stolbtsy.className = "fortd";
        stolbtsy.innerText = a + " * " + b + " = " + a*b;
    }
}