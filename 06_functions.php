<?php
function registerUser($email = 'test') {
  return '{$email} - User registered';
}

registerUser('gmail.com');

$multiply = fn($n1, $n2) => $n1 * $n2;
?>