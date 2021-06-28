<?php
  // path DB
  include "../config.php";
  class EmplyerController{
    // fonction ajout
    public function AjoutEmployer($cin,$nom,$prenom,$nbHeures,$tarifHoraire){
        $req="insert into employee (cin,nom,prenom,nbHeures,tarifHoraire)
        values(:cin,:nom,:prenom,:nbHeures,:tarifHoraire)
        ";
        // configurtion DB avec getConnexion
        $db=config::getConnexion();
        // préparation de requete
        $rs=$db->prepare($req);
        // resultat
        $rs->bindValue(":cin",$cin);
        $rs->bindValue(":nom",$nom);
        $rs->bindValue(":prenom",$prenom);
        $rs->bindValue(":nbHeures",$nbHeures);
        $rs->bindValue(":tarifHoraire",$tarifHoraire);

        // exécution
        $rs->execute();
    }
}



?>