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
  <form   method="post" >
  Item ID:  <input type="text" name="I_id" maxlength="25" size="35"><br>
  Name: <input type="text" name="name_I" maxlength="25" size="35"><br>
  Quantity: <input type="text" name="add_Q" maxlength="25" size="35"><br>
  Price: <input type="text" name="add_Price" maxlength="25" size="35"><br>
  Description: <input type="textarea" name="create_Des" maxlength="25" size="35"><br>
  <input type="button" name="submit_i" value="Add" style="margin-right:70px;">
  <input type="reset" name="reset_i" value="Clear" style="margin-right:70px;">

  
</body>
</html>
