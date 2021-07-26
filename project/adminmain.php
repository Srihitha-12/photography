<html style="background-color:black;">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="aph.css">
</head>
	<body> 
    <div class="header">
    <p>
     <b><i><u class="catch" style="font-size: 30px; ">CATCH ON CAM</u></i></b>
     <img src="cam.jpg" alt="Cam" width="40" height="30"style="margin-left:20px;">
	 <a  href="login.html"><button type="button" class="btn btn-outline-secondary" style="float:right; margin:5px;color:black;"><b>Logout</b></button> </a>
	 
	 <a  href="#ph"><button type="button" class="btn " style="float:right; margin:5px;color:black;"><b>Photograhers</b></button> </a>
		 <a  href="#slots"><button type="button" class="btn "   style="float:right;margin:5px; color:black;"><b>Slots</b></button>  </a>
	   
      <a  href="#oders"> <button type="button" class="btn "  style="float:right;margin:5px;color:black;"><b>Orders</b></button></a>
	  <a  href="#users"><button type="button" class="btn " style="float:right; margin:5px;color:black;"><b>Users</b></button> </a>

   </p>
</div>
     <form>
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
        echo "<h2>Photograhers</h2>";
		echo "<center>";
		echo "<div id='ph'><table border=2 class='table table-hover table-light'>";
	
		echo "<tr> <th> Firstname</th> <th> Lastname </th><th>Phone number</th><th>link</th><th>email</th><th>gender</th></tr> ";
		while($row = mysqli_fetch_array($res))
		{
            $var=$row['link'];
			echo "<tr> <td> ";
			echo $row['firstname'];
			echo "</td>";
			echo " <td> ";
			echo $row['lastname'];
			echo "</td><td>";
            echo $row['phonenumber'];
            echo "</td><td><a href='$var' target='blank'>";
            echo $row['link'];
            echo "</a></td><td>";
            echo $row['email'];
            echo "</td><td>";
            echo $row['gender'];
            echo "</td></tr>";
        }
		echo "</table></div>";
		echo "</ceneter>";
        $res = mysqli_query($con ,"SELECT * From slots");
        echo "<h2>Slots</h2>";
		echo "<center>";
		echo "<div id='slots'><table border=2 class='table table-hover table-light'>";
		echo "<tr> <th>Occasion </th> <th> other </th><th>Phone number</th><th>Address</th><th>StartDate</th><th>StartDate</th></tr> ";
		while($row = mysqli_fetch_array($res))
		{
            
			echo "<tr> <td> ";
			echo $row['Occasion'];
			echo "</td>";
			echo " <td> ";
			echo $row['other'];
			echo "</td><td>";
            echo $row['PhoneNo'];
            echo "</td><td>";
            echo $row['Address'];
            echo "</td><td>";
            echo $row['StartDate'];
            echo "</td><td>";
            echo $row['EndDate'];
            echo "</td></tr>";
        }
		echo "</table></div>";
		echo "</ceneter>";
        $res = mysqli_query($con ,"SELECT * From oders");
        echo "<h2>Orders</h2>";
		echo "<center>";
		echo "<div id='oders'><table border=2 class='table table-hover table-light' >";
	
		echo "<tr> <th>Username</th> <th>Phone number</th><th>Photo Link</th><th>gift code</th></tr> ";
		while($row = mysqli_fetch_array($res))
		{
            $var=$row['link'];
			echo "<tr> <td> ";
			echo $row['username'];
			echo "</td>";
			echo " <td> ";
			echo $row['phno'];
            echo "</td><td><a href='$var' target='blank'>";
            echo $row['link'];
            echo "</a></td><td>";
            echo $row['giftcode'];
            echo "</td></tr>";
        }
		echo "</table></div>";
		echo "</ceneter>";  
        $res = mysqli_query($con ,"SELECT * From users");
        echo "<h2>Photgraphers</h2>";
		echo "<center>";
		echo "<div id='users'><table border=2 class='table table-hover table-light' >";
	
		echo "<tr> <th> Firstname</th> <th> Lastname </th><th>User name</th><th>Password</th><th>Phone number</th><th>gender</th></tr> ";
		while($row = mysqli_fetch_array($res))
		{
           
			echo "<tr> <td> ";
			echo $row['firstname'];
			echo "</td>";
			echo " <td> ";
			echo $row['lastname'];
			echo "</td><td>";
            echo $row['username'];
            echo "</td><td><a href='$var' target='blank'>";
            echo $row['password'];
            echo "</a></td><td>";
            echo $row['phno'];
            echo "</td><td>";
            echo $row['gender'];
            echo "</td></tr>";
        }
		echo "</table></div>";
		echo "</ceneter>";

        
		mysqli_close($con);
		?>
	</body>
</html>
