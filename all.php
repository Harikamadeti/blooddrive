<?php
	session_start();
	if (isset($_SESSION['username'])) 
	{
		header('Location: search.php');
	}
?>
<html>
<head>
	<frameset border="0" rows ="25%,*,25%">
		<frameset cols="50%,50%,50%">
			<frame src="one.html">
			<frame src="two.html" >
			<frame src="three.html" scrolling="no">
		</frameset>	
		<frame src="four.html" scrolling="no">
		<frameset cols="50%,50%,50%" >
			<frame src="five.html" >
			<frame src="six.html" >			
			<frame src="seven.html" scrolling="no">
		</frameset>
	</frameset>
</head>
<body>
</body>
</html>