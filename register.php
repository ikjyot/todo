<?php ?>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <h1>This is a register page</h1>
  <form method="post" action="index.php">
    <strong>First Name: </strong> <input type="text" name="reg_first_name" value="" /> <br> <br>
    <strong>Last Name: </strong> <input type="text" name="reg_last_name" value="" /> <br> <br>
    <strong>Phone: </strong> <input type="text" name="reg_phone" value="" /> <br> <br>
    <strong>Birthday: </strong> <input type="text" name="reg_birthday" placeholder="yyyy-mm-dd" value="" /> <br> <br>
    <strong>Gender: </strong> Male: <input type="radio" name="reg_gender" value="M" /> Female <input type="radio" name="reg_gender" value="F" /> <br> <br>
    <strong>Email: </strong> <input type="text" name="reg_email" value="" /> <br> <br>
    <strong>Password: </strong> <input type="password" name="reg_password" value="" /> <br> <br>
    <input type="hidden" name="action" value="registrar" /> <br> <br>
    <input type="submit" value="register" />
  </form>
  <form action="login.php" method="post">
    <input type="submit" value="try to login"
  </form>
</body>
</html>