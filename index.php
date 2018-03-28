<?php 
$n = 5;
echo 'Исходные данные: '.$n;
echo '<br>Ответ: '.pairedPrimes($n);

function pairedPrimes ($number){
    $i = $number;
    $answer = [];
    while (2*$number > $i){
        if ($i+2 > 2*$number-1){break;}
        if (primeNumber($i,1) && primeNumber($i+2,1)){
            $answer[] = array($i,$i+2);  
            $i = $i+2;          
        }
        $i++;
    }
    return json_encode($answer);
}

 // является ли число простым
 function primeNumber ($number){
    $answer = [];
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0){
            return false;
        }
    }
    return true;
}
?>