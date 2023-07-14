<?php
$data = json_decode(file_get_contents('php://input'), true);
$st = $data['firstNum'];
$nd = $data['secondNum'];
$ope = $data['operation'];
if ($data['operation'] === "+"){
    $result = $st + $nd;
} elseif ($data['operation'] === "-"){
    $result = $st - $nd;
} elseif ($data['operation'] === "*"){
    $result = $st * $nd;
} elseif ($data['operation'] === "/"){
    if ($nd !== 0){
        $result = $st / $nd;
    } else {
        $error = "Делить на 0 нельзя!";
    }
}else {
    $error = "Введен неверный знак операции";
}

if (!(is_numeric($st))){
    $error = "не числовое значение(1)";
}
if (!(is_numeric($nd))){
    $error = "не числовое значение(2)";
}

echo json_encode([
    'message' => $result,
    'error' => $error
]);
