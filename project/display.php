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
		$res = mysqli_query($con ,"SELECT * From photograhers");
		echo "<center>";
		echo "<table border=2>";
		echo "<caption> Users Details </caption>";
		echo "<tr> <th> USER NAME </th> <th> PASSWORD </th> </tr> ";
		while($row = mysqli_fetch_array($res))
		{   $link=$row['link'];
			echo "<tr> <td>  <a href='$link' target='_blank'>";
			echo $row['link'];
			echo "</a></td>";
			echo " <td> ";
			echo $row['fisrtname'];
			echo "</td></tr>";
		}
		echo "</table>";
		echo "</ceneter>";
		echo"<br> <a href='login.php'>Move to Home Page </a>";
		mysqli_close($con);
		?>
	</body>
</html>
