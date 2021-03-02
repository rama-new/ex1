<?php 


function NumToDias($num){
    $dias = [1=>'Domingo',2=>'Segunda',3=>'Terça',4=>'Quarta',5=>'Quinta',6=>'Sexta',7=>'Sabado'];

    if( $num >=1 and $num <=7 and is_int($num) ){
        echo($dias[$num]).PHP_EOL;
    }
    else
        echo 'valor inválido'.PHP_EOL;
    
}
NumToDias(1);
NumToDias(2);
NumToDias(3);
NumToDias(4);
NumToDias(5);
NumToDias(6);
NumToDias(7);
NumToDias(-1);
NumToDias(1.1);
?>