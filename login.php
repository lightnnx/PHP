<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин</title>
</head>
<body>
    <h1>Вход</h1>
    <form method="post">
        <label for="username">Логин: </label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Пароль: </label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Войти</button>
    </form>

    <?php
    // Заданные логин и пароль
    $correct_username = "user";
    $correct_password = "password";

    // Проверяем, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Получаем введенные пользователем логин и пароль
        $entered_username = $_POST["username"];
        $entered_password = $_POST["password"];

        // Проверяем совпадение введенных данных с заданными значениями
        if ($entered_username === $correct_username && $entered_password === $correct_password) {
            echo "<p>Добро пожаловать!</p>";
        } else {
            echo "<p>Ошибка входа. </p>";
        }
    }
    ?>
</body>
</html>
