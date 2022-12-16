<?php

/***************************** NESTED LOOP *****************************/
for ($row = 1; $row <= 5; $row++) {
    echo "*";
    echo "<br>";
}

echo "<hr>";

for ($col = 1; $col <= 8; $col++) { 
    echo "*";
}

echo "<hr>";

for ($row = 1; $row <= 5; $row++) {
    for ($col = 1; $col <= 8; $col++) {
        echo "*";
    }
    echo "<br>";
}

/*
$row        $row<=5             $col            $col<=8      $row++
1           T
                                1               T
                                2               T
                                3               T
                                ...
                                8               T
                                9               F
2           T
                                1               T
                                2               T
                                ...
                                8               T
                                9               F
3           T
                                1               T
                                2               T
                                ...
                                9               F
4           T

6           F
*/

********
********
********
********
********

