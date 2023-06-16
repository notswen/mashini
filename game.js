"use strict"

let multiply = document.createElement("div")
multiply.innerText = "BEST GAME IN THE WORLD 2023 FROM BEST GAMEMAKER YOU WON'T STOP PLAYING THIS";
document.body.append(multiply)
multiply.className = "nadpis";

let table = document.createElement("table");

document.body.append(table);

let game = [];

function createGameTable() {
    for (let i = 0; i < 30; i++) {
        let stroki = document.createElement("tr");
        game.push([]);
        table.append(stroki);

        for (let j = 0; j < 60; j++) {
            let stolbtsy = document.createElement("td")
            table.appendChild(stolbtsy);
            let alive = Math.random() < 0.3;
            game[i].push({
                alive: alive,
                td: stolbtsy
            });
            stolbtsy.className = alive ? "fortd alive" : "fortd";

        }
    }
    console.log(game)
}

createGameTable()
redrawGameTable(game);

function redrawGameTable(arr2) {
    for (let i = 0; i < 30; i++) {
        for (let j = 0; j < 60; j++) {
            let stolbtsy = arr2[i][j];
            // stolbtsy.td.style.background = "green";

        }
    }
}

function updateGameTable() {
    let newGame = [];

    for (let i = 0; i < 30; i++) {
        for (let j = 0; j < 60; j++) {
            let neighbours = 0;
            if (game[i][j + 1].alive) {
                neighbours += 1
            }
            if (game[i][j - 1].alive) {
                neighbours += 1
            }
            if (i< 29 && game[i + 1][j].alive) {
                neighbours += 1
            }
            if (i >= 0 && game[i - 1][j].alive) {
                neighbours += 1
            }
            if (i < 29 && j< 59 && game[i + 1][j + 1].alive) {
                neighbours += 1
            }
            if (game[i - 1][j + 1].alive) {
                neighbours += 1
            }
            if (game[i - 1][j - 1].alive) {
                neighbours += 1
            }
            if (game[i + 1][j - 1].alive) {
                neighbours += 1
            }
        }
    }

    redrawGameTable();
}


