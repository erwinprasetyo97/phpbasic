<?php

$counter = 100;
while ($counter >= 1) :
    echo "Ini For ke- $counter" . PHP_EOL;
    $counter--;
endwhile;

$counter = 100;
do {
    echo "Ini do While ke-$counter" . PHP_EOL;
    $counter--;
} while ($counter >= 10);

$counter = 1;
while (true) {
    echo "ini break ke- $counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    } else {
        echo "Ini Continue ke-$counter" . PHP_EOL;
    }
}
$counter = 1;
while ($counter <= 100) {
    $counter++;
    if ($counter % 2 == 2) {
        continue;
    }
    echo "Ini Continue ke-$counter" . PHP_EOL;
}
