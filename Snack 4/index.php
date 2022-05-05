<?php

$random = [];
while (count($random) < 15) {
    $randomNum = rand(1,100);
    if ( !in_array($randomNum,$random) ) {
        $random[] = $randomNum;
    }
    
}
var_dump($random)  ;

?>