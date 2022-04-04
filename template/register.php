<?php
  include ('functions.php');
  if(isset($_SESSION["user"]))
  {
    // create one new small window
    echo "<!DOCTYPE html>\n";
    echo "<html><head>/*...*/</head><body>";
    echo "<h3>You did not finish a session</h3>
          <p>You should log out for new registration or continue </p>";
    echo "<p>&raquo; <a href=\"index.php?in=index\">Continue with current login</a></p>";
    echo "</body></html>";
    exit;
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/admin.css" type="text/css">
      <!-- validateForm -->
      <script type="text/javascript">
          function validateForm()
          {
            var form = document.forms["freg"];
            var fname =  form["fname"].value;
            var lname = form["lname"].value;
            var email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; // XXXXXX@XXX
	           // at least one number, one lowercase and one uppercase letter
             // at least six characters that are letters, numbers or the underscore
   			    // var pass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{6,}$/;

            // for check first name and last name
            if(!fname){
                 alert("Please enter a Name!");
                   return false;
               }
            if(!lname){
                   alert("Please enter a Name!");
                     return false;
                 }
              // for checked User_id
            var uname = form["uname"].value;
            var regex = '/^[a-z0-9_]+$/';
                if (!regex.test(uname)) {
                   alert("Please enter a username!");
                   return false;
                }
           //  var user=form["userid"].value;
           //  var regexus= '/^[a-z0-9_]+$/';
           //           if(!regexus.test(user)) {
           //            alert("For username,please use, letters, number and_!");
           //            return false;
           //           }
            var psw = form["psw"].value;
                  if (!psw) {
                       alert("Please enter a password!");
                       return false;
                  }

              // checck the email if correct !!
            var email=form["email"].value;
                if(email.value.match(email))
                {
                  return true;
                } else {
                  alert("You have entered an invalid email address!");
                    email.focus();
                    return false;
                }
            return true;
          }
      </script>
  </head>
  <body onload="document.register.fname.focus();">
      <form action="../admin/reg_pro.php" name="freg" method="POST" onsubmit="return validateForm();">
       <div class="container">
         <h1>Register</h1>
         <p>Please fill in this form to create an account.</p>
         <hr>
         <label for="name"><b>First Name </b></label>
         <input id="fname" type="text" name="fname" value="" pattern="[A-Z][a-z]+" required><br>

         <label for="name"><b>Last Name</b></label>
         <input id="lname" type="text" name="lname" value="" pattern="[A-Z][a-z]+"  required><br>

         <label for="userid"><b>User ID </b></label>
         <input id="id" type="text" name="uname" value="" pattern="[a-z0-9_]+" required><br>

         <label for="email"><b>Email</b></label>
         <input type="text" placeholder="Enter Email" name="email" required>

         <label for="psw"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="psw" required>
         <hr>
         <div class="btn">
           <button type="submit" name="action" class="button">Register</button>
           <button type="reset" class="button">Clear</button>
           <a href="../index.php" class="button"><b>Home</b></a>
         </div>

       </div>
    </form>

  </body>
</html>
