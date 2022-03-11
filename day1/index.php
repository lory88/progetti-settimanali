<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
//variabili di php
//notazione camelCase -prima parola conLaMinuscola
//Dinamically Typed
//datatype di tipo primitivo: valori float, booleani, 
//datatype scalari
$varName = 10;
//echo serve a mostrare ciò che viene scritto a dx, introduciamo un 
//qualcosa che deve stare all'interno del DOM
echo $varName; //forma operatore, richiamiamo la variabile
echo($varName);//qui invochiamo una funzione

$varName = 10 + 0.75;//int + float, cioè intero +decimale -> quindi il risultato diq uesta varibile è un float

$varName = 10;
//$varName = $varName + 0.75;
$varName += 0.75; // i datatype per i valori alfanumerici non cambia
//ma cambia per le stringhe
// in php abbiamo la differenza tra " ';
echo 'sono una stringa che contiene $varName';//in questo caso mi stampa tutto come stringa senza prendere in considerazione la variaile
echo "sono una stringa che contiene $varName";//col doppio apice legge il contenuto della stringa
//echo($varName);
$username = 'Andrea';
//valori booleani
$isSelected = true;
$hasAccess = false;

//*******operatore ternario
//***costrutti si selezione IF-SWITCH */
if (5 > 3){              //condizione nelle()
                         //se l'elemento sottoposto nella condizione dell'if
} elseif () {

}else {

}

//*****
$v = 27;
switch($v){
    case 27:
        return; //per interrompere il flusso senza il break ma dev'essere in una funzione o metodo
        break;//se non metto il break associa il case 27 e 28
    case 28:
        default:

}
//****COSTRUTTI DI ITERaZIONE  CILCO FOR*/
$a + []; //array LITERAL *******idx= indice
//1.inizializzazione
//2. condizione (itero se verificata)
//3. step (il passo che compio per passare il ciclo di iterazione suuccessivo)
for ($idx = 0; $idx < $a.length; $idx++)

//***do while utilizzato quando non si sa il numero di iterazioni da compiere*/
//ciclo con controllo in coda, ho la garanzia che almeno una volta venga eseguito il ciclo
do {

}while(true);

//col while il controllo viene effettuato in testa
while(){

}
//***FUNZIONI */
//function sum(a,b){ -> firma della funzione (o del metodo se in un oggetto)
    //a, b -> parametri formali (si riferisce al nome che do agli alementi)
//***@param */    tutti i parametri formali hanno bisogno del $
@param $a A cosa serve $a
@param $b A cosa serve $b //serve per commentare la funzione
@return int Sum of $a and $b //ritorna somma a+b
function sum(int $a, int $b): int{ //php dinamico, inserisco i valori degli elementi se sono interi,decimali booleani, etc

    return $a + $b;
}

//10, 5 -> parametri attuali
sum(10,5);      //invocare la funzione, dobbiamo anche inserire i valori dai parametri
            //parametri attuali: è  il valore che passo ad a, b, che ho inserito nella funzione
echo sum(10,5); //per stampar a schermo la somma della funzione


//******FOREACH -> funzione per iterare gli elementi di un arraay */
$a = [1,2,3];
foreach($a as $value){ //value è il valore della variabile

    var_dump($value)   //var_dump ci dice cosa è il valore (intero, stringa ecc)
}// se ci serve l'index(indice)


//indice   valore
//0        =>1
//1        =>2
//2        =>3

foreach($a as $idx => $value){//$a è l'array - $idx=indice value=valore dell'array

    var_dump($value) //var_dump serve per fare debugging,ci dà il valore del datatype
                    // ed è orientato allo sviluppatore e non al lato client
}

//****array associativi (asscoiative array), quindi al posto nei numeri degli array 0,1,2 avremo email,username ecc */
$arrAssoc = [ //associa per ogni chiave un valore, molto simile agli oggetti di js
    "email" => "asd@lol.com", //=> array, gli elementi non verranno associati i numeri degli array
    "username" => "asd"
];

foreach($arrAssoc as $k => $value){
    var_dump($k, $value);//per controllare uso var_dump
                        // echo serve per stampare sulla pagina
}

//******MATRICI */
//quando abbiamo un array dentro un altro array avremo
//un array multidimensionali
$a = [
    ['a','b','c'],
    ['d','e','f'],
    ['g','h','i']
]

?>
<div>

    <?php echo $username ? "Benvenuto $username" :"<a href=\"\">Effettua l'accesso </a>" //codice per l'aaccesso di un sito
                                                                                            //"\"\ x dividere gli apici e non farli leggere come 2 stricghe diverse
 
 ?>                                                                                  
</div>
</body>
</html>

