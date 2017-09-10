<?php
	session_start();
	if (isset($_SESSION['username'])) 
	{
		header('Location: securedpage.php');
	}
?>
<!DOCTYPE html>
<html>
<style>
form {
    border: 1px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 600px;
    padding: 12px 12px;
    margin: 8px 5px;
    
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #ff0000;
    color: white;
    padding: 20px 25px 20px 15px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 35%;	
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.pic {
    width: 10%;
    border-radius: 15%;
}

.container {
    padding: 10px;
}

span.psw {
    float: right;
    
}
a.nounderline{	
	text-decoration:none;	
		}
a:hover{
	color:red;}
</style>
<body>
<div align="center">

<h1>Login Form</h1></div>


<form action="auth.php" method="post" name="log">
	  <div class="imgcontainer">
    <img src="blood.png" alt="Avatar" class="pic" height="85" width="50">
  </div>

  <div class="container"><div align="center">
    <label><b>Username</b></label></br>
    <input type="text" placeholder="Enter Username"  name="uname" required></br>

    <label><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="psw" required></br>
        
    <button type="submit" >Login</button></br></br>
    <input type="checkbox" checked="checked"> Remember me</div>
  </div>


  <div class="container" style="background-color:#f1f1f1" align="left">
    <button type="button" class="cancelbtn" onclick="location.href='all.php'">Cancel</button>
    <span class="psw"><a href="#" class="nounderline">Forgot password?</a></span>
  </div>
</form>
</body>
</html>