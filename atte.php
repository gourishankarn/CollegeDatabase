<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{
		$ssn=$_POST['ssn'];
		?>
<html>
	<body>
      <?php
			$query="select a.ssn,a.c_id,a.attendence from attended a,student as s,department as d,course as c
				where s.ssn='$ssn' and a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and a.c_id=c.c_id";
			$res=mysqli_query($conn,$query);
			$flag=0;
			?>
			<table id="attend">
					<tr>
						<th><?php echo $ssn; ?></th>

					</tr>
			<?php
			 while($row=mysqli_fetch_array($res))
			{
				?>

					<tr>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
					</tr>

					<?php
			}

				?>
</body>
</html>
<?php
	}
?>
