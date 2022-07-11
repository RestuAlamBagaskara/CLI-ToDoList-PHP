<?php

    require_once "Model/ToDoList.php";
    require_once "Helper/Input.php";
    require_once "Logic/addTodoList.php";


    function viewAddTodo(){
        echo "Menambah Todo" . PHP_EOL;

        $todo = input("Todo (x untuk batal)");

        if($todo == "x"){
            echo "Batal Menambah To Do";
        }else{
            addTodoList($todo);
        }
        
    }