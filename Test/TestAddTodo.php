<?php

    require_once "Model/ToDoList.php";
    require_once "Logic/addTodoList.php";

    addTodoList("Alam");
    addTodoList("Bagas");

    var_dump($todoList);