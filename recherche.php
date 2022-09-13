<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<?php
$_username = "root";
$_password = "";
$_database = new PDO("mysql:host=localhost; dbname=gbo;",$_username,$_password);

if(isset($_GET['btn-search'])){
$_SEARCH = $_database->prepare("SELECT * FROM courrier_depart AND courrier_arrivee WHERE CODE_EXP LIKE :value 
OR NUM_EXP_CR LIKE :value ");
$_SEARCH_VALUE = "%".$_GET['rechercher']."%";

$_SEARCH->bindParam("value",$_SEARCH_VALUE);
$_SEARCH->execute();

foreach($_SEARCH AS $_data){

  echo '<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">' .$_data['CODE_EXP'] .'</div>
  <div class="card-body">
    <h5 class="card-title">' .$_data['OBJET_CR'] .'</h5>
    <p class="card-text">' .$_data['DELAIS_DE_REALISATION_EXPEDITEUR'] .'</p>
  </div>
</div>
';

}
}
?>

<form method="GET" >
<input class="form-control " style="display:inline-block; width:300px; " type="text" name="rechercher" placeholder="rechercher ...." />
<button class="btn btn-dark" type="submit" name="btn-search">rechercher</button>
</form>