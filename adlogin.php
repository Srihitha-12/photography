<html>
	<body>
	<?php
       
		$name=$_POST['uname'];
		$pwd=$_POST['pw'];
		$var=1;
		
       if(strcmp('Admin',$name)==0 && strcmp('password',$pwd)==0)
			{    
				$var=0;
				header("Location: adminmain.php");
				
			}
	
		if($var==1)
        {?><script>
		    confirm("enetr correct details");
            </script>
            <?php
			header("Location: admin.html");
		 }

	
		mysqli_close($con);
		?>
	</body>
</html>
