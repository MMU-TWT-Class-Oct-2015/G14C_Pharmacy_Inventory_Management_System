<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else if (isset($_POST['login'])){
	
	
		
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
		if($uname == null && $pass == null){
			echo "Please fill in the username and password.";
		}
		else{
			$uname = $_POST['uname'];
			$pass = $_POST['pass'];
		$query="SELECT * FROM `user` WHERE `user_name` = '$uname' AND `password` ='$pass'";
		$result=mysqli_query($conn,$query);
		//$row = mysqli_fetch_array($result,MYSQLI_ASSOC) or die(mysql_error());
		//if(!$result){
		//	echo "Wrong User Name Or Password!!";
		//}
		if($uname == 'admin' && $pass == 'admin')
		{
			header("location:index_admin.php");
		}
		else if($uname == 'user' && $pass == 'user'){
		//$count=mysqli_num_rows($result);
		//$status=mysqli_fetch_assoc($result);
		
		//if($count>0){
		
			 
		//	$username = $row['user_name'];
			//$password = $row['password'];
		
			
		
		
		
		//
		//if($uname == $username && $pass == $password){
			//session_start();
			
		//	if($username == 'admin'){
		//	header("location:index_admin.php");
		//	}
			//else {
				header("location:Item_list.php");
			}
			else {
				echo "Wrong User Name Or Password!!";
			}
			
		//}
	}
  }

	
	
		
		

//echo "Connected successfully";

?>