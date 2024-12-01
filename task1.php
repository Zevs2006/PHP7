<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обработка массива пользователей</title>
</head>
<body>
    <h1>Обработка массива пользователей</h1>
    <?php
    $users = [
        ['name' => 'Alice', 'age' => 25, 'gender' => 'female'],
        ['name' => 'Bob', 'age' => 30, 'gender' => 'male'],
        ['name' => 'Eve', 'age' => 22, 'gender' => 'female']
    ];
    $totalAge = array_sum(array_column($users, 'age'));
    $averageAge = $totalAge / count($users);
    $women = array_filter($users, fn($user) => $user['gender'] === 'female');
    $womenNames = array_column($women, 'name');

    echo "<p>Средний возраст: $averageAge</p>";
    echo "<p>Имена женщин: " . implode(', ', $womenNames) . "</p>";
    ?>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
