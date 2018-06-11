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
        <button type="submit">submit</button>
      </form>
    </div>
    <?php
    //  $ssn=$_POST['ssn'];
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        $ssn=htmlspecialchars($_REQUEST['ussn']);
        $query="select s.ssn from student as s where s.ssn='$ssn'";
        if(mysqli_query($conn,$query))
        {
          session_start();
          $_SESSION['ssn']=$ssn;

          $query1="select a.ssn,a.c_id,a.attendence from attended a,student as s,department as d,
          course as c where s.ssn='$ssn' and a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and
          a.c_id=c.c_id";
          $res1=mysqli_query($conn,$query1);
          ?>
          <form method="post" action="updt_attds.php">

            <?php
          while($row1=mysqli_fetch_assoc($res1))
          {
            echo $row1['c_id'];
            ?>
            <input type="number" name="<?php echo $row1['c_id'];?>" >

            <?php
              echo "</br>";
          }
          ?>
          <button type="submit">button</button>
        </form>
        <?php
          }
        }
      }
     ?>
</body>
</html>
