<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container" dir="rtl" style="text-align: left !important;">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    body{ 
background-color: lightyellow;
background-image: "123.jpg";
    
}
.centre {
  text-align: center;
}
.o{
  width:15%;
}
    </style>


</body>
</html>
<h1 class="centre container text-centre  ">ALI JEWELRY BOXES</h1>
<h2 class="centre container text-centre  ">Registre Anccount</h2>

</br>
</br>
</br>

    <form method="POST">

    <label class="alert alert-secondary o" >NAME</label>  
           <input class="form-control" type="text" name="name" required/>
        <br>
        <label class="alert alert-secondary bg-tan o" > LAST NAME</label>  
         <input class="form-control" type="text" name="lastname" required/>
        <br>
        <label class="alert alert-secondary o" >EMAIL</label>  
         <input class="form-control" type="email" name="email" required/>
        <br>
        <label class="alert alert-secondary o" >PASSWORD</label>  
         <input class="form-control" type="text" name="password" required/>
        <br>
        <button class="btn  btn-outline-dark btn-light" type="submit" name="register"> Register</button>
        <a href="login.php" class="btn  btn-outline-white btn-dark" type="submit" name="back">back</a> 
    </form>

</div>


<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);


if(isset($_POST['register'])){
$checkmail=$database->prepare("SELECT * FROM new WHERE email =:EMAIL");
    $email=$_POST['email'];
$checkmail->bindParam('EMAIL',$email);
$checkmail->execute();

if($checkmail->rowCount()>0){
    echo"already exist email";
}else{
        $name =$_POST['name'] ;
        $lastname = $_POST['lastname'];
        $password =$_POST['password'] ;
        $email = $_POST['email'];
        $securityCode = md5(date("h:i:s"));

    $addUser = $database->prepare("INSERT INTO 
        new(NAME,LASTNAME,PASSWORD,EMAIL,SECURITY_CODE)
         VALUES(:NAME,:LASTNAME,:PASSWORD,:EMAIL,:SECURITY_CODE)");


        $addUser->bindParam("NAME",$name);
        $addUser->bindParam("LASTNAME",$lastname);
        $addUser->bindParam("PASSWORD",$password);
        $addUser->bindParam("EMAIL",$email);
        $addUser->bindParam("SECURITY_CODE",$securityCode);
if($addUser->execute()) {

    require_once "mailerr.php";
    $mail->setFrom('jihad98omar@gmail.com', "Hello dear ");
    $mail->addAddress($email);     //Add a recipient
    $mail->addReplyTo('jihad98omar@gmail.com', 'Information');

//Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'WELCOME  !';
    $mail->Body = '<h1>  Thanks for registring</h1>'
          . "<div> click on the link to recive the code !" . "<div>" .
          "<a href='http://localhost/new.php/phpmailer%20files/active.php?code=".$securityCode  . "'>
           " . "http://localhost/new.php/phpmailer%20files/active.php?code=" .$securityCode . "</a>";
}else{echo"sorry something wrong try again!";}
    

    if ($mail->send()) {
        echo "It's work!</br> .";
        echo "this account is just for the CV <br> so click on the button to move to the website!";
        echo"<form><a href='inside.php' class='btn btn-danger'>click here</a></form>";
// header("Location:inside.php");
    } else {
        echo "Sorry something wrong!
        check out your connection  and try again!";
    }

}}
    ?>