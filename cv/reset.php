<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);
$reset=$database->prepare("SELECT * FROM new WHERE email =:EMAIL");
$reset=$_POST['email'];
$reset->bindParam('EMAIL',$reset);
$reset->execute();

if($reset->rowcount()>0===""){

}