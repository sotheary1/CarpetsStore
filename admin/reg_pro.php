<?php include "../autoloader.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
  </head>
  <body>
    <?php
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $id = $_POST['uname'];
      $email = $_POST['email'];
      $pass = $_POST['psw'];

      if($fname!=='' && $lname!=='' && $id!==''){
        $result = 0;
        returnTo_reg($id);
        $str = ";";

          if($result === 1){
            echo '<span class="menuhead">There is such user name </span><br>';
            $link="../template/register.php?in=register";
             echo "<a href=$link>Try other user name , It's already used</a>";
          }else {
            // save to xml file
            // $users for maintag in xml
            $users = simplexml_load_file("../data-xml/users.xml");
            $newUser = $users ->addChild("user");
            $newUser ->addChild("fname", $fname);
            $newUser ->addChild("lname", $lname);
            $newUser ->addChild("uname", $id);
            $newUser ->addChild("email", $email);
            $newUser ->addChild("psw", $pass);
            $users ->asXML("../data-xml/users.xml");
            // connect to loing xml
            $logins =simplexml_load_file("../data-xml/logins.xml");
          //  $logins as maintag von xml
            $newlogin= $logins ->addChild("login");
            $newlogin ->addChild("uname",$id);
            $newlogin ->addChild("psw",$pass);
            $logins ->asXML("../data-xml/logins.xml");

              //include('../databank/dbconnection.php');
              //$dbconnect->query("INSERT INTO `customers` (first_name,last_name,user_id,email) VALUES ('$fname', '$lname', '$id', '$email');");
              //$dbconnect->close();
              DB::doQuery("INSERT INTO `customers` (first_name,last_name,user_id,email) VALUES ('$fname', '$lname', '$id', '$email');");
              echo '<span class="menuhead">Registration form submitet </span><br>';
              echo "Hello $fname $lname";
              echo  "<a href=\"../template/login.php?=login\">To logIn </a>";

          }
      }else {
        echo "Form is not valid";
      }

      function returnTo_reg($uname){
        $logins = simplexml_load_file("../data-xml/logins.xml");
          global $result;

          foreach ($logins->login as $login) {
            if($login ->uname == $uname){
              $result = 1;
            }
          }
          return $result;
      }

     ?>

  </body>
</html>
