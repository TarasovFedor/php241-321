<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <img class="logo" src="./Mospolytech.jpg" alt="Mospolytech logo">
            <h1>4.1. Домашняя работа: Feedback Form.</h1>
        </header>

        <main>
            <?php
                $output = get_headers('https://httpbin.org/post');
                echo "<textarea>";
                print_r($output);
                echo "</textarea>";
            ?>
        </main>

        <footer>задание для самостоятельной работы</footer>

    </div>
</body>
</html>


