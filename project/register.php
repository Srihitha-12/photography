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
		{
			echo " <br> Database not selected";
		}
		
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $uname = $_POST['username'];
       $pwd = $_POST['password'];
       $mail = $_POST['email'];
       $phno = $_POST['number'];
       $gender = $_POST['gender'];


		$qry2 = "INSERT INTO users(firstname,lastname,username,password,phno,gender) VALUES('$fname','$lname','$uname','$pwd','$phno','$gender')";
		$ins = mysqli_query($con , $qry2);
		header("Location: login.html");

		
		mysqli_close($con);
		?>
	</body>
</html>

