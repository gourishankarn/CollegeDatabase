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
		$ssn=$_POST["ssn"];
		$PASSWORD=$_POST["pwd"];
		$CPASSWORD=$_POST["cpwd"];
		if($PASSWORD!=$CPASSWORD)
		{
				// echo "entered passwords not matching";
				include "forgotstud.html";
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
		$query="UPDATE std_pswd SET pswd='$PASSWORD' WHERE ssn='$ssn'";
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
					alert("password successfully updated");
					</script>
				</body>
			</html>
			<?php

		}

	}
}
?>
