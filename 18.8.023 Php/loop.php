<?php
// for loop in php 
for ($i=0; $i <40; $i+=2) { 
    // echo $i;
    // echo PHP_EOL;
    for ($j=0; $j <$i; $j++) { 
        // echo '#';
    }
}
//!  while loop
$i=0; 
while($i<40){
    $i++;
    // echo $i . PHP_EOL;
}
// do while loop 
$s=0;
do{
    $s++;
    echo $s." While loop ";
echo   PHP_EOL;

}while($s<30);


// goto loop in php 

$i=0;
a: $i++;
echo $i . PHP_EOL;
if($i<5) goto a;


// straping in for loop  
echo 'no ';
for ($i=0, $s=10; $i >10, $s>0; $i++ , $s--) { 
    echo "looping \n";
    echo $i."-";
    echo $s ;

}

echo PHP_EOL;
// factorial using for loop 
$n=5;
for($i=$n,$factorial=1; $i >1; $i--) {
    echo PHP_EOL;
$factorial=$factorial *$i;
}
printf('Factorial ot %d is %d',$n,$factorial);

$m=6;
for($i=$m,$factorial=1;$i>1;$i--) {
$factorial=$factorial*$i;

}
// echo PHP_EOL;
// printf($factorial);

$de=123.456;
$user;
$lat=$user ?? $de;
echo "\n".$lat;