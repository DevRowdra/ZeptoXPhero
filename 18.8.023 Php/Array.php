<?php
$students=array(
    'parthive',
    'rowdra',
    'dhruba'
);
echo $students[2];

echo "\n".count($students); //count how many students array is in this 
//loop in the every element of the array;

$n=count($students);
for ($i=0; $i < $n; $i++) { 
    
    echo $students[$i]."\n";
}
// we can also write array like this in php
$role=[
    32,4353,53,2356,34,3,2,1,
];
echo $role[2]."\n";
// some array methods
// array_shift();
// array_push();
// array_pop();
// array_unshift();
$studentss=array(
    'parthive',
    'rowdra',
    'dhruba'
);
$arrshift=array_shift($students);
$arrPop=array_pop($students);
// echo $arrPop;
// echo $arrshift;
// we can add new data in a array in two way ;
array_push($students,'dip');
array_unshift($students,'raju');
$students[]='rohan'; //ushing this way we can add new data in an array;
// echo $students;
var_dump($students);


// asociative array

$boy=[
    '12'=>'rowdra',
    '13'=>'dhruba',
    '14'=>'arko',
    '15'=>'shuvo',
];
// echo $boy['14'];

$foods=[
    'vage'=>'potato,carrot',
    'fro'=>'mango,banana',
];
echo $foods['vage'];    

// string to array
$vegetables=explode(', ','potato, carrot'); // explode use to make a string into an array; 
echo $vegetables[0];
var_dump($vegetables);
//using join method we make a array into string

$vegetablesToString=join(", ", $vegetables);
// echo $vegetablesToString[0];
 var_dump($vegetablesToString);