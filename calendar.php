<?php
// Получаем номер дня недели от пользователя
$dayNumber = (int) readline("Введите номер дня недели (1 - Понедельник, 2 - Вторник и т.д.): ");

// Определяем название дня недели
switch ($dayNumber) {
    case 1:
        $dayName = "Понедельник";
        break;
    case 2:
        $dayName = "Вторник";
        break;
    case 3:
        $dayName = "Среда";
        break;
    case 4:
        $dayName = "Четверг";
        break;
    case 5:
        $dayName = "Пятница";
        break;
    case 6:
        $dayName = "Суббота";
        break;
    case 7:
        $dayName = "Воскресенье";
        break;
    default:
        $dayName = "Неверный номер дня недели";
}

// Выводим результат
echo "День недели: $dayName";
?>
