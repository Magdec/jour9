<?php
function dynamic_body(){
    $file=$_GET['page'];

    if ($file!= "home" and  "php" and "sql" )
        return "<p>Unknown page </p>";
    else
        $file=$file.".html";

    return file_get_contents($file);
}