<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User Item Refund</title>
    <link rel="stylesheet" type="text/css" href="stylingpage.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>
<!--
<p>Welcome,$user_name</p>
<br><br>
<input type="button" name="l_item" value="List Item">
<input type="button" name="S_item" value="Search Item">
<input type="button" name="logout" value="Logout" >
<br><br>-->


<body>
  <h3 class="skm">
  Pharmacy Inventory Management System
  </h3>
  <div id='cssmenu'>
    <ul>
       <li><a href="index_user.html"><span>Main Menu</span></a></li>
       <li><a href="Item_list.php"><span>Search Item</span></a></li>
       <li class='active'><a href="add_entry.html"><span>Item Refund</span></a></li>
       <li><a href="Home.php"><span>Log Out</span></a></li>
    </ul>
  </div>
  <div class="center">
    <br><br>
    
     <?php 
error_reporting(E_ALL);
session_start();
include "conn.php";

  if (isset($_POST['item_id']) && is_numeric($_POST['item_id']))
    {
    // get id value
    $id = $_POST['item_id'];

    // delete the entry
    $query = "DELETE FROM `sales` WHERE id_item =$id";
    
    $query2 = "UPDATE `item_pinms` SET `item_quantity` + 1 WHERE `item_id`=$id  ";
    
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);
    if($result){
    	echo "Item Updated";
    }
    else{  echo "Item Not Updated";
    }
    }
    mysqli_close($conn);
    ?>
  </div>
</body>
</html>
