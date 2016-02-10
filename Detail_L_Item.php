<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UserPinms</title>
<?php
<p>Welcome,$user_name</p>
?><br><br>
<input type="button" name="l_item" value="List Item">
<input type="button" name="S_item" value="Search Item">
<input type="button" name="logout" value="Logout" >
<br><br>
</head>
<style type="text/css">
.size{width:480px;
height:450px;}
body{background-image:url('white-abstract-wave.jpg');
}
p{font-family: "Prototype";
font-size: 30px;}
h1{margin-top:150px;
font-family:"Prototype";
}
h3{font-family:"Prototype";
font-size:24px;}
form{
width:480px;
height:450px;}
input{margin-top:30px;}
</style>
<body>

<?php
$connection = mysql_connect('localhost', 'root', ''); //The Blank string is the password
mysql_select_db('pharmacy_inventory');


  while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
  echo "Name Item:<br>" . $row['Name'] . "<br>Quantity:<br>" . $row['Quantity'] . "<br>Price:<br>" . $row['Price'] . "<br>Description:<br>" . $row['Des'] ."<br>" ;  //$row['index'] the index here is a field name
  }
  echo "<input type="button" name="confirm" value="Sold">";

mysql_close();
?>
<input type="button" onclick="location.href='add_entry.php';" value="Back" />
</body>
</html>
