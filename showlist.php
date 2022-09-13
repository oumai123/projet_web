<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="show.css">
    <title>show</title>
    
</head>
<?php require_once 'config.php';?>
  <?php  
  
  $_mysqli= new mysqli('localhost','root','','gbo');
  $_result = $_mysqli->query("select * from courrier_depart") or die($_mysqli->error);
  ?>
  
<body>


    <div class="container my-5">
        <h2>Liste des courriers</h2>
        <a class="btn btn-primary my-5" href="/GOBOS/choices-list.php" role="button">Nouveau courrier</a>
        <table class="table">
            <thead>
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NUM_ORDRE_BO</th>
      <th scope="col">CODE_EXP</th>
      <th scope="col">NUM_EXP_CR</th>
      <th scope="col">DATE_EXP</th>
      <th scope="col">HEURE_EXP_CR</th>
      <th scope="col">OBJET_CR</th>
      <th scope="col">DELAIS_DE_REALISATION_EXPEDITEUR</th>
      <th scope="col">NBR_PC_JOINTES</th>
      <th scope="col">OBSERV_EXP</th>
      <th scope="col">OBSERV_BO</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  function pre_r($_array){
    echo'<pre>';
    print_r($_array);
    echo'</pre>';
  }?>
    
<?php
while($_row =$_result->fetch_assoc()){
     echo"
    <tr>
         <th>$_row[NUM_ORDRE_BO]</th>
         <td>$_row[CODE_EXP]</td>
         <td>$_row[NUM_EXP_CR]</td>
         <td>$_row[DATE_EXP]</td>
         <td>$_row[HEURE_EXP_CR]</td>
         <td>$_row[OBJET_CR]</td>
         <td>$_row[DELAIS_DE_REALISATION_EXPEDITEUR]</td>
         <td>$_row[NBR_PC_JOINTES]</td>
         <td>$_row[OBSERV_EXP]</td>
         <td>$_row[OBSERV_BO]</td>       
        <td>
        <a href="edit.php?$_row['NUM_ORDRE_BO']" class='btn btn-info">Modifier</a>;
        
       </tr>";
}
?>






</tbody>
        
   </div>
   
</body>
</html>