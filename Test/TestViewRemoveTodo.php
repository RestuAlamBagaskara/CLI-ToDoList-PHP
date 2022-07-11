<?php
    require_once "Model/ToDoList.php";
    require_once "View/ViewRemoveTodo.php";
    require_once "Logic/addTodoList.php";
    require_once "Logic/ShowTodoList.php";


    addTodoList("Alam");
    addTodoList("Restu");

    showTodoList();

    viewRemoveTodo();

    showTodoList();