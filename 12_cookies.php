<?php

setcookie('name', 'Tom', time() + 86400);

if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}
?>