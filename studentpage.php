<?php
?>
<html>
<head>
<style>
.sprt
{
	display:inline;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main-css.css">
<style>
body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color:red;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 17px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
#attend
		{
			display: none;

		}

#enr{

	  display:none;

    }
#lib{
		display:none;
	}
#isa1{
	display:none;
}
#isa2{
	display:none;
}
#esa1{
	display:none;
}
#esa2{
	display:none;
}
#esa3{
	display:none;
}
#esa{
	display:none;
}




.bt1{
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}


.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

#spt{
	display:none;

}
#assign{
	display:none;

}

#adr{
	display:none;

}
#elslib{
	display:none;

}
</style>

</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="#news"><?php echo $_POST["ssn"]; ?></a>
  <a href="#home" class="active" onclick="att()">Attendence</a>
  <a href="#news" onclick="sport()">sports</a>
  <a href="#contact" onclick="addr()">address</a>
  <div class="dropdown">
    <button class="dropbtn">Result
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" onclick="isa1()">ISA 1</a>
      <a href="#" onclick="isa2()">ISA 2</a>
      <a href="#" onclick="esa()">ESA</a>
      <a href="#about" onclick="assign()">Assignment</a>
    </div>
  </div>
  <a href="#about" onclick="enroll();">Enrolled subjects</a>
  <a href="#about" onclick="library();">Library info</a>



	<div class="dropdown">
    <button class="dropbtn" style="float:right;"><img src="images/logout.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logout.php">logout</a>
      <a href="changefacpas.html">change password</a>
    </div>

</div>

</div>





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
		//$ssn='01FB17ECS122';
	    $ssn=$_POST["ssn"];
		$query="select a.ssn,a.c_id,a.attendence from attended a,student as s,department as d,course as c
			where s.ssn='$ssn' and a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and a.c_id=c.c_id";
		$res=mysqli_query($conn,$query);
		$flag=0;
		?>
		<table id="attend">
				<tr>
					<th><?php echo $ssn; ?></th>

				</tr>
		<?php while($row=mysqli_fetch_array($res))
		{
			?>

				<tr>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
				</tr>

			<?php
		}


	?>
	<?php
	//$sqn='01FB16ECS016';
	$query2="select p.ssn from participate as p where p.ssn='$ssn'";
	$res2=mysqli_query($conn,$query2);
	if(mysqli_fetch_array($res2)){
		$query1="select sp.sports_name,sp.team_name,f.name from sports as sp,participate as p,faculty as f where p.ssn='$ssn' and
			p.sports_name=sp.sports_name and sp.coach_fid=f.f_id";
		$res1=mysqli_query($conn,$query1);
		echo"<div id=\"spt\">";
		while($row1=mysqli_fetch_array($res1))
		{
			echo "<div><h1 class = \"sprt\">sports : </h1><p class = \"sprt\">";
			echo $row1[0];
			echo "<br>";
			echo "</p><h1 class = \"sprt\">Team : </h1><p class = \"sprt\">";
			echo $row1[1];
			echo "<br>";
			echo "</p><h1 class = \"sprt\">Coach : </h1><p class = \"sprt\">";
			echo $row1[2];
			echo "</p></div><br><br>";
		}
		echo "</div>";
	}

	else{
			?>
			<div id="spt">
			<h2>You are not a participant of any sport!</h2>
			</div>
			<?php
		}
		$query3="select s.saddress from student as s where s.ssn='$ssn'";
		$res3=mysqli_query($conn,$query3);
		$row3=mysqli_fetch_array($res3);
		?>
		<div id="adr">
			<h2>Address:<?php echo $row3[0];?></h2>
		</div>

		<?php

		$query5="select e.c_id,c.c_name,e.enroll_date from enrolls as e,course as c,student as s where s.ssn='$ssn'
		and s.sem=c.sem and s.ssn=e.ssn and  c.c_id=e.c_id ";
		$res5=mysqli_query($conn,$query5);

		?>
		<table id="enr">
		 <tr>
			<td>course id</td>
			<td>course name </td>
			<td>enroll date</td>
		</tr>
		<?php
			while($row5=mysqli_fetch_array($res5))
			{
				?>
				<tr>
					<td><?php echo $row5[0]; ?></td>
					<td><?php echo $row5[1]; ?></td>
					<td><?php echo $row5[2]; ?></td>
					<?php
			}
			?>
		</table>
		<?php
		$query6="select k.book_name,s.book_id,s.borr_date,s.due_date from library as k,bk_issued_dtls as s ,
		student as p where p.ssn='$ssn' and  p.ssn=s.ssn and s.book_id=k.book_id";
		$res6=mysqli_query($conn,$query6);
		if($res6)
		{
			?>
			<table id="lib">
			<tr>
				<td>Book Name</td>
				<td>Book Id </td>
				<td>Borrowed Date</td>
				<td>Due Date</td>
			</tr>
			<?php

			while($row6=mysqli_fetch_array($res6))
			{
				?>
				<tr>
					<td><?php echo $row6[0]; ?></td>
					<td><?php echo $row6[1]; ?></td>
					<td><?php echo $row6[2]; ?></td>
					<td><?php echo $row6[3]; ?></td>
				</tr>
				<?php

			}
				?>
			</table>
			<?php
		}
		else {
				?>
				<h1 id="elslib">You have not borrowed any books</h1>
				<?php
			}
			$query7="select m.c_id,m.isa1 from marks as m ,student as s,course as c where m.ssn='$ssn' and c.c_id=m.c_id and s.ssn=m.ssn and s.sem=c.sem";
			$res7=mysqli_query($conn,$query7);
			?>
			<table id="isa1">
				<tr>
					<td>course id</td>
					<td>ISA1 Marks</td>
				</tr>
			<?php
			while($row7=mysqli_fetch_array($res7))
			{
			?>
				<tr>
					<td><?php echo $row7[0]; ?></td>
					<td><?php echo $row7[1]; ?></td>
				</tr>
				<?php

			}
			$query8="select m.c_id,m.isa2 from marks as m ,student as s,course as c where m.ssn='$ssn' and c.c_id=m.c_id and s.ssn=m.ssn and s.sem=c.sem";
			$res8=mysqli_query($conn,$query8);
			?>
			<table id="isa2">
				<tr>
					<td>course id</td>
					<td>ISA2 Marks</td>
				</tr>
			<?php
			while($row8=mysqli_fetch_array($res8))
			{
			?>
				<tr>
					<td><?php echo $row8[0]; ?></td>
					<td><?php echo $row8[1]; ?></td>
				</tr>
				<?php

			}

			$query9="select m.c_id,m.esa from marks as m ,student as s,course as c where m.ssn='$ssn' and c.c_id=m.c_id and s.ssn=m.ssn and s.sem=c.sem";
			$res9=mysqli_query($conn,$query9);
			$query11 = "SELECT cgpa FROM `cgpa` WHERE ssn = '$ssn';";
			$query12 = "SELECT sem,grade_points FROM `sgpa` WHERE ssn = '$ssn';";
			$res11 = mysqli_query($conn,$query11);
			$res12 = mysqli_query($conn,$query12);
			?>
			<div id ="esa">
			<table id = "esa1">
				<tr>

					<td>course id</td>
					<td>ESA Marks</td>
				</tr>
			<?php
			while($row9=mysqli_fetch_array($res9))
			{
			?>
				<tr>
					<td><?php echo $row9[0]; ?></td>
					<td><?php echo $row9[1]; ?></td>
				</tr>
				<?php
			}
			?>
		</table>
		<table id = "esa2">
			<tr>
			<td>Semester</td>
			<td>SGPA</td>
		</tr>
		<?php
			while ($row10=mysqli_fetch_array($res12))
			{
				?>
				<tr>
				<td><?php echo $row10[0];?></td>
				<td><?php echo $row10[1];?></td>
			</tr>
			<?php
			}
			?>
			</table>
			<?php
			$res15 = mysqli_fetch_array($res11);
			echo "<h1 id = \"esa3\">CGPA :".$res15[0]."</h1>";
			?>
			</div>
			<?php
				$query10="SELECT distinct a.c_id ,a.score,a.a_num,am.max_score from assignment as a,assignment_max as am
			 						,student as s,enrolls as e,course as c where s.ssn='$ssn'  and s.sem =c.sem and e.c_id =c.c_id
			  					and a.c_id=am.c_id and a.c_id=e.c_id and s.ssn=a.ssn";
				$res10=mysqli_query($conn,$query10);
				?>
				<table id="assign">
					<tr>
						<td>course Id</td>
						<td>score</td>
						<td>Ass Number</td>
						<td>Max score</td>
					</tr>
					<?php
					while($row10=mysqli_fetch_array($res10))
					{
						?>
						<tr>
							<td><?php echo $row10[0]; ?></td>
							<td><?php echo $row10[1]; ?></td>
							<td><?php echo $row10[2]; ?></td>
							<td><?php echo $row10[3]; ?></td>
						</tr>
						<?php
					}





	}
	?>
</body>
<script>
	function att()
	{
		var att = document.getElementById('attend');
		att.style.display='block';
		var st = document.getElementById('spt');
		st.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';

		var enr=document.getElementById('enr')
		enr.style.display='none';

		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var disp=document.getElementById('c001');
		body.removeElement('disp');

		var els=document.getElementById('elslib');

		if(els!=null){
		 els.style.display='none';}

		 var isa1=document.getElementById('isa1');
		isa1.style.display='none';
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';


	}
	function sport()
	{
		var st = document.getElementById('spt');
		st.style.display='block';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';

		var enr=document.getElementById('enr')
		enr.style.display='none';

		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');
		if(els!=null){
		 els.style.display='none';}

		 var isa1=document.getElementById('isa1');
		isa1.style.display='none';
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';


	}
	function addr()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='block';

		var enr=document.getElementById('enr')
		enr.style.display='none';

		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');

		if(els!=null){
		els.style.display='none';}

		var isa1=document.getElementById('isa1');
		isa1.style.display='none';
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';


	}
	function enroll()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';
		var enr=document.getElementById('enr')
		enr.style.display='block';

		var libr=document.getElementById('lib');

		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');

		if(els!=null){
		 els.style.display='none';}
		 var isa1=document.getElementById('isa1');
		isa1.style.display='none';
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';


	}
	function library()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';
		var enr=document.getElementById('enr');
		enr.style.display='none';
		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='block';}
		var els=document.getElementById('elslib');
		
		if(els!=null){
		 els.style.display='block';}
		var isa1=document.getElementById('isa1');
		isa1.style.display='none';
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';

	}
	function isa1()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';
		var enr=document.getElementById('enr');
		enr.style.display='none';
		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');
		if(els!=null){
		 els.style.display='none';}
		var isa1=document.getElementById('isa1');
		isa1.style.display='block';
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';
	}
	function isa2()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';
		var enr=document.getElementById('enr');
		enr.style.display='none';
		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');
		if(els!=null){
		 els.style.display='none';}
		var isa2=document.getElementById('isa2');
		isa2.style.display='block';
		var isa2=document.getElementById('isa1');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';

		var assign=document.getElementById('assign');
		assign.style.display='none';

	}
	function esa()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';
		var enr=document.getElementById('enr');
		enr.style.display='none';
		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');
		if(els!=null){
		 els.style.display='none';}
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='block';
		var esa=document.getElementById('esa2');
		esa.style.display='block';
		var esa=document.getElementById('esa3');
		esa.style.display='block';
		var assign=document.getElementById('assign');
		assign.style.display='none';
	}
	function assign()
	{
		var st = document.getElementById('spt');
		st.style.display='none';
		var att = document.getElementById('attend');
		att.style.display='none';
		var ad = document.getElementById('adr');
		ad.style.display='none';
		var enr=document.getElementById('enr');
		enr.style.display='none';
		var libr=document.getElementById('lib');
		if(libr!=null){libr.style.display='none';}
		var els=document.getElementById('elslib');
		if(els!=null){
		 els.style.display='none';}
		var isa2=document.getElementById('isa2');
		isa2.style.display='none';
		var esa=document.getElementById('esa1');
		esa.style.display='none';
		var esa=document.getElementById('esa2');
		esa.style.display='none';
		var esa=document.getElementById('esa3');
		esa.style.display='none';
		var assign=document.getElementById('assign');
		assign.style.display='block';
	}

</script>
</html>
