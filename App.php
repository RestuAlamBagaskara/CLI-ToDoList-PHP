<?php

    require_once "Model/ToDoList.php";
    require_once "Logic/ShowTodoList.php";
    require_once "Logic/addTodoList.php";
    require_once "Logic/removeTodoList.php";
    require_once "View/ViewShowTodo.php";
    require_once "View/ViewAddTodo.php";
    require_once "View/ViewRemoveTodo.php";
    require_once "Helper/Input.php";

    echo "Aplikasi ToDo List" . PHP_EOL;

    viewShowTodo();
