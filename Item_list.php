<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pinms List Item</title>
<?php
<h1>Item List</h1>
?>
<input type="button" name="l_item" value="List Item">
<input type="button" name="S_item" value="Search Item">
<input type="button" name="logout" value="Logout">
<br><br>
</head>
<style type="text/css">
body{background-image:url('white-abstract-wave.jpg');
}
p{font-family: "Prototype";}
h1{margin-top:150px;
font-family:"Prototype";}
h3{font-family:"Prototype";
font-size:24px;}
form{
width:480px;
height:450px;}
input{margin-top:30px;}
</style>
<body><div>
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
<input type="text" name="Item_Id"> <input type="button" name="search" value="search">
</div>
</body>
</html>
