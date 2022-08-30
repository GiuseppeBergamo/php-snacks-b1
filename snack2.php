<?php 

$name = $_GET['name'];

$mail = $_GET['mail'];

$age = $_GET['age'];

if(strlen($name) > 3 && str_contains($mail, '.' && '@') && is_numeric($age)) {
    echo 'Accesso riuscito';
} 
else {
    echo 'Accesso negato';
}

?>