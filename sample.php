<?php
// Your code here!
$num = [1,2,3,4,5];
function saidai($num){
    $max = $num[0];
    foreach( $num as $n){
        if($max < $n){
            $max = $n;
        }
    }
    return $max;
}
$m = saidai($num);
echo $m;
?>