<?php

include('functions/functions.php');

$hi = fopen('php://stdin', "r");
$ho = fopen('php://stdout', "w");

fscanf($hi, "%d", $number);

$result = awesome_function($number);

fwrite($ho, sprintf("%d\n", $result));

fclose($ho);
