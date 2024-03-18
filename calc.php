<?php

$number1 = $_POST['number1'] ?? null;
$number2 = $_POST['number2'] ?? null;
$operator = $_POST['operator'] ?? null;


if ($number1 === null || $number2 === null || $operator === null) {
    echo "Пожалуйста, укажите оба числа и оператор";
    exit;
}


$number1 = floatval($number1);
$number2 = floatval($number2);


switch ($operator) {
    case '+':
        $result = $number1 + $number2;
        break;
    case '-':
        $result = $number1 - $number2;
        break;
    case '*':
        $result = $number1 * $number2;
        break;
    case '/':
        // Проверяем деление на ноль
        if ($number2 == 0) {
            echo "Деление на ноль невозможно";
            exit;
        }
        $result = $number1 / $number2;
        break;
    default:
        echo "Неверный оператор";
        exit;
}


echo "Результат: $result";
?>
