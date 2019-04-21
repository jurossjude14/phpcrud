<?php  include('php_code.php'); ?>


<html>
<head>
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>

</head>
<body>


<?php //search ajax ?>
<div class="headtag">
<h1 class="setcenter"> Renting Inquiry  Form </h1>
</div>
<div class="searchbox">
   <input type="text" id="searchtxt2" placeholder="Search" />
   <div id="display"></div>
</div>

<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

<div class="container">


<table class="gird-half">
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Profile Pic</th>
			<th>Action</th>
			<th colspan ="2"></th>
		</tr>
	</thead>
	<tbody id="viewset3">		
	</tbody>
</table>



<form class="grid-half" method="post" action="php_code.php" enctype="multipart/form-data" >
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
	<hr>
	<div class="input-group">
		<label>Message</label>
		<textarea type="text" name="inqmsg" value=""></textarea>
	</div>
	<div class="input-group">
		<label>Inquiry Name:</label>
		<input type="text" name="inqname" value="">
	</div>
	<div class="input-group">
		<button class="btn" type="submit" name="inqadd" >Inquiry</button>
	</div>
</form>
</div>

<footer>
	<script src="js/footjs.js"></script>
</footer>

</body>
</html>