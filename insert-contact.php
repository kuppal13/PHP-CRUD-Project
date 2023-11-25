<?php

// receive variables
 $contactName =$_POST["contactName"];
  $dateCalled = $_POST["dateCalled"];
 $timeCalled = $_POST["timeCalled"];
 $contactPicture =$_POST["contactPicture"];




// connect
$dsn = "mysql:host=localhost;dbname=assignment6;charset=utf8mb4";
$dbusername ="root";
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
$stmt = $pdo->prepare("INSERT INTO `contact` (`contactID`, `contactName`, `contactType`, `missed`, `dateCalled`, `timeCalled`, `contactPicture`, `isFavourite`) 
VALUES (NULL, '$contactName', '$contactType', '$missed', '$dateCalled', '$timeCalled', '$contactPicture', '$isFavourite')");


//execute
if ($stmt->execute()) {
    ?>
    <p>Thanks for your input!</p>
    <?php
} else {
    ?>
    <p>Oops,we couldn't save your data at this time!</p>
    <?php
}
?>

<a href="Select-contact.php">Go back to records</a>