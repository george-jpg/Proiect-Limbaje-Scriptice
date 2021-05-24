<!doctype html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="multiuserlogin";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['Login'])){
$user=$_POST['user'];
$pass = $_POST['pass'];
$usertype=$_POST['usertype'];
if(!empty($user) && !empty($pass)){
$query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password = '".$pass."' and usertype='".$usertype."'";
$result = mysqli_query($conn, $query);
if($result){
while($row=mysqli_fetch_array($result)){
echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';

}
if($usertype=="admin" && $result && mysqli_num_rows($result) > 0){
?>
<script type="text/javascript">
window.location.href="admin.php"</script>
<?php
}else if($usertype=="user" && $result && mysqli_num_rows($result) > 0){
?>
<script type="text/javascript">
window.location.href="user.php"</script>
<?php

}
  }
    }
    echo "wrong username or password!";
  }else
  {
    echo "";
  }



?>
<html>
<head>
<meta charset="utf-8">
<title>Multi user login system</title>
<link  rel ="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class ="bg-dark"
  <div class="container">
    <div class=" row justify-content-center">
      <div class ="col-lg-5 bg-light mt-5 px-0">
        <h3 class="text-center text-light bg-danger p-3">Multi User Login</h3>
<form method="post">
<table>
<tr>
<td><div class ="form-group">
  <input type="text" name ="user" class="form-control form-control-lg" placeholder="Username" required>
</div>

</tr>
<tr>
<td><div class ="form-group">
  <input type="password" name ="pass" class="form-control form-control-lg" placeholder="Password" required>
</div>
</tr>
<tr>
<td>
Select user type: <select name="usertype">
<option value="admin">admin</option>
<option value="user">user</option>
</select>
</td>
</tr>
<tr>
<td><div class ="form-group">
  <input type="submit" name="Login" value="Login"></td>
</tr>
</table>
</form>
</body>
</html>
