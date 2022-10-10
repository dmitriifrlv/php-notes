<?php
if (isset($_POST['submit'])) {
  $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
  if (!empty($_FILES['upload']['name'])) {
    // print_r($_FILES);
    $file_name = $_FILES['upload']['name'];
    $target_dir = "uploads/${file_name}";

    //get file ext
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    print_r($file_ext);

    //Validate file ext
    if (in_array($file_ext, $allowed_ext)) {
      // move_uploaded_file()
    } else {
      $message = '<p style="color:red">Invalid file type</p>'
    }
  } else {
    $message = '<p>Please choose a file</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
  method="POST"
  enctype="multipart/form-data"
  >
Select image to upload:
<input type="file" name="upload">
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>