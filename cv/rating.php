<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
  <title>RATING </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="home.jpg" class="rounded">
</head>
<body>
<style>      

.img{
margin: 7px;
width:550px;
height:650px;
}
 
body{ 
background-color: lightyellow;
background-image: "123.jpg";
    
}
.centre {
  text-align: center;
}
  </style>
    <h1 class="centre container text-centre  ">ALI JEWELRY BOXES</h1>
</br>

    <div class="form-group">
  <label for="comment"><h3>Please give us your Comment on the website :</h3></label>
  <form method="POST">

  <textarea class="form-control" rows="5" name="tize"  ></textarea>
</div>

<button type="submit" name="oke" class="btn btn-success m-3 p-3"  >SUBMIT</button>
<a href="inside.php" class="btn btn-danger m-3 p-3" >BACK </a>
</form>

</body>
</html>
<?php
if(isset($_POST['oke'])){
  $username = "root";
  $password = "";
  $database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);
  
  $login = $database->prepare("INSERT INTO rating(rating) VALUES(:ratinge)");
  $login->bindParam("ratinge",$_POST['tize']);
  if($login->execute()){
    echo '<div class="alert alert-dark  p-3 " > <h4>Thanks!</h4> </div>';
   header("refresh:2;");
}else{
  echo"all right";
  header("refresh:2;");

}   
}

?>