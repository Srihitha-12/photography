
<html>
	<body>
	<?php

        header("Location: main.html");
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
		
		$occ = $_POST['occ'];
        $phno = $_POST['number'];
		$address = $_POST['address'];
        $strt = $_POST['sd'];
        $end = $_POST['ed'];
        $other = $_POST['other'];
      

		$qry2 = "INSERT INTO slots(Occasion,PhoneNo,Address,StartDate,EndDate,other) VALUES('$occ','$phno','$address','$strt','$end','$other')";
		$ins = mysqli_query($con , $qry2);
		if(!$ins)
		
		mysqli_close($con);
		?>
	</body>
</html>
