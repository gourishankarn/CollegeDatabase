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

          $query1="SELECT distinct a.c_id ,a.score,a.a_num,am.max_score from assignment as a,assignment_max as am
				 						,student as s,enrolls as e,course as c where s.ssn='$ssn'  and s.sem =c.sem and e.c_id =c.c_id
				  					and a.c_id=am.c_id and a.c_id=e.c_id and s.ssn=a.ssn";
          $res1=mysqli_query($conn,$query1);
					?>
					<table id="assign">
						<tr>
							<td>course Id</td>
							<td>score</td>
							<td>Assign Number</td>
							<td>Max score</td>
						</tr>
						<?php
						while($row1=mysqli_fetch_array($res1))
						{
							?>
							<tr>
								<td><?php echo $row1[0]; ?></td>
								<td><?php echo $row1[1]; ?></td>
								<td><?php echo $row1[2]; ?></td>
								<td><?php echo $row1[3]; ?></td>
							</tr>
							<?php
						}

				}
				?>
</body>
</html>
<?php
	}

?>
