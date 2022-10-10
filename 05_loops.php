<?php

// for ($x = 0; $x<=10; $x++) {
//   echo $x;
// }

$posts = ['first', 'second', 'third'];

// for ($x = 0;$x<count($posts);$x++) {
//   echo 'hi';
//  }

// foreach($posts as $post) {
//   echo $post.'<br>';
// }
// foreach($posts as $index => $post) {
//   echo $index.' - '.$post.'<br>';
// }

$person = [
  'first_name' => 'Tom',
  'last_name' => 'Ford'
];

foreach($person as $key => $value) {
  echo "$key - $value";
}
?>