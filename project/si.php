<html>
	<body>
	<?php
       
		
		$mail=$_POST['email'];
		$pwd=$_POST['psw'];
		
		$con = mysqli_connect('localhost','root','','mydb');
		if(!$con)
		{
			die('Error in Connection'.mysqli_error());
		}
		$sel = mysqli_select_db($con , 'mydb');
		if(!$sel)
			echo " <br> Database not selected";
		$res = mysqli_query($con ,"SELECT * From registration");
		$var=1;
		
		while($row = mysqli_fetch_array($res))
		{
       if(strcmp($row['email'],$mail)==0 && strcmp($row['password'],$pwd)==0)
			{    
				$var=0;
				//header("Location: buy.html");
				echo"$row[username]";
				break;
			}
		}
		if($var==1){
			
			echo"dsuhvbk $row[username]";
			//header("Location: sign.html");
			
		}
        mysqli_close($con);
		?>
	</body>
</html>