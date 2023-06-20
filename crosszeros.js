"use strict"


let multiply = document.createElement("div")
multiply.innerText = "КРЕСТИКИ-НОЛИКИ";
document.body.append(multiply)
multiply.className = "nadpis";


let table = document.createElement("table");

document.body.append(table);


for (let i = 0; i < 3; i++) {
    let stroki = document.createElement("tr");
    table.append(stroki);

    for (let j = 0; j < 3; j++) {
        let stolbtsy = document.createElement("td")
        table.appendChild(stolbtsy);
        stolbtsy.className = "fortd";

        stolbtsy.addEventListener("click", onCellClick);
    }
}
let step=1
function onCellClick(event) {
    console.log("Текущая ячейка: ", event.currentTarget)
    if (event.currentTarget.innerText == ""){
        event.currentTarget.innerText = (step%2===0) ? "O":"X";
        step+=1;
    }

}
function compStep(){
    let freeCells = [];
    const tds = document.querySelectorAll("td");
    for (const td of tds) {
        if (td.innerText === ""){
            freeCells.push(td);
        }
    }
    if (){
        return
    }

    const pick = freeCells[Math.floor(Math.random() * freeCells.length)];

}

function start() {
    const tds = document.querySelectorAll("td");
    for (let td of tds) {
        td.innerText = "";
    }


}


const elem = document.getElementById("newgame");
elem.addEventListener("click", start)


