<!doctype html>
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
  <div id='cssmenu'>
    <ul>
       <li class='active'><a href="add_user.php"><span>Add User</span></a></li>
       <li><a href="add_item.php"><span>Add Item</span></a></li>
       <li><a href="V_D_sale.php"><span>Daily Sales</span></a></li>
       <li><a href="V_M_sale.php"><span>Monthly Sales</span></a></li>
       <li><a href="V_F_month.php"><span>Top Selling Item</span></a></li>
       <li><a href="Update_Item.php"><span>Update Item</span></a></li>
       <li class='last'><a href="delete.php"><span>Delete Item</span></a></li>
    </ul>
  </div>
  <br><br>
  <input type="button" name="l_item" value="List Item">
  <input type="button" name="S_item" value="Search Item">
  <input type="button" name="logout" value="Logout" >
  <br><br>
  <form  action="add_U_P.php" method="post" >
  Staff ID:  <input type="text" name="sid" maxlength="25" size="35"><br>
  Name: <input type="text" name="name_u" maxlength="25" size="35"><br>
  Password: <input type="password" name="pass_create" maxlength="25" size="35"><br>
  <input type="button" name="submit" value="Create" style="margin-right:70px;">
  <input type="reset" name="reset" value="Clear" style="margin-right:70px;">
</body>
</html>
