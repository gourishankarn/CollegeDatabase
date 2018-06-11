

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
		$fid=$_POST["aid"];
		$password=$_POST["pwd"];

		$query="SELECT a_id,a_pswd FROM admin  ";
		$res=mysqli_query($conn,$query);
		$flag=0;
		while($row=mysqli_fetch_assoc($res))
		{
			if($row['a_id']==$fid and $row['a_pswd']==$password)
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			//echo "<br>";

			//echo "successfully loged in";
			include "admin.php";
			?>
			<html>
			<body>
				<script>
				alert("successfully Logged In");
				</script>
			</body>
		</html>
		<?php
		}
		else
		{
			//echo "Enter valid credentials";
			?>
			<html>
			<body>
				<script>
				alert("Enter valid credentials");
				</script>
			</body>
		</html>
		<?php
			include "index.html";
		}
	}
?>
