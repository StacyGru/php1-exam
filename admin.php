<?php
    echo '<a href="/?page=create" style="color: green;">Создать новую сессию</a><br>';
    echo '<a href="/?page=close" style="color: red;">Закрыть одну из текущих сессий</a><br>';
    echo '<a href="/?page=view" style="color: blue;">Просмотр информации по всем сессиям</a><br>';

    if (isset($_GET(['page']) && $_GET(['page'] == 'create')
        require 'create.php';
?>