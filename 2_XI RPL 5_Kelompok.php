<?php
$row1 = 10;
for (
    $star3 = $row1;
    $star3 >= 0;
    $star3--
) {
    for (
        $star4 = $star3;
        $star4 >= 0;
        $star4--
    ) {
        echo '*';
    }
    echo "<br>";
}

echo date("d, M Y");
