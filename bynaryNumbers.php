<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$dvojiski = decbin($n);
$stevke = str_split($dvojiski);
$count = 0;
$big_count = 0;
foreach ($stevke as $value) {
    if ($value == 1 && $count >= $big_count){
        $count = $count + 1;
        $big_count = $count;
    }
    else if ($value == 1 && $count < $big_count){
        $count = $count + 1;
    }
    else if ($value == 0 && $count >= $big_count){
        $big_count = $count;
        $count = 0;
    }
    else if ($value == 0 && $count < $big_count){
        $count = 0;
    }
}
print $big_count;

?>
