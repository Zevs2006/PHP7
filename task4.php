<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подсчет слов в тексте</title>
</head>
<body>
    <h1>Подсчет слов в тексте</h1>
    <form method="post">
        <label for="text">Введите текст:</label>
        <textarea name="text" id="text" rows="3" required></textarea>
        <button type="submit">Анализировать</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $text = strtolower($_POST['text']);
        $words = explode(' ', $text);
        $totalWords = count($words);
        $wordFrequency = array_count_values($words);
        $uniqueWords = count($wordFrequency);

        echo "<p>Общее количество слов: $totalWords</p>";
        echo "<p>Количество уникальных слов: $uniqueWords</p>";
        echo "<p>Частота слов:</p><ul>";
        foreach ($wordFrequency as $word => $count) {
            echo "<li>$word => $count</li>";
        }
        echo "</ul>";
    }
    ?>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
