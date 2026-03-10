<?php

require_once "../src/MesDates.php";

$objDate = new \UPJV\MesDates();
header('Content-Type: application/json');
echo $objDate->demain();