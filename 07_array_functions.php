<?php
$fruits = ['apple', 'orange', 'pear'];

//Get length
echo count($fruits);

//Search
var_dump(in_array('apple', $fruits));

//Add to array(to the end)
$fruits[] = 'grape';
array_push($fruits, 'blueberry');

//add to the begining
array_unshift($fruits, 'mango');


//Remove from the end
array_pop($fruits);

//Remove from the begining
array_shift($fruits);

//Remove specific element
unset($fruits[2]);

//Split into 2 chunks
// $chunked_array = array_chunk($fruits, 0);

// print_r($chunked_array);

print_r($fruits);

//Merging 2 arrays:
$arr1 = [1,2,3];
$arr2 = [4,5,6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
print_r($arr4);

//Combine
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

//1st param will be the key, the second - the value
$c = array_combine($a, $b);

print_r($c);

//Get array of keys
$keys = array_keys($c);
print_r($keys);

$values = array_values($c);
print_r($values);

//Change key <==> values
$flipped = array_flip($c);
print_r($flipped);

$numbers = range(1,20);

print_r($numbers);

//Map
$newNumbers = array_map(function($number){
  return "Number ${number}";
}, $numbers);

print_r($newNumbers);

//Filter
$lessThan10 = array_filter($numbers, fn($number)=>$number<=10);
print_r($lessThan10);

//Reduce
$sum = array_reduce($numbers, fn($carry, $number)=>$carry + $number);

var_dump($sum);
?>