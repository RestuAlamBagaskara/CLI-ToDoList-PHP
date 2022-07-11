<?php

    require_once "Model/ToDoList.php";
    require_once "Logic/addTodoList.php";
    require_once "Logic/removeTodoList.php";
    require_once "Logic/ShowTodoList.php";

    addTodoList("Alam");
    addTodoList("Bagas");
    addTodoList("Restu");

    showTodoList();

    removeTodoList(4);

    showTodoList();
