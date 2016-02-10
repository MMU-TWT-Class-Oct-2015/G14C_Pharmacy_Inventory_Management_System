<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Monthly Sale</title>
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
  <form  method="post" >
  Date:
  <input type="text" name="month_D_F" maxlength="2" size="2">/
  <input type="text" name="year_D_F" maxlength="4" size="4">
  <input type="button" name="submit_D_F" value="Search" style="margin-right:70px;">

</body>
</html>
