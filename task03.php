<?php
function dynamic_body(){
    $file=$_GET['link'];

    if ($file!= "home" and  "php" and "sql" )
        return "<p>Unknown page </p>";
    else

    return file_get_contents($file);
}