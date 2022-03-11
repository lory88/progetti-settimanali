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

$a = [10, 15, 23, 77, 3];
$min = $a[0];
for($idx = 0; $idx <count($a); $idx++){
    if($a[$idx] < $min){
        $min = $a[$idx];

    };
};
var_dump($min);



/**
 * return the min found in the given $numbers array
 * @param array $numbers
 * @return int
 * 
 */
function myMin(array $numbers): int{
    if(!count($numbers)){
        throw new Exception ('Empty array not allowed');
    }
    $min = $numbers[0];


    foreach($numbers as $number){
        if($number < $min){ //se il numero è minore di min
            $min = $number; //allora sovrascrivi
        }
    }
  return $min;  
}
$numbers = [30, 12, 8, 45, 1, 6];
$minValue = myMin($numbers);

echo $minValue;

//eco myMin ([]);//mandare in stampa un array vuoto mi genre l'errore, vedi errore sopra

try{
    echo myMin ([]);//$e è la variabile della Exception
}    catch (Exception $e) {
        echo "Exception handled {$e->getMessage()}";
   
}
//avendo gestito l'eccezione, l'esecuzione dello script non si interrompe
//e posso proseguire 
echo "Righe successive";//se non usassi il try le righe successivev non le visualizzo
?>
</body>
</html>