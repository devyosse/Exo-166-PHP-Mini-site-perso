<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page'])){
		include __DIR__.'/../pages/home.php';
        exit();
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {
        include __DIR__.'/../pages/bio.php';
        exit();
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {
        include __DIR__.'/../pages/contact.php';
        exit();
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}


function getUserData(){
        $file = file_get_contents('../data/user.json');
        $fileJson = json_decode($file, true);
        if (isset($tableJson)){
            $name = $fileJson['name'];
            $first_name = $fileJson['first_name'];
            $occupation = $fileJson['occupation'];
            $experiences = $fileJson['experiences'];
            ?><div id="bio"><?php
            echo $first_name . ' ';
            echo $name . ' ' . '<br>';
            echo $occupation . ' ';

            foreach ($experiences as $nom){
                foreach ($nom as $value) {
                    echo $value . '<br>';
                }
            }
        }
        ?></div><?php
}



