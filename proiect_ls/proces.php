<?php
include_once 'database.php';
if(isset($_POST['save']))
{

		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
	  $name = $_POST['name'];
		$info	=$_POST['info'];
		$icon	=$_POST['icon'];
	 $sql = "INSERT INTO locations ( latitude, longitude, name, info, icon)
	 VALUES ('$latitude','$longitude','$name', '$info', '$icon')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
