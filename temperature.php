<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конвертер температуры</title>
</head>
<body>
    <h1>Конвертер температуры</h1>
    <form method="post">
        <label for="temperature">Температура: </label>
        <input type="number" id="temperature" name="temperature" required><br><br>
        <label for="unit">Выберите единицы измерения: </label>
        <select id="unit" name="unit">
            <option value="celsius">Градусы Цельсия</option>
            <option value="fahrenheit">Градусы Фаренгейта</option>
        </select><br><br>
        <button type="submit">Конвертировать</button>
    </form>

    <?php
    // Проверяем, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем введенные пользователем температуру и выбранные единицы измерения
        $temperature = $_POST["temperature"];
        $unit = $_POST["unit"];

        // Выполняем конвертацию
        if ($unit === "celsius") {
            $fahrenheit = ($temperature * 9/5) + 32;
            echo "<p>$temperature градусов Цельсия равно $fahrenheit градусов Фаренгейта</p>";
        } elseif ($unit === "fahrenheit") {
            $celsius = ($temperature - 32) * 5/9;
            echo "<p>$temperature градусов Фаренгейта равно $celsius градусов Цельсия</p>";
        }
    }
    ?>
</body>
</html>
