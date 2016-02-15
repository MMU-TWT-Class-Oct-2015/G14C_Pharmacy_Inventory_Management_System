<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Search Item</title>
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
       <li><a href="index_user.html"><span>Main Menu</span></a></li>
       <li class='active'><a href="Item_list.php"><span>Search Item</span></a></li>
       <li><a href="add_entry.html"><span>Item Refund</span></a></li>
       <li><a href="Home.php"><span>Log Out</span></a></li>
    </ul>
  </div>
  <div class="center">
    <br><br>
    <p>Searched Item</p>

	<?php  
	error_reporting(E_ALL);
	session_start();
	include "conn.php";
	
     if (isset($_POST['search']))
{
	// get form data, making sure it is valid

	$item = $_POST['item_id'];
	
	// load data from database
	$query2 = "SELECT *
  FROM `item_pinms`
  WHERE `item_id` = '$item' ";
 
	$result2 = mysqli_query($conn, $query2);
  
  if (mysqli_num_rows($result2) > 0) {
      echo "<table>
  		<tr>
    <th>ID :</th>
    <th>Item :</th>
    <th>Quantity :</th>
    <th>Price :</th> 		
    <th>Description :</th>
    
  </tr>";
      while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
      	
      	echo "
  
  <tr>
    <td>{$row['item_id']}</td>
    <td>{$row['item_name']}</td>
    <td>{$row['item_quantity']}</td>		
    <td>{$row['item_price']}</td>
    <td>{$row['item_des']}</td>
  </tr>
    
    ";
      		
      }
      echo "</table>";
      
      
    }
      else {    echo "<br><br>Query didnt return any result";
        }
}
 mysqli_close($conn)
?>





<div>

      <form  method="post" >
      Name:<input type="text" name="name"><br>
      Item ID:<input type="text" name="item_id"><br>
      Price:<input type="text" name="price"><br>
      
      <input type="submit" name="confirm" value="Sold">;
      </form>
</div>
     
     
<?php  
     error_reporting(E_ALL);
     //session_start();
     include "conn.php";
      if (isset($_POST['confirm']))
{
	$itemname = $_POST['name'];
	$item_price = $_POST['price'];
	$item_sold_id = $_POST['item_id'];

	$itemquery = "SELECT * FROM `item_pinms` WHERE `item_name` = '$itemname' ";
	
	$update = "UPDATE `item_pinms` SET `item_quantity = `item_quantity` - 1
  			   WHERE `item_name' = '$itemname'";
	$result = mysqli_query($conn, $update);
	
	// get form data, making sure it is valid

	//$item_sold = item_pinms.item_name;
	//$item_price = item_pinms.item_price;
	$quantity = 1;
	$day = date("d");
	$month = date("M");
	$year = date("Y");
	
	
	$query3 = "INSERT INTO `sales` (`quantity_sold`,`price`,`day`,`item_sold`,`month`,`year`,`item_sold_id`)
	VALUES
	('$quantity','$item_price','$day','$itemname','$month','$year','$item_sold_id')";
	
	$result3 = mysqli_query($conn, $query3);

	if($result3){
		echo "Item Added";
	}
	else{  echo "Item Not Added";
	}
	}
	mysqli_close($conn);
?>

</div>
</body>
</html>