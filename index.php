<?php

require 'vendor/autoload.php';

use Model\SmartChallengeModel;


if (($_GET['start'] !== null) && ($_GET['end'] != null)){
    SmartChallengeModel::listUsersByRegisterDate();
}
else{
    SmartChallengeModel::listUsersNoFilter();
}





