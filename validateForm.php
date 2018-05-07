<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>result</title>
  </head>
  <body>

    <ul>
      <li>
        name: <?php echo $_REQUEST["username"]; ?>
      </li>
      <li>
        email: <?php echo $_REQUEST["useremail"]; ?>
      </li>
      <li>
        password: <?php echo $_REQUEST["userpass"]; ?>
      </li>
      <li>
        gender: <?php echo $_REQUEST["gender"]; ?>
      </li>

      <?php

      if(isset($_POST["submit"])) {
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filelocation = $_FILES['image']['tmp_name'];
        $filetype = $_FILES['image']['type'];
        $filestore = "upload/".$filename;

        move_uploaded_file($filelocation, $filestore);

      }
            ?>


    </ul>


    <?php echo $_FILES['image']['name']; ?><br>
    <?php echo $_FILES['image']['size']; ?><br>
    <?php echo $_FILES['image']['tmp_name']; ?><br>
    <?php echo $_FILES['image']['type']; ?><br>







  </body>
</html>
