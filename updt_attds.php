<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{
    session_start();
    $ssn=$_SESSION['ssn'];
    $query1="select a.ssn,a.c_id,a.attendence from attended a,student as s,department as d,
    course as c where s.ssn='$ssn' and a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and
    a.c_id=c.c_id";
    $res1=mysqli_query($conn,$query1);
    while($row1=mysqli_fetch_assoc($res1))
    {   $at=$_POST[$row1['c_id']];
        $cid=$row1['c_id'];
        $qr="update attended set attendence='$at' where c_id='$cid'";
        $res7=(mysqli_query($conn,$qr));
      }
      if($res7){
          echo "successfully updated";

      }


 }
 ?>
