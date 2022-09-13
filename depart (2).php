

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="dep.css">
  <title>Départ</title>
</head>
<body>
  
<h1>TRAITEMENT COURRIER DEPART</h1>
    
    <div class="main">
    <form action="config.php" method="POST"><div class="form-date">
        <label for="date_bo_cr_dep">date_bo_cr_dep:</label>
        <input class="date_bo_cr_dep" type="date" name="date_bo_cr_dep">
        <label for="heure_bo_cr_dep">heure_bo_cr_dep":</label>
        <input class="heure_bo_cr_dep" type="time">

        <br>
        <div class="form-courrier">
          <div class="name-frame">Courrier</div>
          <label for="num_order_bo">num_order_bo:</label>
          <input class="num_order_bo" type="number" name="num_order_bo">
          <label for="num_exp_cr">num_exp_cr:</label>
          <input class="num_exp_cr" type="number" name="num_exp_cr">
          <br>
          <br>
          <label for="date_exp">date_exp:</label>
          <input class="date_exp" type="date" name="date_exp">

          <label for="heure_exp_cr">heure_exp_cr:</label>
          <input class="heure_exp_cr" type="time" name="heure_exp_cr">

          <label for="objet_cr">objet_cr:</label>
          <input class="objet_cr" type="text" name="objet_cr">
          <br>
          <br>

          <label for="délais de réalisation expéditeur">délais de réalisation expéditeur:</label>
          <input class="délais de réalisation expéditeur" type="text" name="délais de réalisation expéditeur">
          <br>
          <br>
          <label for="nbr_pc_jointes">nbr_pc_jointes:</label>
          <input class="nbr_pc_jointes" type="number" name="nbr_pc_jointes">

          <label for="observ_exp">observ_exp:</label>
          <input class="observ_exp" type="text" name="observ_exp" >

          <label for="observ_bo">observ_bo:</label>
          <input class="observ_bo" type="text" name="observ_bo">
          <br><br>
        </div>

        <div class="form-destination">
          <div class="name-frame">Destination</div>

          <label for="num_reception_cr">num_reception_cr:</label>
          <input class="num_reception_cr" type="number" name="num_reception_cr">

          <label for="date_reception_cr">date_reception_cr:</label>
          <input class="date_reception_cr" type="date" name="date_reception_cr" >
          <br><br>
          <label for="heure_reception_cr">heure_reception_cr:</label>
          <input class="heure_reception_cr" type="time" name="heure_reception_cr">

          <label for="observ_reception_cr">observ_reception_cr:</label>
          <input class="observ_reception_cr" type="text" name="observ_reception_cr">
        </div>
        <!-- form-expediteur -->
        <div class="form-expediteur">
          <div class="name-frame">Expéditeur</div>
          <label for="code_exp">code_exp:</label>
          <input class="code_exp" type="number" name="code_exp" >

          <label for="type_exp">type_exp:</label>
          <input class="type_exp" type="text" name="type_exp">

          <label for="qualité_exp">qualité_exp:</label>
          <input class="qualité_exp" type="text" name="qualité_exp">
        </div>
        <!-- form-destinataire -->
        <div class="form-destinataire">
          <div class="name-frame">Destinataire</div>
          <label for="code_dest">code_dest:</label>
          <input class="code_dest" type="number" name="code_dest"  >

          <label for="type_dest">type_dest:</label>
          <input class="type_dest" type="text" name="type_dest">

          <label for="qualité_dest">qualité_dest:</label>
          <input class="qualité_dest" type="text" name="qualité_dest">
        </div>

      </form>

      <div class="menu">
      <form method="POST">
      <div class="title">
          <h2>GOBOS</h2>
          </div><br>
        <ul class="buttons">
          <li>
            <button type="submit" value="Enregistrer" name="submit" >
            Enregistrer<ion-icon name="bookmark-outline"></ion-icon>
          </li>
          <li><button type="button" value="Modifier" name="modify">
            Modifier<ion-icon name="pencil-outline"></ion-icon>
          </li>
          <li><button type="search" value="Rechercher" name="search" placeholder="Rechercher....">
            Rechercher<ion-icon name="search-outline"></ion-icon>
          </li>
          <li> <button type="delete" name="delete">
              Supprimer<ion-icon name="trash-outline"></ion-icon>
            </button>
          </li>
          <li>
            <button type="reset">
              Rénitialiser<ion-icon name="refresh-outline"></ion-icon>
            </button>
            <button type="logout" href>
              Déconnexion<ion-icon name="log-out-outline"></ion-icon>
            </button>

          </li>
        </ul>
      </form>
    </div>
  </div>
  
       
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>