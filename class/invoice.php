<?php 

class Invoice{
    
    public $id_apointment;
    public $amount;
    public $date_invoice;

    public function __construct($id_apointment,$amount,$date_invoice){

        $this -> id_apointment = $id_apointment;
        $this -> amount = $amount;
        $this -> date_invoice = $date_invoice;
        
    }

    public function displayINvoice(){

    }

}