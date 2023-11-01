<?php 
    require_once('../controller/sessionCheck.php');
?>
<html>
<head>
    <title>Profile</title>
</head>
<body>
<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?=$users['id']?></tr>
		<tr><td>NAME</td><td><?=$users['username']?></td></tr>	
		<tr><td>USER TYPE</td><td><?=$users['usertype']?></td></tr>
		<tr><td colspan="2" align="right"><a href="admin_home.php">Go Home</a></td></tr>
	</table>			
</center>
</body>
</html>