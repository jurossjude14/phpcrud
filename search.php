<?php

include "php_code.php";
if(isset($_POST['searchtxt'])){
$Name = $_POST['searchtxt']; }

   if(isset($Name)){ $Query = "SELECT * FROM info WHERE Name LIKE '%$Name%'";}
   else { $Query = "SELECT * FROM info "; }

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
          <a href="index.php?del=<?php echo $row['id']; ?>" onclick="return confirm('are you sure you want to delele?')" class="del_btn">Delete</a>
        </td>
     </tr> 
   <?php } ?>

