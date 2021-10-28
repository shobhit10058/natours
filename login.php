<?php
session_start();
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = connect("adminlogin")->prepare("SELECT * FROM admin_login");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['adminName'] == $username) && 
            ($user['password'] == $password)) {
                $_SESSION["name"] = $user['adminName'];
                header("Location: admin_page.html");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
        }
    }
    if(isset($_SESSION["name"])) {
        header("Location:admin_page.php");
    }
}
  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
</head>
<body>
	<form action = "login.php" method = "post">
		<label>UserName  :</label><input type = "text" name = "username"/><br /><br />
		<label>Password  :</label><input type = "password" name = "password" /><br/><br />
		<input type = "submit" value = " Submit "/><br />
	</form>
	<button><a href="index.html" tite="Home">Home</button> 
</body>
</html>
