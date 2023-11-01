<?php 
    require_once('../controller/sessionCheck.php');
?>
<html>
<head>
    <title>View Users</title>
</head>

<body>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>USER TYPE</td>
		</tr>

	<?php   for($i=0; $i<count($users); $i++){ ?>
		<td><?=$users[$i]['id']?></td>
        <td><?=$users[$i]['username']?></td>
        <td><?=$users[$i]['Usertype']?></td>
		<tr>
	<?php } ?>

			<td colspan="3" align="right">
				<a href="usrhome.php">Go Home</a>
			</td>
		</tr>
	</table>			
</center>

</body>
</html>