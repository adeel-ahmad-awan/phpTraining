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
        if(isset($_POST[''])) {
          $file_name = $_FILES['image']['name'];
          $default_file_location = $_FILES['image']['tmp_name'];
          $file_extension = $_FILES['image']['type'];
          $new_file_location = "upload/".$file_name. "." . $file_extension;

          move_uploaded_file($default_file_location, $new_file_location);

        }
      ?>


    </ul>


    <?php echo $_FILES['image']['name']; ?><br>
    <?php echo $_FILES['image']['size']; ?><br>
    <?php echo $_FILES['image']['tmp_name']; ?><br>
    <?php echo $_FILES['image']['type']; ?><br>







  </body>
</html>
