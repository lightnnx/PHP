<?php
// Определение меню ресторана
$menu = [
    1 => ['name' => 'Стейк', 'price' => 25.99],
    2 => ['name' => 'Паста', 'price' => 12.50],
    3 => ['name' => 'Салат', 'price' => 8.99],
    4 => ['name' => 'Пицца', 'price' => 17.75],
    5 => ['name' => 'Рыба', 'price' => 19.99]
];

// Вывод меню
echo "Меню ресторана:\n";
foreach ($menu as $key => $item) {
    echo "$key. {$item['name']} - {$item['price']} $\n";
}

// Запрос у пользователя выбора блюд
$order = [];
while (true) {
    $choice = (int) readline("Выберите блюдо (для завершения введите 0): ");
    if ($choice === 0) {
        break;
    }
    if (array_key_exists($choice, $menu)) {
        $order[] = $choice;
    } else {
        echo "Неверный номер блюда. Попробуйте снова.\n";
    }
}

// Вычисление общей стоимости заказа
$totalPrice = 0;
foreach ($order as $choice) {
    $totalPrice += $menu[$choice]['price'];
}

// Вывод итоговой стоимости заказа
echo "Итоговая стоимость заказа: $totalPrice $";
?>
