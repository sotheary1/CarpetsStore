<?php
    include ("functions.php");
    session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/admin.css" type="text/css">
      <!-- validateForm -->
</head>
<body>

    <script type="text/javascript">

      function validateForm(){
        var form = document.forms["flog"];
        var uname = form["uname"].value;
          if(!uname){
            alert("Please enter your Username !");
            return false;
          }
        var pass = form["psw"].value;
          if(!pass){
            alert(" Your Password are not correct !");
            return false;
          }
        return true;
      }

    </script>
    <form action="../admin/login-pro.php" method="POST" name="flog" onsubmit="return validateForm();">
      <div class="container">
         <label for="uname"><b>Username</b></label>
         <input type="text" placeholder="Enter Username" name="uname" pattern="[a-z0-9_]+" required>

         <label for="psw"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="psw" required>

         <div class="btn">
           <button type="submit" name="submit" class="button">Login</button>
           <a href="register.php" class="button">Register</a>
         </div>
       </div>
    </form>

</body>
</html>
