<?php 

$number = intval($argv[1]);

if($number <= 0){
    echo "Geen wisselgeld";
} else {
    echo "$number x 1 euro";
}