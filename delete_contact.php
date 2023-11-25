<?php

//delete a specific record from a database

// receive contactId
$contactID=$_POST["contactID"];
//connect
$dsn = "mysql:host=localhost;dbname=assignment6;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE FROM `contact` WHERE `contact`.`contactID`= $contactID; ");

//execute
if($stmt->execute()){
    ?><p>record deleted</p><?php
}
else{
    ?><p>Could not delete record</p><?php
}
?><a href="Select-contact.php">Back to Records</a><?php

?>