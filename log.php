<?php
include'configur.php';
error_reporting(0);


session_start();
if(isset($_POST['submit'])){
  $_email=$_POST['email'];
  $_password=md5($_POST['password']);

$sql= "SELECT * FROM users WHERE email='$_email'";
$result= mysqli_query($conn,$sql);
if($result->num_rows >0){
  $row= mysqli_fetch_assoc($result);
  $_SESSION['username'] = $row['username'];
  header("Location: welcome.php");
}else{
  echo"<script>alert('Oups!Email ou Mot de passe est incorrecte..')</script>";

}
}

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
  <meta charset="utf-8">
 <title>Gestion Bureau d'Ordre</title>
 <link href="css/style1.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet"   href="log.css">
 <!--POLICE-->
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> </head>
<body>
  
<h1>GOBOS</h1>  
<h2>Gestion de bureau d'ordre</h2>
<h3>Province de Safi</h3>  
<div class="logo">
<img src="imageedit_1_4807096229.png" alt="logo">   
</div>
<div class="links">
<ul>
<li><a href="http://localhost/GOBOS/log.php">Acceuil</a></li>    
</div>
</ul>
 </div>
<div class="login">
  <div class="header">
    <h1>Login</h1>
  </div>
  <div class="main">
    <form action="" method="POST">
      <span>      
        <input type="text" placeholder="Email" name="email" value="<?php echo $_email;?>" required>
      </span><br>
      <span>
        <input type="mot de passe" placeholder="mot de passe" name="password" value="<?php echo $_POST['password'];?>" required>
      </span><br>
             <div class="bu">
              <input type="submit"  name="submit" value="Connexion">
            <input type="reset" value="Rénitialiser">
             </div>       
             <p>Vous n'avez pas un compte<a href="reg.php">Inscrivez-vous?</a></p>
    </form>
  </div>
</div>                           
</body>
 </html>