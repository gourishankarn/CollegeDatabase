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
        $query2="select ssn from student where ssn='$ssn'";
        if(mysqli_query($conn,$query2)){

          $query1="select m.c_id,m.isa2 from marks as m ,student as s,
					course as c where m.ssn='$ssn' and c.c_id=m.c_id and s.ssn=m.ssn and s.sem=c.sem";
          $res1=mysqli_query($conn,$query1);
					?>
					<table id="isa2">
						<th>
							<td>course id</td>
							<td>ISA1 Marks</td>
						</th>
					<?php
					while($row7=mysqli_fetch_array($res1))
					{
					?>
						<tr>
							<td><?php echo $row7[0]; ?></td>
							<td><?php echo $row7[1]; ?></td>
						</tr>
						<?php

					}
				?>
</body>
</html>
<?php
	}
}
?>
