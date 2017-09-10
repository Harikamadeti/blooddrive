<?php
$db="blood";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$db);
$bg1=$_REQUEST['search'];
$sql1="select * from registration";
$result=mysqli_query($con,$sql1);
$a=0;
echo "results for  ". $bg1." group</br>";
while(($x=mysqli_fetch_array($result)))
{
	if(($x['bg']==$bg1))
	{
		$a=1;
		echo "-----------------------</br>";
		echo "name:".$x['name']."</br>";
		echo "phone number:".$x['number']."</br>";
		echo "gender:".$x['gender']."</br>";
	}
}
if($a==0)
{
	echo "results not found";
}
?>
<html>
<body>
<form action="search.php" >
<input type="submit" value="back" >
</form>
</body>
</html>