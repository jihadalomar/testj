<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
.input{
margin: 0px !important;

    }
</style>
</head>
<body>
    
</body>
</html>
<?php
require_once("database.php");
// $username = "root";
// $password = "";
// $database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);

if(isset($_GET['edit'])) {
    $select = $database->prepare("SELECT * FROM tize WHERE id = :IDEA");
    $select->bindParam("IDEA", $_GET['edit']);
    $select->execute();


    foreach ($select AS $data) {
        echo '    <form method="POST">

   
        <div class="row  alert input alert-dark ">name  :<input class="form-control" type="text" name="name" value="'.$data['name'].'"/>
 </div>
      <div class="row  alert input alert-dark ">lastname  :<input class="form-control" type="text" name="lastname" value="'.$data['lastname'].'"/>
      </div>
    
    <div class="row  alert input alert-dark ">age  :<input class="form-control" type="text" name="age" value="'.$data['age'].'"/>
 </div>

  <div class="row  alert input alert-dark ">city  :<input class="form-control" type="text" name="city" value="'.$data['city'].'"/>
 </div>

 <div class="row  alert input alert-dark ">phne number  :<input class="form-control" type="text" name="nb" value="'.$data['nb'].'"/>
 </div>


<button type="submit"  class="btn btn-success mt-3 btn-block" name="ok"  value="'.$data['id'].'" > confirm</button>

<a href="data.php" type="submit" class="btn btn-dark mt-3 btn-block" name="back" >back</a>
</form>

    
    ';

    }
    if(isset($_POST['ok'])){
        $up=$database->prepare("UPDATE  tize SET name =:N , lastname =:L , age =:A  , city =:C, nb =:B  WHERE id =:I");
        $up->bindParam("N",$_POST['name']);
        $up->bindParam("L",$_POST['lastname']);
        $up->bindParam("C",$_POST['city']);
        $up->bindParam("B",$_POST['nb']);
        $up->bindParam("A",$_POST['age']);

        $up->bindParam("I",$_POST['ok']);

        //$up->bindParam("aa",$_POST['ok']);

        if($up->execute()){
            //echo '<div class="alert alert-danger mt-3 "> done </div>';
            header("Location:edit.php?edit=". $_POST['ok']);
        }else{
          echo"undone";
          var_dump($up->errorInfo());
    }
    //var_dump(error->$up);
} 

}
    ?>