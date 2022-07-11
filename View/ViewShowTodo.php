<?php

    require_once "Model/ToDoList.php";
    require_once "Logic/ShowTodoList.php";
    require_once "View/ViewAddTodo.php";
    require_once "View/ViewRemoveTodo.php";
    require_once "Helper/Input.php";

    function viewShowTodo(){

        while(true){
            showTodoList();
            
            echo "Menu" . PHP_EOL;
            echo "1. Tambah To Do" . PHP_EOL;
            echo "2. Hapus To Do" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL;

            $pilihan = input("Pilih ");

            if($pilihan == 1){
                viewAddTodo();
            }
            elseif($pilihan == 2){
                viewRemoveTodo();
            }
            elseif($pilihan == "x"){
                break;
            }
            else{
                echo "Pilihan Tidak Dimengerti" . PHP_EOL;
            }
        }  

        echo "Sampai Berjumpa Lagi" . PHP_EOL;
    }