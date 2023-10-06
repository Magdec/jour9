<?php
function form_is_submitted()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        return true;
    } else
        return false;
}

function whoami(){
    function phrase_1(){
    if ((null!=$_POST["name"] and $_POST["age"]) and is_string($_POST["name"])and is_int($_POST["age"])){
        return "Hi, my name is ".$_POST["name"]." and I'm ".$_POST["age"]." years old.";
    }
    else if (null!=$_POST["age"] and !is_string($_POST["name"])and is_int($_POST["age"])){
        return "Hi, I have no name and I'm ".$_POST["age"]." years old.";
    }
    else if (null!=$_POST["name"] and is_string($_POST["name"])and !is_int($_POST["age"])){
        return "Hi, my name is ".$_POST["name"];
    }
    else {
        return "I'm nobody";
    }
    }
    function phrase_2(){
        if (null != $_POST["curriculum"] and is_string($_POST["curriculum"])) {
            return "I'm a student of ".$_POST["curriculum"];
        }
        else{
            return null;
        }
    }
    echo phrase_1().phrase_2();
}