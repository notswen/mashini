"use strict"

let goal = prompt('Введите время, чтобы узнать, сколько осталось до него: ')

let goalSplit = goal.split('/')

let goalReal = new Date(
    +goalSplit[2],
    +goalSplit[1] - 1,
    +goalSplit[0],
    0, 0, 0, 0
)

console.log(goalReal)


// --------------------------------------------------------------------


let clock = document.createElement("div");
document.body.appendChild(clock);


setInterval(() => {

    let currentDate = new Date();
    let difference = goalReal - currentDate;
    let seconds = Math.floor((difference / 1000) % 60);
    let minutes = Math.floor((difference / 1000 / 60) % 60);
    let hours = Math.floor( (difference / 1000 / 60 / 60) % 24);
    let days = Math.floor( (difference / 1000 / 60 / 60 / 24 ) % 365);
    clock.innerText = `${days}` + ":" + `${hours}` + ":" + `${minutes}` + ":" + `${seconds}`;

}, 1000)