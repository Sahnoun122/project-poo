<?php 
   include '../assets/php/connxion.php';
   

class User{
    public $nom ;
    public $prenom;
    public $user_type;

 public function   __construct($nom, $prenom , $user_type){
           
    $this->nom= $nom ;
    $this->prenom= $prenom;
    $this->user_type =$user_type;

}

function changenom($nom2){
    $nom1 = $nom2;
}
function changeprenom($nom3){
$nom1 = $nom3;

}
function createUser(){

    global $connxion;

  $sql = $connxion->prepare ("INSERT INTO utilisateurs (nom , prenom , type_utilisateur) VALUES (:nom, :prenom , :user_type) ");
  $sql->bindValue( ":nom", $this->nom, PDO::PARAM_STR );
  $sql->bindValue( ":prenom", $this->prenom, PDO::PARAM_STR );
  $sql->bindValue( ":type_utilisateur", $this->user_type, PDO::PARAM_STR );

  $sql->execute();

  $connxion = null;

}
}
$user= new User('abdelkarim' , 'moussi' , 'medecin');
$user->createUser();


