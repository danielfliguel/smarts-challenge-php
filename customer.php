<?php

require 'vendor/autoload.php';

use Controller\SmartsChallengeController;

if ((isset($_GET['id']) && $_GET['id'] !== '')){
    SmartsChallengeController::getCustomerDetails();
}
else{
    header('Location: /');
}







