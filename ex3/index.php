<?php
 
function FtoC($Ftemp){

    $Ctemp = (double) 0;
    if(!$Ftemp){
        echo 'Erro'.PHP_EOL;
        return $Ctemp;
    }
    else{
        $Ctemp = ($Ftemp - 32)/1.8;
        return $Ctemp;
    }
}
echo(FtoC(59));
?>