<?php
$counter = 1;
while (true) {
    echo "Halo Break : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 100) {
        break;
    }
}
