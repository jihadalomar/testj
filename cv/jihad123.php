<?php
$user=$_POST['user'];
$pass=$_POST['pass'];

if (isset($_POST['sub'])){
    echo "Username :".$user;
    echo "<br>";
    echo " Password:".$password;
}