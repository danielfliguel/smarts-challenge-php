<?php

require 'vendor/autoload.php';

use Controller\SmartsChallengeController;


if (isset($_GET)){
    SmartsChallengeController::getDashboardDateFilter();
}
else{
    SmartsChallengeController::getDashboardNoFilter();
}







