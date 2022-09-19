<?php
//주석
    echo "몇단을 출력하겠습니까? ";
    $input = rtrim(fgets(STDIN));
    echo $input."단을 출력합니다.\n"."-------------------------"."\n";

    for ($i=1; $i<10; $i++){
        $result = $i * (int)($input);
        echo $input." * ".$i." = $result"."\n";
    }
