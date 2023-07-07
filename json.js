"use strict"

// sessionStorage.setItem('test',1+1);
// alert(sessionStorage.getItem('test'));


// window.addEventListener('storage', event => {
//     if (event.key != 'now') return;
//     alert(event.key + ':' + event.newValue + " at " + event.url);
// });
//
// localStorage.setItem('now', 12312312);



// const user = {
//     id: 12412,
//     name: "Ivan"
// };
//
// const userJson = JSON.stringify(user);
//
// localStorage.setItem("user", userJson);
//
// const userFromStorage = localStorage.getItem("user");
//
// const userObject = JSON.parse(userFromStorage);
//
// console.log(userObject)

let count = +localStorage.getItem("dada");

const press = document.createElement("button")
press.innerText = "+";
document.body.appendChild(press);

const pressdown = document.createElement("button")
pressdown.innerText = "-";
document.body.appendChild(pressdown);

const deletedata = document.createElement("button")
deletedata.innerText = "delete";
document.body.appendChild(deletedata);

const counter = document.createElement("div");
counter.innerText = count;
document.body.appendChild(counter);

press.addEventListener("click", () => {
    count+=1;
    localStorage.setItem("dada", count);
    counter.innerText = count;

})

pressdown.addEventListener("click", () => {
    count-=1;
    localStorage.setItem("dada", count);
    counter.innerText = count;

})

deletedata.addEventListener("click", () => {
    localStorage.removeItem("dada");
    count = 0;
    counter.innerText = 0;


})

window.addEventListener('storage', event => {
    count = +event.newValue;
    counter.innerText = +event.newValue;
});

localStorage.setItem('dada', count);


