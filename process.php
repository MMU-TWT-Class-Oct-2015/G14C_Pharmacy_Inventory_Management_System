<html>
<?php

mysql_connect("localhost","root", "") or die("mysql connection is failure.");
mysql_select_db("pinms") or die("Database does not exists.");


if(isset($_POST['submit'])){
	$user = $_POST['uname'];
	$pass = $_POST['pass'];
	$data_sql = mysql_query("SELECT * FROM login_pinms WHERE username = '$user' AND password = '$pass' ");
	$data = mysql_fetch_array($data_sql);
	$username = $data['uname'];
	$password = $data['pass'];
	$type = $data['type'];
	$name = $data['name'];

if($user == $username && $pass == $password){
		session_start();
		$_SESSION['name']=$name;
		if($type == 'admin'){
			echo "<script>location.assign('index_admin.php')</script>";
			}
		else if ($type == 'user'){
			echo "<script>location.assign('index_user.php')</script>";
			}
		else {<script javascript="language">
		alert("NOnsense");</script>}
		}
}

?>
</html>
