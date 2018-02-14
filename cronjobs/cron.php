<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 14/02/2018
 * Time: 17:15
 */

include_once('../classes/ZeverSolarInverter.php');
include_once('../controllers/InverterController.php');

$inverterController = new InverterController();
$inverterController->cronjobAction();
?>