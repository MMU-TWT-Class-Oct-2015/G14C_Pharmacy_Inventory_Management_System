<!doctype html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Delete Item</title>
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
      <li><a href="add_user.php"><span>Add User</span></a></li>
      <li><a href="add_item.php"><span>Add Item</span></a></li>
      <li><a href="V_D_sale.php"><span>Daily Sales</span></a></li>
      <li><a href="V_M_sale.php"><span>Monthly Sales</span></a></li>
      <li><a href="V_F_month.php"><span>Top Selling Item</span></a></li>
      <li><a href="Update_Item.php"><span>Update Item</span></a></li>
      <li class='active'><a href="delete.php"><span>Delete Item</span></a></li>
      <li class='last'><a href="Home.html"><span>Log Out</span></a></li>
    </ul>
  </div>
<div class="center">
  <p1>Delete Item</p1>
  <br>
  <input type="button" name="l_item" value="List Item">
  <input type="button" name="S_item" value="Search Item">
  <input type="button" name="logout" value="Logout" >
  <br><br>
  <form method="get">
  Item ID:
  <input type="text" name="Item_ID" maxlength="30" size="30">
  <input type="button" name="delete" value="Delete Item" style="margin-right:70px;">
  </form>
  <?php
  $hostname = "localhost";//host name
	$dbname = "pharmacy_inventory";//database name
	$username = "root";//username you use to login to php my admin
	$password = "";//password you use to login

	//CONNECTION OBJECT
	//This Keeps the Connection to the Databade
	$connect = new MySQLi($hostname, $username, $password, $dbname) or die('Can not connect to database')

  if (isset($_GET['Item_ID']) && is_numeric($_GET['Item_ID']))
    {
    // get id value
    $id = $_GET['Item_ID'];

    // delete the entry
    $result = mysql_query("DELETE FROM pharmacy_inventory WHERE Item_ID=$id")
    or die(mysql_error());
    ?>
</div>

</body>
</html>
