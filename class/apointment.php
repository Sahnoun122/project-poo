<?php 

class Apointment{

   public $id_patient ;
   public $id_doctor;
   public $date_apointment;
   public $status;


   public function __construct($id_patient,$id_doctor,$date_apointment,$status){
        
    $this -> id_patient = $id_doctor;
    $this -> id_doctor = $id_patient;
    $this -> date_apointment = $date_apointment;
    $this -> status = $status;

   }
    
   public function getDateApointment(){
      echo $this-> date_apointment;
   }

   public function updateStatus($newstatus){

    return $this->status = $newstatus;

   } 


}
