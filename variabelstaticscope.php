<?php 
function incremen(){
    static $counter = 1;//static scope
    echo "Ini counter ke- $counter".PHP_EOL;
    $counter ++;
}
incremen();
incremen();
incremen();
