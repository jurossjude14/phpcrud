<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

</head>

<div class="dashhead">
	<a href="admin.php">Home</a> |  <a href="orderlist.php"> Order Lists </a>
</div>
<h1 class="setcenter"> Inquiry Lists</h1>
<body>
<table>
	<thead>
		<tr>
			<th>Inquiry Name</th>
			<th>Inquiry Message</th>
			<th>House ID</th>
			<th>House Name</th>
			<th>Address</th>		
		</tr>
	</thead>
	<tbody>		

<?php

include "php_code.php";


   $Query = "SELECT * FROM inqtbl "; 
   $ExecQuery = mysqli_query($db, $Query);

   while ($row = MySQLi_fetch_array($ExecQuery)) {

       ?>
     <tr>  
        <td><?php echo $row['inqname']; ?></td>
        <td><?php echo $row['inqmessage']; ?></td>
        <td><?php echo $row['inqid']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['address']; ?></td>
 	</tr>
   <?php } ?>

	</tbody>
</table>
</body>