<?php

if (isset($_GET['slackusername'])) {
    $slackusername = $_GET['slackusername'];
    $backend = $_GET['backend'];
    $age = $_GET['age'];
    $bio = $_GET['bio'];
} else {
    $slackusername = "Goons";
    $backend = "true";
    $age = "21";
    $bio = "PHP backend developer with Networking and  Cybersec experience";
}

settype($slackusername, "string");

settype($age, "integer");
settype($bio, "string");


$myArr = array("slackUsername : $slackusername", "backend : $backend", "Age : $age", "Bio : $bio");

$myJSON = json_encode($myArr);

echo $myJSON;
?>