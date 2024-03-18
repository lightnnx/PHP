<?php
// Запрос у пользователя номера месяца
$monthNumber = (int) readline("Введите номер месяца (1 - январь, 2 - февраль и т.д.): ");

// Определение времени года
switch ($monthNumber) {
    case 1:
    case 2:
    case 12:
        $season = "зима";
        break;
    case 3:
    case 4:
    case 5:
        $season = "весна";
        break;
    case 6:
    case 7:
    case 8:
        $season = "лето";
        break;
    case 9:
    case 10:
    case 11:
        $season = "осень";
        break;
    default:
        $season = "неверный номер месяца";
}

// Вывод времени года
echo "Время года: $season";
?>
