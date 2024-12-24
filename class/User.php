<?php 
   

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
function affichage(){
}
}



