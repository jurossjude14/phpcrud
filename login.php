
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
 
<body>
<?php

include('php_code.php'); 
 
if(isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
 
    if($user == "" || $pass == "") {
        echo "Either username or password field is empty.";
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
        $result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password='$pass'")
        or die("Could not execute the select query.");
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];

            if (!empty($_POST['remember'])) {
			    setcookie ("member_user",$user,time()+ (10 * 365 * 24 * 60 * 60));  
			    setcookie ("member_password",$pass,time()+ (10 * 365 * 24 * 60 * 60));            	
            }

        } else {
            echo "Invalid username or password.";
            echo "<br/>";
            echo "<a href='login.php'>Go back</a>";
        }
 
        if(isset($_SESSION['valid'])) {
            header('Location: admin.php');            
        }
    }
} else {
?>
    <form name="form1" method="post" action="">
        <table width="75%" border="0">
            <tr> 
                <td width="10%">Username</td>
                <td><input type="text" name="username" value="<?php if(isset($_COOKIE["member_user"])) { echo $_COOKIE["member_user"]; } ?>"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="password" name="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"></td>
            </tr>
            <tr> 
<td><input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> /></td>
				<td>Remember Me</td>
            </tr>
            <tr> 
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
<?php
}
?>
</body>
</html>