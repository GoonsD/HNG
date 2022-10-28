<?php

if (isset($_GET['slackusername'])) {
    $slackusername = $_GET['slackusername'];
    $backend = $_GET['backend'];
    $age = $_GET['age'];
    $bio = $_GET['bio'];
} else {
    $slackusername = "Gbenga";
    $backend = "true";
    $age = "56";
    $bio = "hfhfh";
}

settype($slackusername, "string");
settype($backend, "boolean");
settype($age, "integer");
settype($bio, "string");


$myArr = array("slackUsername : $slackusername", "backend : $backend", "Age : $age", "Bio : $bio");

$myJSON = json_encode($myArr);

echo $myJSON;
?>