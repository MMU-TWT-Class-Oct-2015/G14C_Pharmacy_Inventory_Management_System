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
       <li><a href="add_entry.php"><span>Item Refund</span></a></li>
       <li><a href="Home.html"><span>Log Out</span></a></li>
    </ul>
  </div>
  <div class="center">
    <br><br>
    <p>Search Item</p>
    <div>
      <?php
      $connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
      mysql_select_db('pharmacy_inventory');

      echo "<table>"; // start a table tag in the HTML

      while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . $row['Item_Id'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Price'] . "</td><td>" . $row['Quantity'] . "</td><td>" . $row['Des'] . "</td></tr>";  //$row['index'] the index here is a field name
      }
      echo "</table>";
      mysql_close();
      ?>
    </div>
    <div>
      <p2>Please insert the item code</p2>
      <input type="text" name="Item_Id"> <input type="button" name="search" value="Search">
    </div>
  </div>
</body>
</html>
