<?php

session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
  // $name = htmlspecialchars($_POST['name']);
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $password = htmlspecialchars($_POST['password']);
  echo $name.$age;

  if ($username == 'john' && $password == 'pass') {
    $_SESSION['username'] = $username;
    header('Location: /php-crash/extras/dashboard.php');
  } else {
    echo 'Incorrect Login';
  }
}

?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>?name=John&age=30 ">Click me</a>


<form 
action="<?php echo $_SERVER['PHP_SELF']; ?>"
method="POST"
>
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  <div>
    <label for="password">Password: </label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>