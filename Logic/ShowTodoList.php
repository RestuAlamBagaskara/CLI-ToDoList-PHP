<?php

//Menampilkan Todo dalam List

    function showTodoList(){
        global $todoList;

        echo "ToDo List" . PHP_EOL;

        foreach ($todoList as $number => $value){
            echo "$number . $value" . PHP_EOL;
        }
    }