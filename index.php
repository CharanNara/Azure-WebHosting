<?php
$err = "";
if(isset($_POST['log'])){
	if($_POST['usr'] == 'admin' and $_POST['pass'] == 'admin'){
		header('Location: welcome.php');
	}
	else{
		$err = "Incorrect credentials";
	}
	
}
?>
<html>
<head>
<title>Basic Web App</title>
<style>
input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=password]:focus {
  border: 3px solid #555;
}
input[type=text]:focus {
  border: 3px solid #555;
}
body{
	background-image: url('admin.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%
}
.btn{
	background-color: MediumSeaGreen;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.btn:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>
<br></br><br></br><br></br><br></br><br></br><br></br>
<h1 style="text-align:center;color:powderblue;font-family:verdana">Admin Service Login</h1>
<center>
<form action="" method = "POST">
<input type="text" placeholder = "Enter username" name="usr"/><br><br>
<input type = "password" placeholder = "Enter password" name="pass"/><br><br>
<input type = "submit" class="btn" value="Login" name="log"/><br></br>
<label style= "color:tomato;font-family:verdana"><?php echo $err;?></label>
</form>
</center>
</body>
</html>
