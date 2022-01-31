


<?php

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

if (isset($_POST['nom'], $_POST['age'])
    && !empty($_POST['nom']) && !empty($_POST['age'])) {
    echo "<a href='index.php'>Vos identifiants sont correct</a>";
}
else{
    echo "<a href='../pages/contact.php'>Il y'a un problème</a>";
}