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
echo $students;
var_dump($students);