<?php
// Функция для конвертации валют
function convertCurrency($amount, $currency) {
    switch ($currency) {
        case 'доллар':
            return $amount * 1.18; // Предположим, что курс 1 евро = 1.18 долларов
        case 'евро':
            return $amount * 0.85; // Предположим, что курс 1 доллар = 0.85 евро
        case 'фунт':
            return $amount * 0.73; // Предположим, что курс 1 доллар = 0.73 фунта
        default:
            return "Неверная валюта";
    }
}

// Запрашиваем у пользователя сумму и выбор валюты
$amount = (float) readline("Введите сумму для конвертации: ");
$currency = strtolower(readline("Выберите валюту (доллар, евро, фунт): "));

// Выполняем конвертацию с помощью match
$result = match ($currency) {
    'доллар', 'евро', 'фунт' => convertCurrency($amount, $currency),
    default => "Неверная валюта"
};

// Выводим результат
if (is_numeric($result)) {
    echo "Конвертированная сумма: $result $currency";
} else {
    echo $result;
