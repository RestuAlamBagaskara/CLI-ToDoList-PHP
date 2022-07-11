<?php

    require_once "Helper/Input.php";

    $name = input("Name");
    $asal = input("Asal");
    
    echo "Hello, $name dari $asal";