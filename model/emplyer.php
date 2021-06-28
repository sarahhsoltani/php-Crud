<?php
// class entité base de donnée
class Employee {
    private $cin;
    private $nom;
    private $prenom;
    private $nbHeures;
    private $tarifHoraire;

// constructeur
    public function __construct($cin,$nom,$prenom,$nbHeures,$tarifHoraire){
        $this->$cin = $cin;
        $this-> $nom=$nom;
        $this->$prenom=$prenom;
        $this->$nbHeures=$nbHeures;
        $this->$tarifHoraire=$tarifHoraire;
    } 
// get
   public function getCin(){
     return $this->$cin;
   }
   public function getNom(){
    return $this->$nom;
  }
  public function getPrenom(){
    return $this->$prenom;
  }
  public function getNbHeures(){
    return $this->$nbHeures;
  }
  public function getTarifHoraire(){
    return $this->$tarifHoraire;
  }
//   Set
  public function setCin($cin){
    $this->$cin=$cin;
  }
  public function setNom($nom){
    $this->$nom=$nom;
  }
  public function setPrenom($prenom){
    $this->$prenom=$prenom;
  }
  public function setNbHeures($nbHeures){
    $this->$nbHeures=$nbHeures;
  }
  public function setTarifHoraire($tarifHoraire)){
    $this->$tarifHoraire=$tarifHoraire;
  }
}



?>