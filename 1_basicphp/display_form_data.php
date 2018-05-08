<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>result</title>
  </head>
  <body>
    <ul>
      <li>
        name: <?php echo $_POST['name']; ?>
      </li>
      <li>
        email: <?php echo $_POST['email']; ?>
      </li>
      <li>
        password: <?php echo $_POST['password']; ?>
      </li>
      <li>
        gender: <?php echo $_POST['gender']; ?>
      </li>
      <?php
        if(isset($_POST['submit'])) {
          $file_name = $_FILES['image']['name'];
          $file = $_FILES['image']['tmp_name'];
          $path_upload = 'upload/'.$file_name;
          if (move_uploaded_file($file, $path_upload)) {
            echo '<li> <img src=' .$path_upload. ' alt="" width="500px" > </li>';
          }
          else {
            echo '<li>error</li>';
          }
        }
      ?>
    </ul>
  </body>
</html>
