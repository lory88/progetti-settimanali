<?php

$emailRegex = '/^[\w\.]+@([\w-]+\.)+[\w-]{2,4}$/m';
//verifico per primaa cosa che ci siamo 2 indirizzi mail validi
$isFromEmailValid = preg_match($emailRegex, $_POST["from"]);//email valida per il destinatario
$isToEmailValid = preg_match($emailRegex, $_POST["to"]);//email valida per il destinatario

if(!$isFromEmailValid || !$isToEmailValid){ //!indica se l'email è diversa
    echo "Controlla gli indirizzi email";
    return;
}

if(strlen ($_POST["message"]) < 3){
    echo "Messaggio troppo breve";
    return;
}
$headers = [];

//funzione mail
$isSent = mail($_POST["to"], "Oggetto del messaggio", $_POST["message"]);
//verifico se la mail è stata inviata

if(!$isSent){
    echo "email <strong> NON </strong> inviata";
    return;
}
echo "Email inviata con successo!";
?>