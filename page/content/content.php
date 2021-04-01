<?php
    switch(strtolower($page)){
        default:
        case "beranda" :
            include "beranda.php";
            break;
        case 'skema':
            include "skema.php";
            break;
        case "galery":
            include "galery.php";
            break;
        case "tentangku":
            include "tentangku.php";
            break;
            
    }
?>