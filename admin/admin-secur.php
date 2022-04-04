<?php
session_start();

$admin = "admin";
$psw = "carpet12345";

if(isset($_POST["uname"])) {
    $login = $_POST["uname"];
        if ($login == $admin && $_POST["psw"] == $psw) {
        $_SESSION["admin"] = $login;
    }
}
if (!isset($_SESSION["admin"])) {
    echo "<!DOCTYPE html>\n";
    echo "<html><head><meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            </head><body>";
    echo "<h3>Access Denied!</h3><p>Please login first.</p>";
    echo "<p>&raquo; <a href=\"../template/login.php\">Login</a></p>";
    echo "</body></html>";
    exit;
}
