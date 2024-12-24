<?php
include '../config/dbconnection'; 

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


   public function getDateApointment($id_patient){

      global $connect;
      $stmt = $connect -> prepare("SELECT date_apoin FROM appointment WHERE id_patient = :id_patient");
      $stmt -> bindParam(':id_patient',$id_patient);
      $stmt -> execute();
      
      $stmt = null;
   }



   public function updateStatus($id_apoin,$newstatus){

    global $connect;

    $stmt = $connect -> prepare("UPDATE appointment 
    SET status = :status
    WHERE id_apoin = :id_apoin");
    $stmt -> bindParam(':status',$newstatus,PDO::PARAM_STR);
    $stmt -> bindParam(':id_apoin',$id_apoin,PDO::PARAM_STR);
    $stmt -> execute();
 
    $stmt = null;
   } 


}
