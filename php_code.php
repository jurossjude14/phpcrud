<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'crud');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

		mysqli_query($db, "INSERT INTO info (name, address, imgname) VALUES ('$name', '$address','$file')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: index.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];
		$imgname = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

		mysqli_query($db, "UPDATE info SET name='$name', address='$address', imgname='$imgname' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: index.php');
	}


	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM info WHERE id=$id");
		$_SESSION['message'] = "Address deleted!"; 
		header('location: index.php');
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

		if ($record) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$address = $n['address'];
			$imgedit = $n['imgname'];
		}
	}

// ...