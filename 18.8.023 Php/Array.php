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