<?php
    function media(...$numbers){
        $tot = (double)0;
            foreach($numbers as $number){
                $tot= $tot+ $number;
            }
            $tot=$tot/count($numbers);
            echo $tot.PHP_EOL;
        }
        // 
        media(1,2,3,4,5,6);
        media(1,2.5, 4.72);
        media(1,2,3,4,5,6,7,8,4,4,4,4,4,4,4);


?> 