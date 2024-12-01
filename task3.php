<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простые числа до N</title>
</head>
<body>
    <h1>Простые числа до N</h1>
    <form method="post">
        <label for="n">Введите число N:</label>
        <input type="number" name="n" id="n" required>
        <button type="submit">Вычислить</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $N = (int)$_POST['n'];
        function findPrimes($N) {
            $primes = [];
            for ($i = 2; $i <= $N; $i++) {
                $isPrime = true;
                for ($j = 2; $j <= sqrt($i); $j++) {
                    if ($i % $j === 0) {
                        $isPrime = false;
                        break;
                    }
                }
                if ($isPrime) {
                    $primes[] = $i;
                }
            }
            return $primes;
        }
        $primes = findPrimes($N);
        echo "<p>Простые числа до $N: " . implode(', ', $primes) . "</p>";
    }
    ?>
    <a href="index.php">Вернуться на главную</a>
</body>
</html>
