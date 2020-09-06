<?php

namespace Controller;

use Model\SmartsChallengeModel;

class SmartsChallengeController{
    
    public static function getDashboardNoFilter(){
        
        SmartsChallengeModel::listUsers(__DIR__ . '/../View/dashboard.php');       

    }

    public static function getDashboardDateFilter(){

        SmartsChallengeModel::listUsersByRegisterDate(__DIR__ . '/../View/dashboard.php');

    }

    public static function getCustomerDetails(){

        SmartsChallengeModel::listCustomerDetails(__DIR__ . '/../View/customer.php');

    }
    
}

