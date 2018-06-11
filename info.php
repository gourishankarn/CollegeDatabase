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
			$query="select *from student_dtls where ssn='$ssn'";
			$res=mysqli_query($conn,$query);
			$row=mysqli_fetch_array($res);
			?>
			<h4> SSN : <?php echo $row[0];?></h4>

      <h4>student name : <?php echo $row[1];?></h4>
      <h4>Gender : <?php echo $row[3];?></h4>
<h4>DOB : <?php echo $row[5];?></h4>
<h4>Section : <?php echo $row[6];?></h4>

<h4>Sem : <?php echo $row[7];?></h4>

<h4>Dept : <?php echo $row[8];?></h4>

<h4>Age : <?php echo $row[9];?></h4>
			<h4> Adress : <?php echo $row[2];?></h4>



      <h4> Ph number : <?php echo $row[4];?></h4>




</body>
</html>
<?php
	}
?>
