<?php

namespace Model;

class SmartChallengeModel{
    
    public static function listUsersNoFilter(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);        
        require __DIR__ . '/../View/dashboard.php';
    }

    public static function filterUsersByRegisterDate(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);           
        $newCustomers = [];
        for ($i=0; $i<sizeof($customers); $i++){
            $dateOfRegister = date("Y-m-d", strtotime($customers[$i]->registered));
            
            
            if ($dateOfRegister >= $_GET['start'] || $dateOfRegister >= $_GET['end']){
                array_push($newCustomers, $customers[$i]);
            }          
            
        }
        return $newCustomers;
    }

    public static function listUsersByRegisterDate(){
        
        $customers = self::filterUsersByRegisterDate();
        
                
        require __DIR__ . '/../View/dashboard.php';
    }      

}