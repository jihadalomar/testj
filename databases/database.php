<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<style>
  .nav{
    background:white;
color:black;
width: 100%;
height: 100px;
margin:0px !important;

    }
    .img{
      width: 144px;
    }
    
</style>

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>
 <!-- honnn l dataaaaaaaaaaaaaaa basseeeeee -->
 <?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=coderjihad;",$username,$password);
?> 

<form>
<script type="text/javascript" src="file:///C:/Users/10RS5/Desktop/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

<!-- <h1  class="text-white  p-0 mb-0 bg-dark" ><img class=" rounded-circle img-thumbnail ] mx-auto d-block  img "  src="12.jpg"/>
Jihad AlOmar</h1>
  </br> -->
 
<h1 class=" text-white  p-0 mb-0 bg-dark ">jihad alomar  <img class=" mx-auto d-block rounded-circle img-thumbnail   img "  src="123.jpg"/>
  </h1>
  

<nav class="navbar navbar-expand-lg navbar-blue bg-dark nav ">
  <div class="container-fluid">
    <a class="navbar-brand" href="user.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <b ul class="navbar-nav me-auto mb-0 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="data.php" value="$_POST['id']">SHOW THE DATA</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="index.php">QUIT</a>
        </li>
      </ul>
      <span class="navbar-text">
      </span>
    </div>
  </div>
</nav>
  </form>


