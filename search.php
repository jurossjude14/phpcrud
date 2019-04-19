<?php

include "php_code.php";

//Search box value assigning to $Name variable.

   $Name = $_POST['search'];

//Search query.

   if(isset($Name)){
    $Query = "SELECT * FROM info WHERE Name LIKE '%$Name%'";}
   else {
    $Query = "SELECT * FROM info ";
   }


//Query execution

   $ExecQuery = mysqli_query($db, $Query);

//Creating unordered list to display result.

   //Fetching result from database.

   while ($row = MySQLi_fetch_array($ExecQuery)) {

       ?>
     <tr>  
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td>
        <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
      </td>
      <td>
        <a href="index.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
      </td>
     </tr> 
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->

   <?php } ?>