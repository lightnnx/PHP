<!DOCTYPE html>
<html>
<head>
    <title>Проверка на четность или нечетность</title>
</head>
<body>

<h2>Введите число:</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="number">
    <input type="submit" name="submit" value="Проверить">
</form>

<?php
// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем введенное пользователем число
    $number = $_POST['number'];
    
    // Проверяем, является ли число четным или нечетным
    if ($number % 2 == 0) {
        echo "<p>Число $number четное.</p>";
    } else {
        echo "<p>Число $number нечетное.</p>";
    }
}
?>

</body>
</html>
