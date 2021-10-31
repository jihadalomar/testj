<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<form>
<script type="text/javascript" src="file:///C:/Users/10RS5/Desktop/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
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
    .edit{
background:white;
color:white;
position:centre;
width: 10%;
height: 40px;
        margin:3px;}
</style>
    
</body>
</html>


<?php
require_once("database.php");
// $username = "root";
// $password = "";
// $database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);
    $select=$database->prepare("SELECT * FROM tize");
    $select->execute();
     

    

foreach ($select AS $data){
  echo'  

  <table class="table table-dark table-striped table table-bordered mt-1 ">  
     <thead class="thead-blue   ">  
  
   <tr class="table-success text-uppercase">

   <th>name</th>
   <th>last name</th>
   <th>age</th>
   <th>city</th>
   <th>phone number</th>
  
   </tr>
   <tr class="table-danger">

   <th> '.$data['name'].'</th>
   <th>'.$data['lastname'].'</th>
   <th>'.$data['age'].'</th>
   <th>'.$data['city'].'</th>
   <th>'.$data['nb'].'</th>
   
  
   </tr>
   </thead>
   </table>

   <form method="POST"> 
   <button class="btn group-btn btn-danger btn-block edit " type="submit" name="delet" value= "'.$data['id'].'">delete</button> 
      <a href="edit.php?edit='. $data['id'].'"  class="btn group-btn btn-secondary btn-block edit" type="submit">EDIT</a> 

   
   </form> 
  
';


    
if(isset($_POST['delet'])) {
    $delet = $database->prepare("DELETE FROM tize WHERE id= :NAME");
    $delet->bindParam("NAME",$_POST['delet']);
 $delet->execute();
 header("Location:data.php");

    //  if ($delet->execute()) {
    //      echo 'done';
    // //header("refresh:0;");
    // //header("Location:data.php");
    //  } else {
    //  echo"asas";
    // }
    //1
    //<button class="btn btn-danger btn-block edit " type="submit" name="delet" value= "'.$data['name'].'">delete</button> 

    //2
    //   <button type="submit"> <a href="edit.php?edit='. $data['id'].'"  class="btn btn-secondary btn-block edit">EDIT</a> </button>

}}
?>

    