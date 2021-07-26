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
        $link = $_POST['link'];
		
        $mail = $_POST['email'];
        $phno = $_POST['number'];
        $gender = $_POST['gender'];
        settype($giftcode,'integer');

		$qry2 = "INSERT INTO photograhers(firstname,lastname,phonenumber,link,email,gender) VALUES('$fname','$lname','$phno','$link','$mail','$gender')";
		$ins = mysqli_query($con , $qry2);
		echo "<br> User $link data inserted successfully";
           
		
		mysqli_close($con);
		?>
	</body>
</html>
