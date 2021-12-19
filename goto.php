<?php

goto a;
echo "Hallo semuanya";

a:
echo "Hello akuu";

//goto di perulangan
$counter = 1;
while(true){
    echo "ini adalah for while ke-$counter".PHP_EOL;
    $counter ++;
    if($counter > 10){
        goto end;
    }
}

end:
echo "end Loop";