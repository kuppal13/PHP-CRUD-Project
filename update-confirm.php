<?php


$contactID = $_GET["contactID"];

//connect
$dsn = "mysql:host=localhost;dbname=assignment6;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `contact` WHERE `contactID` = $contactID; ");

//execute
$stmt->execute();

//process
$row = $stmt->fetch()


    ?>
<h1>Update this record</h1>
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
   
 <form action="update-contact.php" method="POST">
<input name="contactID" value=<?= "$row[contactID]" ?> type="hidden">            


    Contact Name <input name="contactName"><br>
    Contact Type :<br>
            <input type="radio" name="contactType" value="mobile">
            <label for="mobile">mobile</label><br>
            <input type="radio" name="contactType" value="home">
            <label for="home">home</label><br>
            <input type="radio" name="contactType" value="work">
            <label for="work">work</label><br>
            
    Missed     <input type="checkbox" name="missed" value=0>
           <br>
            
                         
    Date Called  <input type="date" name="dateCalled"><br>
    Tme Called  <input type="time" name ="timeCalled"><br>
    Contact Picture <input  name= "contactPicture"><br>
    Favourite    <input type="checkbox" name="isFavourite" value=0>
            <br>
            <input type="submit">
            <h2>Don't want to update</h2>
            <a href="Select-contact.php">Go back to records</a>
</form>   


           

