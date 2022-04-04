<?php
  require_once('../autoloader.php');
  include("../template/functions.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login to my Account</title>
  </head>
  <body>
    <?php
      session_start();
      $newuser = 1; // for new Customers
      $user = $_POST['uname'];
      $pass = $_POST['psw'];

      $logins = simplexml_load_file("../data-xml/logins.xml");
      foreach ($logins ->login as $login){
        // compare the login user and and to file xml
              if($login ->uname == $user){
                $password = $login->psw;
                    if($password == $pass){
                      echo "You are loged in as ".$user;

                          //echo"<a href='../template/hand.php?in=hand'>Continue</a> ";
                          // $link="../template/hand.php?in=hand";
                          // echo"<a herf=$link>Continue</a>";
                          //$newuser=0;
                          $_SESSION["user"] = $user;
                          if($_SESSION["user"]=="admin"){
                            $_SESSION["admin"]= $user;
                            $link="admin.php";

                            $newuser=0;
                    
                        }else{
                          $link="../template/hand.php?in=hand";
                        }
                        echo "<a href=$link>  Continue</a>";
                $newuser=0;
               } else {
                 echo "Password is wrong,try again";
               $link="../index.php?in=login";

               echo "<a href=$link>To login</a>";
               $newuser=0;


               }
           }
       }

      //  for the customers , who are not yet registrated
      if($newuser == 1){
        echo "You are not registrated ! Pls let's registeration first!";
        $link="../template/register.php?in=register";
        echo "<a href=$link>To register</a>";
      }

    ?>


  </body>
</html>
