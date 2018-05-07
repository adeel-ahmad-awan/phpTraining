<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form validation</title>
    <?php     ini_set('file_uploads', 'on');  ?>

  </head>
  <body>

    <form class="" action="validateForm.php" method="post" enctype="multipart/form-data">


      name: <input type="text" name="username" placeholder="name" value=""><br>
      email: <input type="email" name="useremail" placeholder="email" value=""><br>
      password: <input type="password" name="userpass" placeholder="password" value=""><br>
      gender:
      <select name="gender">
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
      <br>
      picture: <input type="file" name="image" />
      <br>
      <br>
      <input type = "submit" name="submit" />

    </form>

  </body>
</html>
