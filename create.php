<?php
if(isset($_POST['submit'])){
    include'configur.php';
    $_NUM_ORDRE_BO=$_POST['num_ordre_bo'];
    $_DATE_BO_CR_DEP=$_POST['date_bo_cr_dep'];
    $_CODE_EXP=$_POST['code_exp'];
    $_NUM_EXP_CR=$_POST['num_exp_cr'];
    $_DATE_EXP=$_POST['date_exp'];
    $_HEURE_EXP_CR=$_POST['heure_exp_cr'];
     $_OBJET_CR=$_POST['objet_cr'];
     $_DELAIS_DE_REALISATION_EXPEDITEUR=$_POST['delais'];
      $_NBR_PC_JOINTES=$_POST['nbr_pc_jointes'];
      $_OBSERV_EXP=$_POST['observ_exp'];
       $_OBSERV_BO=$_POST['observ_bo'];
       $_HEURE_BO_CR_DEP=$_POST['heure_bo_cr_dep'];
       
       $sql="INSERT INTO ´courrier_depart´ 
       (NUM_ORDRE_BO, DATE_BO_CR_DEP, CODE_EXP, NUM_EXP_CR, DATE_EXP, HEURE_EXP_CR, OBJET_CR, DELAIS_DE_REALISATION_EXPEDITEUR, NBR_PC_JOINTES, OBSERV_EXP, OBSERV_BO, HEURE_BO_CR_DEP)
        values ($_NUM_ORDRE_BO, $_DATE_BO_CR_DEP, $_CODE_EXP, $_NUM_EXP_CR, $_DATE_EXP, $_HEURE_EXP_CR, '$_OBJET_CR', $_DELAIS_DE_REALISATION_EXPEDITEUR, $_NBR_PC_JOINTES, '$_OBSERV_EXP', '$_OBSERV_BO', $_HEURE_BO_CR_DEP)";
        echo($sql);
        $result =mysqli_query($conn,$sql);
       print_r($result);
  }
?>