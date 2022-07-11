<?php

    require_once "View/ViewAddTodo.php";
    require_once "Logic/ShowTodoList.php";
    require_once "Logic/addTodoList.php";

    addTodoList("Alam");
    addTodoList("Restu"); 

    viewAddTodo();

    showTodoList();