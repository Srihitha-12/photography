<html>
	<body>
	<?php
		$con = mysqli_connect('localhost','root','','mydb');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		$sel = mysqli_select_db($con , 'mydb');
		if(!$sel)
			echo " <br> Database not selected";
		
		mysqli_query($con ,"DELETE FROM orders WHERE giftcode='0'");
		echo "<br> Deleted User Data Successfully ";
		echo"<br> <a href='login.php'>Move to Home Page </a>";
		mysqli_close($con);
	?>
	</body>
</html>

