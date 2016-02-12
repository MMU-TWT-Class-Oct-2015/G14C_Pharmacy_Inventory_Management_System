<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update Item</title>
    <link rel="stylesheet" type="text/css" href="stylingpage.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>

<body>
  <div id='cssmenu'>
    <ul>
      <li><a href="index_admin.php"><span>Main Menu</span></a></li>
      <li><a href="add_user.php"><span>Add User</span></a></li>
      <li><a href="add_item.php"><span>Add Item</span></a></li>
      <li><a href="V_D_sale.php"><span>Daily Sales</span></a></li>
      <li><a href="V_M_sale.php"><span>Monthly Sales</span></a></li>
      <li><a href="V_F_month.php"><span>Top Selling Item</span></a></li>
      <li class='active'><a href="Update_Item.php"><span>Update Item</span></a></li>
      <li><a href="delete.php"><span>Delete Item</span></a></li>
      <li class='last'><a href="Home.html"><span>Log Out</span></a></li>
    </ul>
  </div>
  <br><br>
  <input type="button" name="l_item" value="List Item">
  <input type="button" name="S_item" value="Search Item">
  <input type="button" name="logout" value="Logout" >
  <br><br>
  <form action="" method="post">
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "pharmacy_inventory";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die ('Can not connect to database');


	while ($row = $result->fetch_assoc())


  Name:<input type="text" name="name" value="<?php echo $row['Item_Name']; ?>">
  Quantity:<input type="text" name="Quantity" value="<?php echo $row['Quantity']; ?>">
  Item ID:<input type="text" name="Item_ID" value="<?php echo $row['Item_ID']; ?>">
  Price:<input type="text" name="Price" size="100" value="<?php echo $row['Item_Price']; ?>">
  Description:<input type="text" name="Des" size="100" value="<?php echo $row['Description']; ?>">
  <input type="Submit" value="Update" name="Submit">
?>
</form>
<?php
	if(isset($_POST['Submit'])){//if the submit button is clicked

	$update = $_POST['Item_ID'];

	$query="UPDATE pharmacy_inventory SET Item_ID=$update where Item_ID = '".$Item_ID."'";

	mysql_query($query) or die("Cannot update");//update or error
	}
?>
</body>
</html>
