<?php

include "php_code.php";
$Name = $_POST['search'];

   if(isset($Name)){
    $Query = "SELECT * FROM info WHERE Name LIKE '%$Name%'";}
   else {
    $Query = "SELECT * FROM info ";
   }

   $ExecQuery = mysqli_query($db, $Query);

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
   <?php } ?>