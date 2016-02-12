<!doctype html>
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
  <div id='cssmenu'>
    <ul>
       <li><a href="index_user.html"><span>Main Menu</span></a></li>
       <li><a href="Item_list.php"><span>Search Item</span></a></li>
       <li class='active'><a href="add_entry.php"><span>Item Refund</span></a></li>
       <li><a href="Home.html"><span>Log Out</span></a></li>
    </ul>
  </div>
<br><br>
<p>Search Item</p>

<p2>Please insert the ID of the refunded item</p2><br><input type="text" name="Item_Id"><input type="button" name="search" value="Search">
<?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('pharmacy_inventory');


  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Quantity'] . "</td></tr>";  //$row['index'] the index here is a field name
  }
  echo "<input type="button" name="confirm" value="Confirm">";
mysql_close();
?>
</body>
</html>
