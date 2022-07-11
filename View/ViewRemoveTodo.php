<?php

    require_once "Helper/Input.php";
    require_once "Logic/removeTodoList.php";

    function viewRemoveTodo(){
        $pilihan = input("Nomor (x untuk batal)");

        if($pilihan == "x"){
            echo "Batal menghapus To Do";
        }
        else{

            $success = removeTodoList($pilihan);
            
            if($success){
                echo "Sukses Menghapus To DO Nomor $pilihan" . PHP_EOL;
            }
            else{
                echo "Gagal Menghapus To Do Nomor $pilihan" . PHP_EOL;
            }
        }

    }