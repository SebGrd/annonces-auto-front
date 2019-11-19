<?php

function frontFolder($subfolders){
    // TODO : Gérer si le serveur est un HTTP ou HTTPS
    return 'http://'.$_SERVER['HTTP_HOST'].'/frontend'.$subfolders;
}
