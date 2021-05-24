<!DOCTYPE html>
<html>
  <title>Formular table</title>
  <style>
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  h1{
    background-color: #e36517;
    color: white;
    text-align: center;

  }
  </style>

  <body>
    <h1> Formular de înregistrare </h1>

<div>
	<form method="post" action="proces.php">
		Latitude:<br>
		<input type="text" name="latitude">
		<br>
		Longitude:<br>
		<input type="text" name="longitude">
		<br>
		Name:<br>
		<input type="text" name="name">
    <br>
    Info:<br>
    <input type="text" name="info">
    <br>
    Icon:<br>
    <input type="icon" name="icon">
		<br><br>
		<input type="submit" name="save" value="submit">
	</form>

  <form action="index.php" method="get">
  <button name="subject" type="submit" value="index.php">MAP</button>
  </form>

  </body>
</html>
