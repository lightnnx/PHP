<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сравнение чисел</title>
</head>
<body>
    <h1>Сравнение чисел</h1>
    <form method="post">
        <label for="number1">Введите первое число: </label>
        <input type="number" id="number1" name="number1" required><br><br>
        <label for="number2">Введите второе число: </label>
        <input type="number" id="number2" name="number2" required><br><br>
        <label for="number3">Введите третье число: </label>
        <input type="number" id="number3" name="number3" required><br><br>
        <button type="submit">Сравнить</button>
    </form>

    <?php
    // Проверяем, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем введенные пользователем числа
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $number3 = $_POST["number3"];

        // Определяем наибольшее и наименьшее числа
        $max_number = max($number1, $number2, $number3);
        $min_number = min($number1, $number2, $number3);

        // Выводим результат
        echo "<p>Наибольшее число: $max_number</p>";
        echo "<p>Наименьшее число: $min_number</p>";
    }
    ?>
</body>
</html>
