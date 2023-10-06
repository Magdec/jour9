<?php
function display_menu(){
    return '<ul>
        <li><a href=" ?> include(home.php)<?php home.php ">Home</a></li>
        <li><a href=" ?> include(product.php)<?php product.php ">Products</a></li>
        <li><a href=" ?> include(about.php)<?php about.php ">About Us</a></li>
        <li><a href=" ?> include(contact.php)<?php contact.php ">Contact</a></li>
    </ul>';
}