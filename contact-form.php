<form action="insert-contact.php" method="POST">
    Contact Name <input name="contactName"><br>
    Contact Type <br>
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
</form>   


           

