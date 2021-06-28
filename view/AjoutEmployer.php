
<?php
include "../controller/employerC.php";
if(isset ($_POST ["submit"])){
$employer=new EmplyerController() ;


    // déclaration
    $cin=$_POST['cin'];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $nbHeures=$_POST["nbHeures"];
    $tarifHoraire=$_POST["tarifHoraire"];

    $employer->AjoutEmployer($cin,$nom,$prenom,$nbHeures,$tarifHoraire);
   ?>

    <table>
    <tr>
    <td>Cin</td>
    <td>Nom</td>
    <td>Prenom</td>
    <td>NbHeures</td>
    <td>tarifHoraire</td>
    </tr>
    <tr>
    <td><?php echo $cin ;  ?> </td>
    <td> <?php echo $nom ;  ?></td>
    <td><?php echo $prenom ;  ?></td>
    <td><?php echo $nbHeures ;  ?></td>
    <td><?php echo $tarifHoraire ;  ?></td>
    
    </tr>
    </table>
   <?php

    
}

?>




<!-- Formulaire -->
<form method="POST" action="">
<input type="number" name="cin" placeholder="enter cin...">
<input type="text" name="nom" placeholder="enter nom..." >
<input type="text" name="prenom" placeholder="enter prenom..." >
<input type="number" name="nbHeures" placeholder="enter nbHeures ..." >
<input type="number" name="tarifHoraire" placeholder="enter tarifHoraire ..." >
<button name="submit" type="submit"> Submit</button>
<button type="reset"> annuler</button>
</form>