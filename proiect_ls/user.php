<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
h1{
  background-color:inherit;
  color: black;
  text-align: center;

}
table {
border-collapse: collapse;
width: 90%;
color: #000000;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #e36517;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
  <h1> Tabel de date </h1>

<table>
<tr>
<th>Latitude</th>
<th>Longitude</th>
<th>Name</th>
<th>Info</th>
<th>Culoare</t>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "multiuserlogin");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT latitude,longitude ,name ,info ,icon FROM locations";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["latitude"]. "</td><td>" . $row["longitude"] . "</td><td>"
. $row["name"].  "</td><td>" . $row["info"]. "</td><td>" . $row["icon"]. "</td></tr>";
}

echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
<form action="index.php" method="get">
<button name="subject" type="submit" value="index.php">MAP</button>
</form>

</table>
</body>
</html>
