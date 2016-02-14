<?php
require("sql_connect.php");

// username and password sent from form
// mysql_real_escape_string to avoid Sql-Injection
$myusername=mysql_real_escape_string($_POST['uname']);
$mypassword=mysql_real_escape_string($_POST['pass']);
//-------------------------------------------------------------------------------------
//mysql_connect("localhost","root", "") or die("mysql connection is failure.");
//mysql_select_db("pinms") or die("Database does not exists.");
$sql="SELECT * FROM user WHERE User_Name='$myusername' and Password='$mypassword'";
$result=mysql_query($sql);

// Replace counting function based on database you are using.
$count=mysql_num_rows($result);
$status=mysql_fetch_assoc($result);
// If result matched $myusername and $mypassword, table row must be 1 row
//-------------------------------------------------------------------------------------
if($count==1)
{
  if($status["Admin"]=="Admin")
  {
  session_start();

  // Register $myusername, $mypassword and redirect to file "login_success.php"
  $_SESSION['myusername']=$myusername;
  $_SESSION['mypassword']=$mypassword;
  $id =  $_SESSION['id']=$result['id'];

  header("location:add_user.php");
 }
  else //if ($status["Status"]=="Student")
  {
  session_start();
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  $_SESSION['myusername']=$myusername;
  $_SESSION['mypassword']=$mypassword;
  $id =  $_SESSION['id']=$result['id'];

  header("location:Item_list.php");
  }

}

else
{
  echo "Wrong Username or Password";
  header("location:index2.html");
}









/*
if(isset($_POST['submit'])){
	$user = $_POST['uname'];
	$pass = $_POST['pass'];
	$data_sql = mysql_query("SELECT * FROM pharmacy_inventory WHERE username = '$user' AND password = '$pass' ");
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
*/
?>
