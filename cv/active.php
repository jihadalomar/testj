<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<?php

if(isset($_GET['code'])){

$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);

$checkCode = $database->prepare("SELECT SECURITY_CODE FROM new WHERE SECURITY_CODE = :SECURITY_CODE");
$checkCode->bindParam("SECURITY_CODE",$_GET['code']);
$checkCode->execute();
if($checkCode->rowCount()>0){
   
$update = $database->prepare("UPDATE new SET SECURITY_CODE = :NEWSECURITY_CODE ,
 ACTIVATED=true WHERE SECURITY_CODE = :SECURITY_CODE");
  $securityCode = md5(date("h:i:s"));
$update->bindParam("NEWSECURITY_CODE",$securityCode);
$update->bindParam("SECURITY_CODE",$_GET['code']);


if($update->execute()){
    echo '<div class="alert alert-success" role="alert">
  Your account work !
  </div>';
  echo '<a class="btn btn-warning" href="login.php">Login</a>
<a class="btn btn-warning" href="inside.php">go to our page</a>
';
}
}else{
    echo "code dosen't able
<a href='miniuser.php'> go to  greate a new account</a>";
}

}
?>