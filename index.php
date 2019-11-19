<?php
$url = $_GET['url'];
function buildPage($controller){
    require 'src/function.php';
    require 'src/views/modules/header.php';
    require $controller;
    require 'src/views/modules/footer.php';
};


if (empty($url)){
    buildPage('src/views/home.php');
} else{
    switch ($url) {
        case "liste-annonces":
            buildPage('src/views/liste-annonces.php');
            break;
        default:
            buildPage('src/views/404.php');
            break;
    }
}

?>


