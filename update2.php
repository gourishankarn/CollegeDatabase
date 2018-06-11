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

          $query1="select m.c_id,m.esa,cg.cgpa from marks as m,student s,course c,cgpa as cg
          where m.ssn='$ssn' and s.ssn=m.ssn and s.sem=c.sem and m.ssn=cg.ssn
          and c.c_id=m.c_id;";
          $res1=mysqli_query($conn,$query1);
					?>
					<table id="esa">

						<tr>
							<th>course id</th>
							<th>ESA Marks</th>

						</tr>
					<?php
					while($row1=mysqli_fetch_array($res1))
					{
					?>
						<tr>
							<td><?php echo $row1[0]; ?></td>
							<td><?php echo $row1[1]; ?></td>
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
