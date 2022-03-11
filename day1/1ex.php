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
//primo esercizio
    $a = [
            ['a', 'b', 'c'],
            ['d', 'e', 'f'],
            ['g', 'h', 'i']
        ];
        foreach($a as $value){ 
foreach ($value as $item ){  
echo("$item") ;  //stampo gli array   
};
}  
//secondo esercizio    

$n = [20, 10, 15, 77, 32]; //devo mettere in ordine crescente i valori dell'array
$min = 20;                  //dovendo confrontare i valori devo fare un doppio ciclo for
$ordine = [];

  for($idx =0; $idx < count($n); $idx++){  //in questo ciclo for confronto il valore minimo(che è 20 perchè è in posizione 0) dell'array con gli altri valori

      }for($idx2 = 0; $idx2 < count($n); $idx2++){//con questo ciclo for avendo ottenuto i valore più piccolo devo procedere col confronto degli altri valori
            if($n[$idx2] < $min){
            $min = $n[$idx2];
            $n [$idx2] = $ordine;
            $ordine []= $n[$idx2];
            var_dump($min);
            echo "$ordine";

        }
      }
    
?>
</body>
</html>