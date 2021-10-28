<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
	<?php
		if(isset($_SESSION["name"])) {
	?>
	Welcome <?php echo $_SESSION["name"]; ?>.
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label for="place_name">Enter the place name</label><br>
		<input type="text" name="place_name" id="place_name"><br>
		<label for="place_cost">Enter the cost</label><br>
		<input type="text" name="place_cost" id="place_cost"><br>
		<label for="place_caption">Enter the caption</label><br>
		<input type="text" name="place_caption" id="place_caption"><br>
		<label for="fileToUpload">Choose the image</label><br>
		<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
		<input type="submit" value="Upload Image" name="submit">
	</form>
	<button><a href="index.html" tite="Client Page">Visit Client Page</button> 
	<br><br>
	<button><a href="logout.php" tite="Logout">Logout</button> 
<?php
}else echo "<h2>Please login first .</h2>";
?>
</body>

</html>