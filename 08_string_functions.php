<?php

$string = 'Hello World';

//Get the length of a string
echo strlen($string);

//Find the position of the first occurence of a substring in a string
echo strpos($string, 'o');

//Find the position of the last occurence of a substring in a string
echo strrpos($string, 'o');

//reverse a string
echo strrev($string);

//to lowercase
echo strtolower($string);

//to uppercase
echo strtoupper($string);

//Uppercase the first character of each word
echo ucwords($string);

//replace
echo str_replace('World', 'Everyone', $string);

//return a portion of a string
echo substr($string, 0, 5);
echo substr($string, 5);

//Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

//Ends with 
if (str_ends_with($string, 'ld')) {
  echo 'yEah';
}

$string = '<script>alert(1)</script>';
echo htmlspecialchars($string);

//formatter
printf('$s likes to $s', 'Brad', 'code');
printf('1+1=%d', 1+1);

//separate string on special char
$file_ext = explode('.', $file_name);
?>