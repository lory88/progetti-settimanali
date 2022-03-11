<?php

//variabile che contiene tutte le info ricevute in post
//in base alle informazione che riceve
var_dump($_POST["username"]);
//1. il pattern con cui eseguire il test(l'espresione regolare)
//2. la stringa da testare
//3. risultato: 1(true) se il test passa, altrimenti 0
//$res variabile per la mail
$isEmailValid = preg_match('/^[\w\.]+@([\w-]+\.)+[\w-]{2,4}$/m', $_POST["email"]);//ho reso l'emaail campo obbligatorio nel form
$hasNotEmailMinLength = strlen($_POST["password"]) < 8; //dichiaro le variabili
var_dump($isEmailValid);
if(!$isEmailValid || $hasNotEmailMinLength){
    echo "Accesso negato!! <a href=\"login.html\">Torna al Login</a>";
return;
}
unset($isEmailValid, $hasNotEmailMinLength);//unset serve per eliminare dei dati memorizzati che sono in memoria

//-> se la condizione dell'if è false (ched avrò con un array vuoto) allora !$
if(!$_POST["username"] < 3 || strlen ($_POST["password"]) < 8){//qui controllo se i form sono vuoti, e gli dico che poi accedere solo inserendo i valori
    //sia all'user che alla password ho inserito la lunghezza minima enga rispettata
    echo "Accesso negato!! <a href=\"login.html\">Torna al Login</a>";
return; //per evitare la piramidalizzazione, perchè in questo caso l'else non ne ho la necessita
}
echo "Accesso effettuato con successo!";


//https://tc39.es/ecma262/



?>