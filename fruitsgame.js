"use strict"

const gameBoard = document.getElementById("gameBoard");

const net = {
    element: document.getElementById("net"),
    x: 300,
    w: 200,
    speed: 0,
    maxSpeed: 100
};

const fruits = [];
const fruitImgs = [
    "data:image/png;base64,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",
    "https://cdn-icons-png.flaticon.com/512/8616/8616989.png",
    "https://cdn-icons-png.flaticon.com/512/8616/8616923.png",
    "https://openclipart.org/image/800px/203250"

];
const livesCounter = document.getElementById("livesCounter");
const scoreCounter = document.getElementById("scoreCounter");
const timeCounter = document.getElementById("timeCounter");

function main(){
    document.addEventListener("keydown", (evt) => {
        if (evt.code === "ArrowRight") {
            net.speed = net.maxSpeed;
        }else if (evt.code === "ArrowLeft") {
            net.speed = -net.maxSpeed;
        }
    });
    document.addEventListener("keyup", () => {
        net.speed = 0;
    });
    requestAnimationFrame( () => update(Date.now()));
    console.log(net )

}

function update(prevTime){
    const nowTime = Date.now();
    const deltaTime = (nowTime - prevTime) / 1000;

    net.x += net.speed * deltaTime;
    net.element.style.left = net.x + "px";

    requestAnimationFrame( () => update(nowTime));

}

main();