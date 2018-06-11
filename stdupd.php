<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{

		?>
  <html>
  <body>
    <div>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Enter ssn:<input type="text" name="ussn" placeholder="Student USN"></br>
        Name:<input type="text" name="name" placeholder="Name"></br>
        Address:<input type="text" name="addr" placeholder="Address"></br>
        Phone:<input type="text" name="ph" placeholder="eg.7019936415"></br>
        <button type="submit">submit</button>
      </form>
    </div>
    <?php
    //  $ssn=$_POST['ssn'];
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        $ssn=htmlspecialchars($_REQUEST["ussn"]);
        $m1=htmlspecialchars($_REQUEST["name"]);
        $m2=htmlspecialchars($_REQUEST["addr"]);
        $m3=htmlspecialchars($_REQUEST["ph"]);
        settype($m3,'int');
        //$me=array($m1,$m2,$m3);
        $query="select s.ssn from student as s where s.ssn='$ssn'";
        if(mysqli_query($conn,$query))
        {
            $sql="UPDATE student set sname='$m1',saddress='$m2',ph_no='$m3' where ssn='$ssn'";
            if(mysqli_query($conn,$sql))
            {
              echo "record updated";

            }
      }
     ?>
</body>
</html>
<?php
}
}
?>
