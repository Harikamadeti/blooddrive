<?php
session_start();
$db="blood";
$con=mysqli_connect("localhost","root","",$db);
$name1=$_REQUEST['uname'];
$pass1=$_REQUEST['psw'];
mysqli_select_db($con,$db);
$sql="select * from registration";
$result=mysqli_query($con,$sql);
$a=0;
while(($x=mysqli_fetch_array($result)))
{
	if(($x['pas']==$pass1) && ($x['name']==$name1))
	{
		$_SESSION['username']=$_REQUEST['uname'];
		$a=1;
	}
	
}
if($a==1)
{
	header("location:search.php");
}
else
{
	header("location:login1.php");
}
?>