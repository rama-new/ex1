<?php 

function MaiorMenor(...$numbers){
    $maior=PHP_INT_MIN;
    $menor=PHP_INT_MAX;

    foreach($numbers as $number){
        if($number >$maior)
            $maior = $number;
        if($number <$menor)
            $menor = $number;
        echo $number.PHP_EOL;
    }
    echo 'maior: '.$maior.PHP_EOL;
    echo 'menor: '.$menor.PHP_EOL;
}
//exemplo de uso
MaiorMenor(1,2,3,54,424,654,56000,-23412,413,122);


?>