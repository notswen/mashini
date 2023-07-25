// const gameBoard = document.getElementById("gameBoard");
const gameBoard = {
    element: document.getElementById("gameBoard"),
    w: 800,
    h: 600
};
const basket = {
    element: document.getElementById("basket"),
    x: 300,
    y: 550,
    w: 80,
    h: 40,
    speed: 0,
    maxSpeed: 500,
};
const fruits = [];
const fruitImgs = [
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSijZ0GGd2dRCMxBwopk0Qlm6YLyjoM5UFT7g&usqp=CAU",
    "https://cdn-icons-png.flaticon.com/512/8616/8616989.png",
    "https://cdn-icons-png.flaticon.com/512/8616/8616923.png"
];
const livesCounter = document.getElementById("livesCounter");
const scoreCounter = document.getElementById("scoreCounter");
const timeCounter = document.getElementById("timeCounter");
let gameTime = 0;
let gameLives = 3;
let gameScore = 0;

let countGames = 0;
let gameStop = true;

function main() {
    document.addEventListener("keydown", (evt) => {
        if (evt.code === "ArrowRight") {
            basket.speed = basket.maxSpeed;
        } else if (evt.code === "ArrowLeft") {
            basket.speed = -basket.maxSpeed;
        }
    });
    document.addEventListener("keyup", () => {
        basket.speed = 0;
    });
}

function startGame  () {
    requestAnimationFrame(() => update(Date.now()));

    createFruit();
    spawnFruits();
}

function spawnFruits() {
    setTimeout(() => {
        for (let i = 0; i < 3; i++) {
            createFruit();
        }
        if (gameLives > 0) {
            spawnFruits();
        }
    }, 5_000 / (gameTime / 10 + 1));
}

function createFruit() {
    const fruitX = Math.random() * (gameBoard.w - 50);
    const fruitY = -50;

    const fruitElem = document.createElement("img");
    const imageIndex = Math.floor(Math.random() * fruitImgs.length);
    fruitElem.classList.add("fruit");
    fruitElem.src = fruitImgs[imageIndex];
    fruitElem.style.left = fruitX + "px";
    fruitElem.style.top = fruitY + "px";
    gameBoard.element.appendChild(fruitElem);

    fruits.push({
        elem: fruitElem,
        w: 50,
        h: 50,
        x: fruitX,
        y: fruitY,
        speed: 30 + Math.random() * 30,
        rotate: 0,
        rotateSpeed: (Math.random() * 180) * (Math.random() < 0.5 ? 1 : -1),
    });

}

function update(prevTime) {
    const nowTime = Date.now();
    const deltaTime = (nowTime - prevTime) / 1000;

    gameTime += deltaTime;
    // ДЗ: 90 -> 1:30
    timeCounter.innerText = new Date(gameTime * 1000).toISOString().slice(14, 19);
    ;

    for (const fruit of fruits) {
        fruit.y += fruit.speed * deltaTime;
        fruit.elem.style.top = fruit.y + "px";

        fruit.rotate += fruit.rotateSpeed * deltaTime;
        fruit.elem.style.transform = `rotateZ(${fruit.rotate}deg)`;
    }

    for (let i = 0; i < fruits.length; i++) {
        const fruit = fruits[i];
        if (fruit.y > gameBoard.h) {
            fruits.splice(i, 1);
            gameBoard.element.removeChild(fruit.elem);
            gameLives--;
            i--;
        }
    }

    for (let i = 0; i < fruits.length; i++) {
        const fruit = fruits[i];
        if (
            Math.abs((basket.y + basket.h / 2) - (fruit.y + fruit.h / 2)) < 20 &&
            Math.abs((basket.x + basket.w / 2) - (fruit.x + fruit.w / 2)) < 40
        ) {
            fruits.splice(i, 1);
            gameBoard.element.removeChild(fruit.elem);
            gameScore += 5;
            i--;
        }
    }

    basket.x += basket.speed * deltaTime;
    if (basket.x < 0) {
        basket.x = 0;
    } else if (gameBoard.w - basket.w < basket.x) {
        basket.x = gameBoard.w - basket.w;
    }
    basket.element.style.left = basket.x + "px";

    scoreCounter.innerText = gameScore.toString();
    livesCounter.innerText = gameLives.toString();


    if (gameLives > 0 && !gameStop) {
        requestAnimationFrame(() => update(nowTime));
    }

}

restarty.addEventListener("click", () => {
    if (countGames % 2 === 0) {
        gameStop = false;
        startGame();
    } else {
        gameTime = 0;
        gameLives = 3;
        gameScore = 0;

        while (fruits.length > 0) {
            const fruit = fruits.pop();
            gameBoard.element.removeChild(fruit.elem);
        }

        gameStop = true;
    }
    countGames += 1;
});

main();