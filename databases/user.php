 <!-- <script type="text/javascript" src="file:///C:/Users/10RS5/Desktop/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<style>
  
    .article_variable{
      background:blue;
color:white;
width:50%;
height:30px; 
margin:5px;
    }
    .input{
width: 20%;

    }
</style> 

</head>
<body>
 <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  -->
 <!-- <h1  class="text-white p-3 mb-2 bg-dark">Jihad AlOmar</h1> -->

</div>
</body>
</html>

<?php
require_once("database.php");

// $username = "root";
// $password = "";
// $database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);

 if(isset($_POST['send'])){
     $name=$_POST['name'];
     $lastname=$_POST['lastname'];
     $age=$_POST['age'];
     
     $city=$_POST['city'];
     $nb=$_POST['nb'];

     $ok=$database->prepare("INSERT INTO tize(name,lastname,age,city,nb) VALUES(:NAME , :LN, :AGE ,:CITY , :NB) ");
     $ok->bindParam('NAME',$name);
     $ok->bindParam('AGE',$age);
     $ok->bindParam('CITY',$city);
     $ok->bindParam('LN',$lastname);
     $ok->bindParam('NB',$nb);
// $ok->execute();
     if($ok->execute()){
      echo '<div class="alert alert-primary mt-3 "> done </div>';
     header("refresh:2;");
}else{
    echo"undone";
    //header("refresh:2;");

}   
 }
?>

   <form method="POST">

<div class="alert alert-secondary mt-1 input" >name</div> <input class="form-control  " type="text" name="name"  required/>
</br>
<div class="alert alert-secondary input" >last name</div><input class="form-control" type="text" name="lastname"  required/>
</br>

<div class="alert alert-secondary input" >age</div><input class="form-control " type="text" name="age" required/>
</br>


<div class="alert alert-secondary input" >city</div><input class="form-control" type="text" name="city" required/>
</br>

<div class="alert alert-secondary input" >phone number</div><input class="form-control" type="text" name="nb" required/>
</br>

<button   class="btn btn-danger mt-3 btn-block"   name="send" type="submit"  >SEND</button>
<!-- <a href="data.php" class="btn btn-danger mt-3" type="submit" value="$_POST['id']" >show my data</a>  -->


</form>

<!-- <section class="alert alert-danger">
test

</section> -->