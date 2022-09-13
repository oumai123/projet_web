<?php

use LDAP\Result;
error_reporting(0);
session_start();

include'configur.php';
if(isset($_POST['submit'])){
  $_username= $_POST['username'];
  $_email= $_POST['email'];
  $_password= md5($_POST['password']);
  $_confirmation= md5($_POST['confirmation']);
  if($_password==$_confirmation){
    
    $sql="SELECT * FROM users WHERE email='$_email'";
    $result = mysqli_query($conn,$sql);
    if(!$result ->num_rows >0){

      $sql="INSERT INTO users(username,email,password)
      VALUES('$_username','$_email','$_password')";
     $result =mysqli_query($conn,$sql);

     if($result){

      echo"<script>alert('Bravo!Enregistrement d’utilisateur complet.')</script>";
      $_username= "";
      $_email="";
      $_POST['password']="";
      $_POST['confirmation']="";

   }else{

    echo"<script>alert('Oups!quelque chose n'est pas correcte.')</script>";
   }
  }else{
    echo"<script>alert('Oups!Email existe déjà.')</script>";

  }
  }else{
    echo"<script>alert('Le mot de passe ne correspondant pas.')</script>";
  }

}

?>


<!DOCTYPE html>
<html lang="fr">

    <head>
  <meta charset="utf-8">
 <title>Register</title>
 <link href="css/style1.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet"   href="reg.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 

</head>
<body>
<h1>GOBOS</h1>  
<h2>Gestion de bureau d'ordre</h2>
<h3>Province de Safi</h3>  
<div class="logo">
<img src="imageedit_1_4807096229.png">   
</div>
<div class="links">
<ul>
<li><a href="http://localhost/GOBOS/reg.php">Acceuil</a></li>    
</div>
</ul>
 </div>
<div class="login">
  <div class="header">
    <h1>Inscription</h1>
  </div>
  <div class="main">
    <form action="" method="POST">
      <span>   
  <input type="text" placeholder="Nom d'utilisateur" name=" username"  value="<?php echo $username;?>"required>
 </span><br>
      <span>
<input type="email" placeholder="Email" name="email" value="<?php echo $email;?>"required>>
      </span><br>
      <span>
        <input type="password" placeholder="Mot de passe" name="password" value="<?php echo $password;?>"required>
      </span><br>
      <span>
        <input type="password" placeholder="Confirmer votre mot de passe" name="confirmation" value="<?php echo $_POST['confirmation'];?>"required>
      </span><br>

             <div class="bu">
              <input name="submit" type="submit" value="Enregistrer">
             </div> 
</div>
         <div class="font">
<p>Vous avez déjà un compte?<a href="log.php">Connectez-vous?</a></p>   
</div>

    </form>
  </div>
</div>                           
</body>


 </html>





 