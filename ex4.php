<?php 

function MeterToCentimeter($value){
    
    if(!$value or $value <0)
    return 0;
    else
    return $value*100;
}

echo(MeterToCentimeter(-5).PHP_EOL);

?>