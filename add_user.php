<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add User</title>
    <link rel="stylesheet" type="text/css" href="stylingpage.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>

<body>
  <h3 class="skm">
  Pharmacy Inventory Management System
  </h3>
  <div id='cssmenu'>
    <ul>
       <li><a href="index_admin.php"><span>Main Menu</span></a></li>
       <li class='active'><a href="add_user.html"><span>Add User</span></a></li>
       <li><a href="Add_Item.html"><span>Add Item</span></a></li>
       <li><a href="V_D_sale.php"><span>Daily Sales</span></a></li>
       <li><a href="V_M_sale.php"><span>Monthly Sales</span></a></li>
       <li><a href="V_F_month.php"><span>Top Selling Item</span></a></li>
       <li><a href="Update_Item.html"><span>Update Item</span></a></li>
       <li><a href="delete.html"><span>Delete Item</span></a></li>
       <li class='last'><a href="Home.php"><span>Log Out</span></a></li>
    </ul>
  </div>
  <div class="center">
    <p>Add User</p>
  <br>
  <?php
error_reporting(E_ALL);
session_start();
include "conn.php";
 
if (isset($_POST['submit']))
{
	// get form data, making sure it is valid

	$staff_id = $_POST['sid'];
	$name = $_POST['name'];
	$pass= $_POST['pass'];
	

	// save the data to the database
	$query = "INSERT INTO `user` (`user_name`,`staff_id`,`password`)
	VALUES
	('$staff_id','$name','$pass')";

	$result = mysqli_query($conn, $query);
	if($result){
		echo "New User Added";
	}
	else{  echo "New User Not Added";
	}
}
 mysqli_close($conn);
?>
  
  </div>
</body>
</html>
