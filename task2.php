<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка массива строк</title>
</head>
<body>
    <h1>Сортировка массива строк</h1>
    <?php
    $words = ['apple', 'banana', 'cherry', 'kiwi', 'watermelon'];
    usort($words, fn($a, $b) => strlen($a) - strlen($b));

    echo "<p>Сортировка по длине: " . implode(', ', $words) . "</p>";
    ?>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
