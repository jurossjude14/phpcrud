<?php  include('php_code.php'); ?>


<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

</head>
<body>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<?php //search ajax ?>
<div class="searchbox">
   <input type="text" id="searchtxt" placeholder="Search" />
   <div id="display"></div>
</div>



<?//php $results = mysqli_query($db, "SELECT * FROM info"); ?>
<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody id="viewset2">		
	</tbody>

	<?php //while ($row = mysqli_fetch_array($results)) { ?>
		<!--<tr id="viewset2">
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="index.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>-->
	<?php //} ?>
</table>



<form method="post" action="php_code.php" >
	<div class="input-group">
		<label>Name</label>
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="input-group">
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>

</body>
</html>