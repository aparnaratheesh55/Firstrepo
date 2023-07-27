<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php include 'header.php'; ?>
	<style>

		body
{
	background: url("two.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}
 h2
{
	font-size: 80px;
	color: pink;
	position: absolute;
	font-family: lucida calligraphy;
	left:58%; 
	top: -10%;
	
	


}
.loginbox
{
	
	position: absolute;
	top: 22%;
	left: 38%;
	width: 350px;
	height: 582px;
	box-sizing: border-box;
	background: rgba(0,0,0,.3);
	color: white;
	border:groove;
	border-color: maroon;
	border-radius: 50px;
    border-width:4px;

}
.user
{
	width: 98px;
	height: 98px;
	overflow: hidden;
	position: absolute;
	top:-50px;
	left: 35%;
	border-radius: 50%;
}
.loginbox h1
{
	float:center;
	font-size: 30px;
	text-align: center;
	padding:10px;
}
.textbox
{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
}
.textbox input
{
	border: none;
	outline: none;
	background:transparent;
	color: white;
	font-size: 18px;
	width: 300px;
	float: center;
	margin: 10px;
	border-bottom: 2px solid;



}
.btn
{
  border: none;
  outline: none;
  height: 40px;
  background: maroon;
  font-size: 16px;
  color: white;
	cursor: pointer;
	border-radius: 20px;
	width: 340px;

}

	</style>
</head>
<body>
	<form name="loginform" action="process_login.php" method="POST" autocomplete="off">
	<h2><i></i></h2>
	<div class="loginbox">
		<img src="logo.png" class="user">
		<br>
		<br>
		<h1>Login</h1>
		<div class="textbox">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter username" required="true">
		</div>
		<div class="textbox">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter password"required="true">
		</div>
		<?php
	if(isset($_GET['wrongpass']))
	{
		echo '<font color="yellow" size="4"font allign="center">INCORRECT PASSWORD.. </font>';
		echo '<br><br>';
	}
	if(isset($_GET['wronguser']))
	{
		echo '<font color="yellow" size="4"font allign="center">INCORRECT USERNAME.. </font>';
		echo '<br><br>';
	}
	?>
			<br>
			<input class="btn" type="submit" name="Sign in" value="Sign in" onclick=""><br>
			<br>
			<input class="btn" type="reset" name="cancel" value="cancel" onclick=""><br>
			<center><a href="newregistration.php">new user?Sign up</a></center>

	
	</div>
	</div>
</div>
</form>



</body>
</html>