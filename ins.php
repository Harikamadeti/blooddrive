<?php
$db="blood";
$con=mysqli_connect("localhost","root","");
$name=$_REQUEST['name'];
$pas=$_REQUEST['psw'];
$em=$_REQUEST['email'];
$num=$_REQUEST['num'];
$dob=$_REQUEST['date'];
$gender=$_REQUEST['rad'];
$bg=$_REQUEST['grp'];
$rd1=$_REQUEST['rdate'];
mysqli_select_db($con,$db);
$sql1="INSERT INTO registration(name,pas,email,number,dob,gender,bg,rd) VALUES ('$name','$pas','$em','$num','$dob','$gender','$bg','$rd1')";
$result=mysqli_query($con,$sql1);
header("location:login1.php");
?>
