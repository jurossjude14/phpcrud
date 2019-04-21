<?php

include "php_code.php";
if(isset($_POST['searchtxt2'])){
$Name = $_POST['searchtxt2']; }

   if(isset($Name)){ $Query = "SELECT * FROM info WHERE Name LIKE '%$Name%'";}
   else { $Query = "SELECT * FROM info "; }

   $ExecQuery = mysqli_query($db, $Query);

   while ($row = MySQLi_fetch_array($ExecQuery)) {

       ?>
     <tr>  
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td>
            <?php if ($row['imgname']): $imvar = base64_encode($row['imgname']); ?>
              <img src="data:image/jpeg;base64,<?php echo $imvar; ?>" height="50" width="50" class="img-thumnail" />
            <?php else: ?>
              <img src="img/profile.jpg" height="50" width="50" class="img-thumnail" />            
            <?php endif; ?>
        </td>  
        <td>
          <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >view</a>
        </td>
     </tr> 
   <?php } ?>

