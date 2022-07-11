<?php

    require_once "View/ViewShowTodo.php";
    require_once "Logic/addTodoList.php";

    addTodoList("Alam");
    addTodoList("Restu");

    viewShowTodo();