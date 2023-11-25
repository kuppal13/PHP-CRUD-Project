<?php


$contactID = $_GET["contactID"];

//connect
$dsn = "mysql:host=localhost;dbname=assignment6;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `contact` WHERE `contactID`= $contactID; ");

//execute
$stmt->execute();

//process
$row = $stmt->fetch()


    ?>
<h1>Are you sure you want to delete this record? </h1>
<h3>
    <div>
        <?= $row["contactID"] ?> |
        <?= $row["contactName"] ?> |
        <?= $row["contactType"] ?> |
        <?= $row["missed"] ?> |
        <?= $row["dateCalled"] ?> |
        <?= $row["timeCalled"] ?> |
        <?= $row["contactPicture"] ?> |
        <?= $row["isFavourite"] ?> |
    <br>
    <br>
        <form action="delete_contact.php" method="POST">
            <input name="contactID" value=<?= "$row[contactID]" ?> type="hidden">
            <input type="submit" value="Yes">
            <a href="Select-contact.php">No</a>
            
        </form>
    </div>
</h3>