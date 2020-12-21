<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет администратора</title>
</head>
<body>
<?php
if ((!isset($_POST['password']) || $_POST['password'] != '12345') && !isset($_POST['buttoncr']))
{
    echo '
    <fieldset>
        <legend> Войти в кабинет администратора </legend><form name="form" method="post" action="">
    <label for="passwod">Пароль </label>
            <input type="password" name="password" id="password" required autofocus><br>
            <input type="submit" name="button" value="Войти">
    </form> </fieldset>';
}
else {
    include 'admin.php';
}
?>
</body>
</html>