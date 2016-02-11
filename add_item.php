<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Item</title>
    <link rel="stylesheet" type="text/css" href="stylingpage.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
</head>

<body>
  <div id='cssmenu'>
    <ul>
       <li><a href="add_user.php"><span>Add User</span></a></li>
       <li class='active'><a href="add_item.php"><span>Add Item</span></a></li>
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
  <form   method="post" >
  Item ID:  <input type="text" name="Item_ID" maxlength="25" size="35"><br>
  Name: <input type="text" name="name" maxlength="25" size="35"><br>
  Quantity: <input type="text" name="Quantity" maxlength="25" size="35"><br>
  Price: <input type="text" name="Price" maxlength="25" size="35"><br>
  Description: <input type="textarea" name="Des" maxlength="25" size="35"><br>
  <input type="button" name="submit" value="Add" style="margin-right:70px;">
  <input type="reset" name="reset" value="Clear" style="margin-right:70px;">

  <?php
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 {
 // get form data, making sure it is valid
 $Item_ID = mysql_real_escape_string(htmlspecialchars($_POST['Item_ID']));
 $name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
 $Quantity = mysql_real_escape_string(htmlspecialchars($_POST['Quantity']));
 $Price = mysql_real_escape_string(htmlspecialchars($_POST['Price']));
 $Des = mysql_real_escape_string(htmlspecialchars($_POST['Des']));

 // check to make sure both fields are entered
 if ($Item_ID == '' || $name == ''|| $Quantity == '' || $Price == ''|| $Des == '' )

 {
 // save the data to the database
 mysql_query("INSERT pharmacy_inventory SET Item_ID='$Item_ID', name='$name', Quantity='$Quantity', Price='$Price', Des=' $Des'")
 or die(mysql_error());

 // once saved, redirect back to the view page
 header("Location: Detail_L_item.php");
 }
?>



</body>
</html>
