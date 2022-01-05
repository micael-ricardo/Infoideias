<?php
$num = array(1,2,2,3,4,4,3,5,7,6,8,1,7,9,3,4,4,3,2,1);
$rand_keys = array_rand($num, 20);

echo "arrey sorteado =". $num[$rand_keys[0]] . "\n";
echo $num[$rand_keys[1]] . "\n";
echo $num[$rand_keys[2]] . "\n";
echo $num[$rand_keys[3]] . "\n";
echo $num[$rand_keys[4]] . "\n";
echo $num[$rand_keys[5]] . "\n";
echo $num[$rand_keys[6]] . "\n";
echo $num[$rand_keys[7]] . "\n";
echo $num[$rand_keys[8]] . "\n";
echo $num[$rand_keys[9]] . "\n";
echo $num[$rand_keys[10]] . "\n";
echo $num[$rand_keys[11]] . "\n";
echo $num[$rand_keys[12]] . "\n";
echo $num[$rand_keys[13]] . "\n";
echo $num[$rand_keys[14]] . "\n";
echo $num[$rand_keys[15]] . "\n";
echo $num[$rand_keys[16]] . "\n";
echo $num[$rand_keys[17]] . "\n";
echo $num[$rand_keys[18]] . "\n";
echo $num[$rand_keys[19]] . "\n";

$nrepete = array_count_values($num);

$novo = array();
foreach ($nrepete as $k => $v){
    if($v === 1) $novo[] = $k;
}

echo "<br>"."Os números que não se repetem são os"."<pre>";
print_r($novo);
