<?php
function render_body($string){
    if ($string!= "home" and  "php" and "sql" )
        return "<p>Unknown page </p>";
    else
    $file=$string.".html";

    return file_get_contents($file);
}
