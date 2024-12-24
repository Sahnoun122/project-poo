<?php

Class Patients extends User{
    public $rendez_vous;

   public  function __construct($nom , $prenom , $user_type){
      
    parent:: __construct($nom, $prenom , $user_type);


    }
    function prendrRendezvous($rendez_vous){
         $rendez_vous1 = $rendez_vous;
    }
    function consultePatients($specialites){
        $specialites1 = $specialites;
    }


}

