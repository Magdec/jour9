<?php
function whoami(){
    if ((null!=$_POST["name"] and $_POST["age"]) and is_string($_POST["name"])and is_int($_POST["age"])){
        echo "Hi, my name is ".$_POST["name"]." and I'm ".$_POST["age"]." years old.";
    }
    else if (null!=$_POST["age"] and !is_string($_POST["name"])and is_int($_POST["age"])){
        echo "Hi, I have no name and I'm ".$_POST["age"]." years old.";
    }
    else if (null!=$_POST["name"] and is_string($_POST["name"])and !is_int($_POST["age"])){
        echo "Hi, my name is ".$_POST["name"];
    }
    else if (!is_string($_POST["name"])and !is_int($_POST["age"])){
        echo "I'm nobody";
    }
}