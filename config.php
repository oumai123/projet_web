<?php
$_mysqli= new mysqli('localhost','root','','gbo');

if(isset($_POST['submit'])){
  $_NUM_ORDRE_BO=$_POST['date_bo_cr_dep'];
  $_DATE_BO_CR_DEP=$_POST['heure_bo_cr_dep'];
  $_CODE_EXP=$_POST['code_exp'];
  $_NUM_EXP_CR=$_POST['num_exp_cr'];
  $_DATE_EXP=$_POST['date_exp'];
  $_HEURE_EXP_CR=$_POST['heure_exp_cr'];
   $_OBJET_CR=$_POST['objet_cr'];
   $_DELAIS_DE_REALISATION_EXPEDITEUR=$_POST['delais_de_realisation_expediteur'];
    $_NBR_PC_JOINTES=$_POST['nbr_pc_jointes'];
    $_OBSERV_EXP=$_POST['observ_exp'];
     $_OBSERV_BO=$_POST['observ_bo'];
     $_HEURE_BO_CR_DEP=$_POST['heure_bo_cr_dep'];
     $_NUM_ORDRE_BO=$_POST['num_ordre_bo'];
     $_CODE_DEST=$_POST['code_dest'];
      $_NUM_RECEPTION_CR=$_POST['num_reception_cr'];
      $_DATE_RECEPTION_CR=$_POST['date_reception_cr'];
       $_HEURE_RECEPTION_CR=$_POST['heure_reception_cr'];
       $_OBSERV_DEST=$_POST['observ_dest'];
     $_CODE_EXP=$_POST['code_exp'];
     $_TYPE_EXP=$_POST['type_exp'];
       $_QUALITE_EXP=$_POST['qualite_exp'];
     $_CODE_DEST=$_POST['code_dest'];
      $_TYPE_DEST=$_POST['type_dest'];
      $_QUALITE_DEST=$_POST['qualite_dest'];
    
     $_sql1="INSERT INTO courrier_depart
     (NUM_ORDRE_BO, DATE_BO_CR_DEP, CODE_EXP, NUM_EXP_CR, DATE_EXP, HEURE_EXP_CR, OBJET_CR, DELAIS_DE_REALISATION_EXPEDITEUR, NBR_PC_JOINTES, OBSERV_EXP, OBSERV_BO, HEURE_BO_CR_DEP)
    VALUES  ('$_NUM_ORDRE_BO', '$_DATE_BO_CR_DEP',' $_CODE_EXP', '$_NUM_EXP_CR', '$_DATE_EXP',' $_HEURE_EXP_CR', '$_OBJET_CR', '$_DELAIS_DE_REALISATION_EXPEDITEUR', '$_NBR_PC_JOINTES',' $_OBSERV_EXP', '$_OBSERV_BO', '$_HEURE_BO_CR_DEP')";
      $_sql2="INSERT INTO destination(NUM_ORDRE_BO, CODE_DEST, NUM_RECEPTION_CR, DATE_RECEPTION_CR, HEURE_RECEPTION_CR, OBSERV_DEST)
      VALUES ('$_NUM_ORDRE_BO', '$_CODE_DEST', '$_NUM_RECEPTION_CR', '$_DATE_RECEPTION_CR', '$_HEURE_RECEPTION_CR', '$_OBSERV_DEST')";
      $_sql3="INSERT INTO expediteur(CODE_EXP, TYPE_EXP, QUALITE_EXP) VALUES ('$_CODE_EXP', '$_TYPE_EXP', '$_QUALITE_EXP')";
      $_sql4="INSERT INTO destinataire(CODE_DEST, TYPE_DEST, QUALITE_DEST) VALUES ('$_CODE_DEST','$_TYPE_DEST','$_QUALITE_DEST')";
      $result =mysqli_query($conn,$sql);
      if($_result){
      header('Location:showlist.php');   
      }else{
        die(mysqli_error($_conn));
      }
      



}
 
?>