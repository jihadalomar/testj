
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST['login'])){
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);

$login = $database->prepare("SELECT * FROM new WHERE EMAIL = :email AND PASSWORD = :password");
$login->bindParam("email",$_POST['email']);
$login->bindParam("password",$_POST['password']);
$login->execute();
if($login->rowCount()===1){
$user = $login->fetchObject();
if($user->ACTIVATED === "1"){
  echo 'Welcome ' .$user->NAME.'!';
  echo'</br>';



$_SESSION['email'] = $user->EMAIL;
$_SESSION['password'] = $user->PASSWORD;
$_SESSION['name'] = $user->NAME;


// error_reporting(E_ALL);
// ini_set("display_errors",1);

// set_error_handler("var_dump");

header("Location:inside.php");

}else{
    echo '
    <div class="alert alert-warning"> 
    Please we need to active your account ,click on the link that we sent it on your email address.   </div>
    ';
    header("refresh:2;");
}
}else{
 echo '
 <div class="alert alert-danger">
 email or password wrong 
 </br>
 <h3>try again</h3>
 
 </div>
 ';   
header("refresh:2;");}
}



?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
body{ 
background-color: lightyellow;
background-image: "123.jpg";
    
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
.centre {
  text-align: center;
}
.bc{
  margin: 0;
  position: absolute;
  top: 40%;
  left: 45%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-0%, -50%);

}
.bc_registre{
  position:absolute ;
  top: 50%;
  left: 46%;
  right:55%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-100%, -50%);
}

</style>
<h1 class=" centre container  text-centre">ALI JEWELRY BOXES</h1>

<h2 class=" centre container text-centre">You need to login first! </h2>


<button class=" bc "  onclick="document.getElementById('id01').style.display='block'" name="loginn" style="width:auto;">Login
</button>

<a href="miniuser.php"   class="bc_registre  "   style="width:auto;">
registre</a>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="123.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label  for="uname"><h2>email</h2></label>
      
      <input type="text" placeholder="Enter Username" name="email" required>

      <label for="psw"><h2>Password</h2></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="reset.php">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script><?php echo ("location.href") ?></script>

</body>

</html>
