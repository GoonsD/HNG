<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

    $slackusername = "Goons";
    $backend = "true";
    $age = "21";
    $bio = "PHP backend developer with Networking and  Cybersec experience";


settype($slackusername, "string");
settype($backend, "boolean");
settype($age, "integer");
settype($bio, "string");


$myArr = array("slackUsername" => $slackusername, "backend" => $backend, "age" => $age, "bio"=> $bio);

$myJSON = json_encode($myArr);

echo $myJSON;
?>