<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Monthly Sales</title>
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
      <li class='active'><a href="V_M_sale.php"><span>Monthly Sales</span></a></li>
      <li><a href="V_F_month.php"><span>Top Selling Item</span></a></li>
      <li><a href="Update_Item.php"><span>Update Item</span></a></li>
      <li><a href="delete.php"><span>Delete Item</span></a></li>
      <li class='last'><a href="Home.html"><span>Log Out</span></a></li>
    </ul>
  </div>
<div class="center">
  <p1>View Monthly Sales</p1>
  <br>
  <input type="button" name="l_item" value="List Item">
  <input type="button" name="S_item" value="Search Item">
  <input type="button" name="logout" value="Logout" >
  <br><br>
  <form  method="post" >
  Date:
  <input type="text" name="month_D" maxlength="2" size="2"> /
  <input type="text" name="year_D" maxlength="4" size="4">
  <input type="button" name="submit_D_M" value="Search" style="margin-right:70px;">
</div>
</body>
</html>
