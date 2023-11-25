<?php
//process-insert-contact.app
?>

<h1>Records</h1>
<a href="contact-form.php">Add a record</a>
<?php

//connect
$dsn = "mysql:host=localhost;dbname=assignment6;charset=utf8mb4";
$dbusername="root";
$dbpassword="";
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//prepare
$stmt = $pdo->prepare("SELECT * FROM `contact`; ");

//execute
$stmt->execute();
//process- to display the content
while ($row = $stmt->fetch()) {
    ?>
    <div>
        <table border="1">
         <tr>  
            <th> Contact ID </th>
            <th> Contact Name </th> 
            <th> Contact Type </th>
            <th> Missed </th>
            <th> Date Called </th>
            <th> Time Called </th>
            <th> Contact Picture</th>
            <th> Favourite</th>




</tr>
<tr>  
        <td><?= $row["contactID"] ?></td> 
      <td>  <?= $row["contactName"] ?></td>
      <td>  <?= $row["contactType"] ?> </td>
        <td><?= $row["missed"] ?> </td>
        <td><?= $row["dateCalled"] ?> </td>
        <td><?= $row["timeCalled"] ?> </td>
        <td><?= $row["contactPicture"] ?> </td>
        <td><?= $row["isFavourite"] ?> </td><br>
        
</table>
<a href="delete-confirm.php?contactID=<?= $row["contactID"] ?>">Delete</a>
        <a href="update-confirm.php?contactID=<?= $row["contactID"] ?>">Update</a>
    </div>

    <?php
}
?>