<?php

namespace Model;

class SmartChallengeModel{
    
    public static function listUsersNoFilter(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);             
        require __DIR__ . '/../View/dashboard.php';
    }
    
    public static function listUsersByBiggestBudget(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);
        usort($customers, function($a, $b)
        {
            if ($a->budget == $b->budget)
                return (0);
            return (($a->budget > $b->budget) ? -1 : 1);
        });        
        require __DIR__ . '/../View/dashboard.php';
    }

    public static function listUsersBySmallestBudget(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);
        usort($customers, function($a, $b)
        {
            if ($a->budget == $b->budget)
                return (0);
            return (($a->budget < $b->budget) ? -1 : 1);
        });        
        require __DIR__ . '/../View/dashboard.php';
    }

    public static function listUsersByNameAZ(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);
        usort($customers, function($a, $b)
        {
            if ($a->name->first == $b->name->first)
                return (0);
            return (($a->name->first < $b->name->first) ? -1 : 1);
        });        
        require __DIR__ . '/../View/dashboard.php';
    }

    public static function listUsersByNameZA(){
        $json = file_get_contents('https://smarts-totem.s3-sa-east-1.amazonaws.com/code-challenge/customers.json');
        $customers = json_decode($json);
        usort($customers, function($a, $b)
        {
            if ($a->name->first == $b->name->first)
                return (0);
            return (($a->name->first > $b->name->first) ? -1 : 1);
        });        
        require __DIR__ . '/../View/dashboard.php';
    }
        // var_dump($customers);

        // foreach ($customers as $customer){
            
        //     var_dump($customer->_id);
        //     var_dump($customer->budget);
        //     foreach($customer->pictures as $picture){
        //         var_dump($picture);
        //     }
        //     var_dump($customer->age);
        //     var_dump($customer->name->first);
        //     var_dump($customer->name->last);
        //     var_dump($customer->company);
        //     var_dump($customer->email);
        //     var_dump($customer->phone);
        //     var_dump($customer->address);
        //     var_dump($customer->about);
        //     var_dump($customer->registered);
        //     var_dump($customer->latitude);
        //     var_dump($customer->longitude);
        //     foreach($customer->contactTimeline as $item){
        //         var_dump($item->id);
        //         var_dump($item->broker);
        //         var_dump($item->date);
        //     }
        //     var_dump($customer->channel);
        // }
    

}