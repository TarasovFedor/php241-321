<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img class="logo" src="./Mospolytech.jpg" alt="Mospolytech logo">
        <h1>4.2. Домашняя работа: Calculator.</h1>
    </header>
    <main>
        <div class="calc">
            <div class="field">
                <form action="calculate.php" method="post" class="calcForm">
                    <p class="input">0</p>
                    <input type="hidden" name="expression" class="expression" value="0">
                </form>
            </div>
            <div class="row">
                <button class="btn brace">(</button>
                <button class="btn brace">)</button>
                <button class="btn erase">C</button>
                <button class="btn delete">DEL</button>
            </div>
            <div class="row">
                <button class="btn number">1</button>
                <button class="btn number">2</button>
                <button class="btn number">3</button>
                <button class="btn operator">+</button>
            </div>
            <div class="row">
                <button class="btn number">4</button>
                <button class="btn number">5</button>
                <button class="btn number">6</button>
                <button class="btn operator">-</button>
            </div>
            <div class="row">
                <button class="btn number">7</button>
                <button class="btn number">8</button>
                <button class="btn number">9</button>
                <button class="btn operator">*</button>
            </div>
            <div class="row">
                <button class="btn number">0</button>
                <button class="btn dot">.</button>
                <button class="btn equal">=</button>
                <button class="btn operator">/</button>
            </div>
        </div>
    </main>

    <script src="script.js"></script>

    <footer>задание для самостоятельной работы</footer>
</body>
</html>


