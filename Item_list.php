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
<!--
<input type="button" name="l_item" value="List Item">
<input type="button" name="S_item" value="Search Item">
<input type="button" name="logout" value="Logout">
<br><br>-->

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
    <p>Search Item</p>
    <div>
 
      <table>
  <?php
error_reporting(E_ALL);
session_start();
include "conn.php";

$query = "SELECT *
FROM `item_pinms`";

$result = mysqli_query($conn, $query);
    
     while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
      print("<tr>");

      foreach($row as $key => $value)
        print("<td>$value</td>");

      print("</tr>");
    }
  ?>
  </table>
  <div>
  	   <form action = "Detail_L_Item.php" method="post" >
      <p>Please insert the item code</p>
      <input type="text" name="item_id"> 
      <input type="submit" name="search" value="Confirm">
    </form>
    


    </div>
    </div>
   
  </div>
</body>
</html>
