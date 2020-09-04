<?php

require 'vendor/autoload.php';

use Model\SmartChallengeModel;



if ($_GET['filter'] == 'biggestbudget'){
    SmartChallengeModel::listUsersByBiggestBudget();
}

if ($_GET['filter'] == 'smallestbudget'){
    SmartChallengeModel::listUsersBySmallestBudget();
}

if ($_GET['filter'] == 'A-Z'){
    SmartChallengeModel::listUsersByNameAZ();
}

if ($_GET['filter'] == 'Z-A'){
    SmartChallengeModel::listUsersByNameZA();
}
if (isset($_GET['start']) && isset($_GET['end'])){
    SmartChallengeModel::listUsersNoFilter();
}



