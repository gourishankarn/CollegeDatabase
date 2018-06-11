<?php
	$servername="localhost";
	$username="root";
	$password="sagar@123";
	$conn=mysqli_connect($servername,$username,$password,"college");
	if(!$conn)
	{
		// echo "connection not established";
	}
	else
	{
		// echo "connection estsblished successfully";
		$fid=$_POST["fid"];
		$PASSWORD=$_POST["pwd"];
		$CPASSWORD=$_POST["cpwd"];
		if($PASSWORD!=$CPASSWORD)
		{
				// echo "entered passwords not matching";
				include "changefacpas.html";
				?>
				<html>
				<body>
					<script>
					alert("entered passwords not matching");
					</script>
				</body>
			</html>
			<?php

		}
		else
		{
		$query="UPDATE facult_paswd SET f_pswd='$PASSWORD' WHERE f_id='$fid'";
		$res=mysqli_query($conn,$query);

		if(!$res)
		{
			// echo "TRY NEXT TIME";
		}
		else
		{
				// echo "password successfully updated";
				include "index.html";
				?>
				<html>
				<body>
					<script>
					alert("password successfully changed ");
					</script>
				</body>
			</html>
			<?php

		}

	}
}
?>
