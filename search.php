<?php
	session_start();
	if (!isset($_SESSION['username'])) 
	{
		header('Location: login1.php');
	}
?>
<html>
<body>
<p>This is secured page with session: <b><?php echo $_SESSION['username']; ?></b>
<br>You can put your restricted information here.</p>
<div align="center">
<form action="s.php" method="post">
<input type="text" name="search" value="" placeholder="search" size="10">
<input type="submit" value="search">
<p><a href="logout.php">Logout</a></p>
</div></form></body>
</html>