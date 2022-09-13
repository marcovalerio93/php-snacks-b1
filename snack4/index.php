<?php

set_time_limit(300);

$nuemeriCasuali = [];

while(count ($nuemeriCasuali) < 15) {
    $nuemeriTest = rand(1, 30);

    if (!in_array($numeriTest, $nuemeriCasuali)){
        $nuemeriCasuali[] = $numeriTest;
    }

}

var_dump( $nuemeriCasuali);