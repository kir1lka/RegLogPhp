<?php
session_start();
if (isset($_SESSION["user"])) {
    header('Location: ../home.php');
}
?>

<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./src/style/reset.css">
    <link rel="stylesheet" href="./src/style/main.css">

    <title>Регистрация</title>
</head>

<body>
    <!-- form -->
    <form action="./vendor/signUp.php" method="post" class="form" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свою ФИО">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Фото</label>
        <input type="file" name="photo">
        <label>Почта</label>
        <input type="text" name="email" placeholder="Введите свою почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Повторите свой пароль">
        <button class="buttonOpen" name="submit">Зарегистрироваться</button>
        <p class="link-login">Уже есть акканут? <a href="./index.php">Войти</a></p>

        <!-- message error -->
        <?php
        if (isset($_SESSION['messageError'])) {
            echo '<p class="messageError">' . $_SESSION['messageError'] . '</p>';
            unset($_SESSION['messageError']);
        }
        ?>

    </form>
</body>

</html>