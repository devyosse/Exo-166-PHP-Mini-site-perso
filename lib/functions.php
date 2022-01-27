<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
        if(file_exists("../pages/bio.php")){
            $content = file("../pages/bio.php");
            echo $content;
        }
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
        if(file_exists("../pages/contact.php")){
            $content = file("../pages/contact.php");
            echo $content;
        }
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
   $file = file_get_contents('../data/user.json');
    json_decode($file);
    echo $file;
}