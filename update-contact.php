<?php

$contactID = $_POST["contactID"];
$contactName = $_POST["contactName"];
$dateCalled = $_POST["dateCalled"];
$timeCalled = $_POST["timeCalled"];
$contactPicture = $_POST["contactPicture"];

$dsn = "mysql:host=localhost;dbname=assignment6;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

if (isset($_POST['contactType'])) {
    $contactType = $_POST["contactType"];
} else {
    $contactType = "Home";
}

if (isset($_POST['missed'])) {
    $missed = 1;
} else {
    $missed = 0;
}
if (isset($_POST["isFavourite"])) {
    $isFavourite =1;
    //connect
} else {
    $isFavourite =0;
    //connect
}


//prepare
$stmt = $pdo->prepare("UPDATE `contact`
SET `contactName`= '$contactName',`contactType`= '$contactType',`missed`= '$missed',`dateCalled`= '$dateCalled',`timeCalled`= '$timeCalled',`contactPicture`= '$contactPicture',`isFavourite`= '$isFavourite'  
WHERE `contactID`= $contactID; ");

if ($stmt->execute()) {
    ?>
    <p>Record Updated</p>
    <?php
} else {
    ?>
    <p>Could not updated record</p>
    <?php
}
?><a href="Select-contact.php">Back to Records</a>