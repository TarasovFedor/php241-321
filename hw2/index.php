<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <img class="logo" src="./Mospolytech.jpg" alt="Mospolytech logo">
            <h1>4.1. Домашняя работа: Feedback Form.</h1>
        </header>

        <main>
            <form action="https://httpbin.org/post" method="post">
                <label for="username">Имя пользователя</label>
                <input type="text" name="username">
                <label for="email">e-mail пользователя</label>
                <input type="email" name="email">
                <label for="message">Тип обращения (жалоба, предложение, благодарность)</label>
                <input type="text" name="message" list="message-list" required>
                <datalist id="message-list">
                    <option value="Жалоба">
                    <option value="Предложение">
                    <option value="Благодарность">
                </datalist>
                <label for="message-text">Текст обращения</label>
                <textarea name="message-text"></textarea>
                <label for="option">Вариант ответа
                    <br>
                    <label for="sms">SMS</label>
                    <input type="checkbox" name="sms" value="sms">
                    <br>
                    <label for="letter">e-mail</label>
                    <input type="checkbox" name="letter" value="e-mail">
                </label>

                <button type="submit">Отправить</button>
            </form>

            <a href="output.php">Страница с выводом</a>
        </main>

        <footer>задание для самостоятельной работы</footer>

    </div>
</body>
</html>


