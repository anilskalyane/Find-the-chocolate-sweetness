<?php

function getOrdinalSuffix($number) {
    $number = abs($number) % 100;
    $lastChar = substr($number, -1, 1);
    switch ($lastChar) {
        case '1' : return ($number == '11') ? 'th' : 'st';
        case '2' : return ($number == '12') ? 'th' : 'nd';
        case '3' : return ($number == '13') ? 'th' : 'rd'; 
    }
    return 'th';  
}

$stdin = fopen('php://stdin', 'r');


print_r("================INPUT================="."\n");

print_r("Enter the numbers of chocolates :  ");
fscanf($stdin, "%d\n", $n);

print_r("You have entered ". $n . " number(chocolates):\n Please enter the sweetness of chocolate (A[".$n."], Ex: 11 9 3 2 4)\n");

$a = fscanf($stdin, str_repeat("%d ", $n). "\n");

if(count($a) != $n){
    exit("Make sure Number of chocolates and sweetness of chocolate should be equal");
}

print_r("Please enter the lifetime of chocolate (B[".$n."], Ex: 16 11 10 20 18)\n");
$b = fscanf($stdin, str_repeat("%d ", $n). "\n");

if(count($b) != $n){
    exit("Make sure Number of chocolates and lifetime of chocolate should be equal");
}

print_r("Enter the number of queries :  ");
fscanf($stdin, "%d\n", $q);

print_r("You have entered ". $q . " number(queries):\n ");

for($i=1;$i<=$q;$i++){
    print_r("Enter the ".$i." query (x and y value - Ex: 4 5) :  ");
    $value = fscanf($stdin, str_repeat("%d ", 2). "\n");
        
    $output = []; $formattedOutput = [];
    for($j=0; $j<$n;$j++){
        if($a[$j] > $value[0] && $b[$j] > $value[1]){            
            $output[] = $j;
            $formattedOutput[] = ['sweetness' => $a[$j], 'lifetime' => $b[$j], 'index' => $j];
            //['sweetness' => $a[$j], 'lifetime' => $b[$j], 'index' => $j];
        }
    }
    $formattedOutputFinal[] = $formattedOutput;
    $outputFinal[] = $output;
    // if(count($output) > 0){                
    //     echo implode(",", $output);
    // } else {
    //     echo '0';
    // }
}

print_r("\n\n\n"."================OUTPUT================="."\n");

// print_r("Parsed data with details \n");
$finalOutputStr='';
foreach($outputFinal as $key => $data){
    $key=$key+1;
    print_r($key.getOrdinalSuffix($key)." query result: ".implode(" ", count($data)? $data:array(0))."\n");
    $finalOutputStr=$finalOutputStr." ".count($data);
}
print_r("\n\n"."Parsed data -".$finalOutputStr."\n");

