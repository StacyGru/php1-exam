<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Создание новой сессии</title>
        <meta charset="utf-8">
        <style>
            <?php
            require "style.css";
            ?>
            </style>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        </head>
    <body>
    <?php
        if (!isset($num))
            $num = 1;
        
        if (!isset($_POST['add']))  // выбрать тип вопроса и ввести вопрос
            echo '<form method="post">
            <p class="header">Вопрос №'.$num.'</p>
            <label for="type">Выберите тип:</label><br>
            <select id="type" name="type">
                <option value="type1">с открытым ответом (число)</option>
                <option value="type2">с открытым ответом (положительное число)</option>
                <option value="type3">с открытым ответом (строка)</option>
                <option value="type4">с открытым ответом (текст)</option>
                <option value="type5">с единственным выбором</option>
                <option value="type6">с множественным выбором</option>
                </select><br>

                <label for="question">Введите вопрос: </label> <input required type="text" id="question" name="question"> </input><br>
            <input type="submit" name="add" value="Добавить">
            </form>';

        if (isset($_POST['type']) && $_POST['type'] == 'type5') // для типа 5 добавить 4 варианта ответа
        {
            echo '<form>
            <p class="header">Вопрос №'.$num.'</p>
            <label for="radio1">Введите вариант ответа 1: </label> <input required type="text" id="radio1" name="radio1"> </input><br>
            <label for="radio2">Введите вариант ответа 2: </label> <input required type="text" id="radio2" name="radio2"> </input><br>
            <label for="radio3">Введите вариант ответа 3: </label> <input required type="text" id="radio3" name="radio3"> </input><br>
            <label for="radio4">Введите вариант ответа 4: </label> <input required type="text" id="radio4" name="radio4"> </input><br>
            <input type="submit" name="add_radio" value="Добавить варианты ответов">
            </form>';

             if (isset($_POST['radio1']) && isset($_POST['radio2']) && isset($_POST['radio3']) && isset($_POST['radio4']))  // спросить добавить ли ещё вопрос
                echo '<form>
                <input type="submit" name="add_more" value="Добавить ещё вопрос">
                <input type="submit" name="finish" value="Закончить добавление вопросов и создать сессию">
                </form>
                ';
        }

        if (isset($_POST['add_radio']) && $_POST['add_radio'] == 'Добавить варианты ответов')
            echo '<form>
            <input type="submit" name="add_more" value="Добавить ещё вопрос">
            <input type="submit" name="finish" value="Закончить добавление вопросов и создать сессию">
            </form>
            ';
            
        if (isset($_POST['type']) && isset($_POST['question']))
            echo '<form>
            <input type="submit" name="add_more" value="Добавить ещё вопрос">
            <input type="submit" name="finish" value="Закончить добавление вопросов и создать сессию">
            </form>
            ';

            //$mysqli = mysqli_connect ('std-mysql', 'std_940', '12345678', 'std_940'); // подключаемся к БД

            //if (mysqli_connect_errno()) // если не удаётся подключиться выводим сообщение
               //return 'Ошибка подключения к БД: '.mysqli_connect_error();
    ?>
        
        </body>
    </html>