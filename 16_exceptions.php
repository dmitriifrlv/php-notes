<?php 
  function inverse($x) {
    if(!$x) {
      throw new Exception('Division by zero');
    }
    return 1/$x;
  }

  try {
    echo inverse(0);
    echo inverse(5);
  } catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
  } finally {
    echo 'done';
  }

  echo 'Hello World'
?>