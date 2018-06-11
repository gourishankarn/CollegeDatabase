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

          $query1="select m.c_id,m.isa1 from marks as m,student s,course c
          where m.ssn='$ssn' and s.ssn=m.ssn and s.sem=c.sem
          and c.c_id=m.c_id;";
          $res1=mysqli_query($conn,$query1);
					while($row1=mysqli_fetch_array($res1)){
      	?>
          <h3><?php echo $row1[0]; echo " : ";echo $row1[1]; ?></h3>

					<?php
				}
				}
				?>
</body>
</html>
<?php
	}
?>
