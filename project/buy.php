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
		
		$name = $_POST['uname'];
		$phno = $_POST['phn'];
        $link = $_POST['link'];
        $giftcode = $_POST['code'];
        
        settype($giftcode,'integer');

		$qry2 = "INSERT INTO oders(username,phno,link,giftcode) VALUES('$name' , '$phno','$link','$giftcode')";
		$ins = mysqli_query($con , $qry2);
		if($ins){
			
        header("Location: gifts.html");

		
		}
		mysqli_close($con);
		?>
	</body>
</html>
