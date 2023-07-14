"use strict"

async function requestCalculator(fnum,snum,sign){
    const res = await fetch("./calculator.php", {
        method: "post",
        body: JSON.stringify({
            firstNum: fnum,
            secondNum: snum,
            operation: sign
        })
    });
    const result = await res.json();
    console.log(result);
    if (result.error)
    alert("Ошибка: " + result.error)
    else
    alert("результат: " + result.message)
}

const fnum = +prompt("первое число: ");
const snum = +prompt("второе число: ");
const sign = prompt("знак операции: ");
requestCalculator(fnum,snum,sign);