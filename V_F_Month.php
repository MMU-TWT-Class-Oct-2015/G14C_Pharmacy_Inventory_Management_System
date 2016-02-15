<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Top Selling Item</title>
    <link rel="stylesheet" type="text/css" href="stylingpage.css"> <!-- linking to external css file -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>

<body>
  <h3 class="skm"> <!-- calling identifier "skm" for image replacement -->
  Pharmacy Inventory Management System
  </h3>
  <div id='cssmenu'> <!--calling identifier "cssmenu" for navigation bar-->
    <ul>
      <li><a href="index_admin.php"><span>Main Menu</span></a></li>
      <li><a href="add_user.html"><span>Add User</span></a></li>
      <li><a href="Add_Item.html"><span>Add Item</span></a></li>
      <li><a href="V_D_sale.php"><span>Daily Sales</span></a></li>
      <li><a href="V_M_sale.php"><span>Monthly Sales</span></a></li>
      <li class='active'><a href="V_F_month.php"><span>Top Selling Item</span></a></li>
      <li><a href="Update_Item.html"><span>Update Item</span></a></li>
      <li><a href="delete.html"><span>Delete Item</span></a></li>
      <li class='last'><a href="Home.php"><span>Log Out</span></a></li>
    </ul>
  </div>
<div class="center"> <!--aligning the body to the center of the page-->
  <p>View Top Selling Item of the Month</p>

  <br><br>
  <form  method="post" >
  Date:
  <input type="text" name="month_D_F" maxlength="4" size="2"> / <!--creating inputs for search by date-->
  <input type="text" name="year_D_F" maxlength="4" size="4">
  <input type="submit" name="submit_D_F" value="Search" style="margin-right:70px;">

  <?php
error_reporting(E_ALL);
session_start();
include "conn.php"; //including the conn.php file for connectivity purposes

if (isset($_POST['submit_D_F']))
{
	// get form data, making sure it is valid

	$month = $_POST['month_D_F'];
	$year = $_POST['year_D_F'];

 // selecting the data from the database
	$query = "SELECT *
  FROM `sales`
  WHERE `month` = '$month' AND `year` = '$year'
  ORDER BY `quantity_sold` DESC" ;

	$result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) { //creating the table header
      echo "<table>
    		<tr>
    <th>Item ID</th>
    <th>Item Sold</th>
    <th>Quantity Sold</th>
    <th>Price</th>
    <th>Day</th>
    <th>Month</th>
    <th>Year</th>
  		</tr>";
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { //assigning the selected data from the database to a variable
      	                                                         //displaying the selected data into the table
      	echo "

  <tr>
    <td>{$row['id_item']}</td>
    <td>{$row['item_sold']}</td>
    <td>{$row['quantity_sold']}</td>
    <td>{$row['price']}</td>
    <td>{$row['day']}</td>
    <td>{$row['month']}</td>
    <td>{$row['year']}</td>
  </tr>";

      }
      echo "</table>"; //closing table
    }
      else {    echo "<br><br>Query didnt return any result"; //else condition if the query didn't return any result
        }
}
 mysqli_close($conn) //closing connection
?>

  </form>
</div>
</body>
</html>
