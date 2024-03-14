<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Определение уровня тренировки</title>
</head>
<body>
    <h1>Определение уровня тренировки</h1>
    <form method="post">
        <label for="age">Введите ваш возраст: </label>
        <input type="number" id="age" name="age" required>
        <button type="submit">Проверить</button>
    </form>

    <?php
    // Проверяем, был ли отправлен возраст
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем возраст из формы
        $age = $_POST["age"];

        // Определяем уровень тренировки
        if ($age <= 18) {
            echo "<p>Вы находитесь на этапе начинающего.</p>";
        } elseif ($age > 18 && $age <= 30) {
            echo "<p>Вы находитесь на среднем уровне.</p>";
        } else {
            echo "<p>Вы профессионал.</p>";
        }
    }
    ?>
</body>
</html>
