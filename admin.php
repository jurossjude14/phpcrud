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
<div class="dashhead">
	<a href="logout.php">Log Out</a> |  <a href="orderlist.php"> Order Lists </a>
</div>
<div class="searchbox">
   <input type="text" id="searchtxt" placeholder="Search" />
   <div id="display"></div>
</div>


<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Profile Pic</th>
			<th>Action</th>
			<th colspan ="2"></th>
		</tr>
	</thead>
	<tbody id="viewset2">		
	</tbody>
</table>



<form method="post" action="php_code.php" enctype="multipart/form-data" >
	<div class="newelem">
		<a href="admin.php" class="btn-set-add">Add New</a>
	</div>
	<div class="input-group">
		<div class="profile-pic">
			<?php if($update == true): $imvar = base64_encode($imgedit);?>
				<img id="profileset" 
					<?php if ($imvar): ?>
					src="data:image/jpeg;base64,<?php echo $imvar; ?>"
					<?php else: ?>
					src="img/profile.jpg"
					<?php endif; ?>	
					 height="150" >
			<?php else: ?>
				<img id="profileset"  src="img/profile.jpg" height="150">	 
			<?php endif; ?>

		</div>
		<input type="file" name="image" id="imagefile" onchange="previewFile()" /> 
	</div>
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

<footer>
	<script src="js/footjs.js"></script>
</footer>

</body>
</html>