<?php 
$b = 0;
do {
    $b++;
    echo"$b";
} while ($b <= 10);


$array = ['Ryandra','Athaya','Saleh'];

foreach ($array as $key => $value) {
    echo "$key" .'-'. $value;
}