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
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main-css.css">
<link rel="stylesheet" href="facultypage.css">

</head>
<body>
<?php $aid=$_POST['aid'];?>
<div class="topnav" id="myTopnav">
  <a href="#news"><?php echo $aid ; ?></a>
</div>
  <!--<div class="dropdown">
    <button class="dropbtn">attendence
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" onclick="atte()">display</a>

      <a href="attupd.php">update</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">info of student
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" onclick="info()">display</a>

      <a href="stdupd.php">update</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Result
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" onclick="disp()">ISA 1</a>
      <a href="#" onclick="disp1()">ISA 2</a>
      <a href="#" onclick="disp2()">ESA</a>
      <a href="#about" onclick="disp3()">Assignment</a>
      <a href="#about">update</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn" style="float:right;"><img src="images/logout.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logout.php">logout</a>
     
    </div>
  </div>
</div>
	<div id="isa_1">

			<form method="POST" action="update.php">
			Enter ssn : <input type="text" name="ssn" placeholder="student ssn">
						<button type="submit">submit</button>
			</form>

	</div>
  <div id="atte">

			<form method="POST" action="atte.php">
			Enter ssn : <input type="text" name="ssn" placeholder="student ssn">
						<button type="submit">submit</button>
			</form>

	</div>
  <div id="info">

			<form method="POST" action="info.php">
			Enter ssn : <input type="text" name="ssn" placeholder="student ssn">
						<button type="submit">submit</button>
			</form>

	</div>


	<div id="isa_2">

			<form method="POST" action="update1.php">
			Enter ssn : <input type="text" name="ssn" placeholder="01FB16ECS153">
						<button type="submit">submit</button>
			</form>

	</div>
	<div id="esa">

			<form method="POST" action="update2.php">
			Enter ssn : <input type="text" name="ssn" placeholder="01FB16ECS153">
						<button type="submit">submit</button>
			</form>

	</div>
	<div id="assgn">

			<form method="POST" action="update3.php">
			Enter ssn : <input type="text" name="ssn" placeholder="01FB16ECS153">
						<button type="submit">submit</button>
            </form>
            

	</div>-->




	<script>
	 function disp()
   {
		   var isa1=document.getElementById('isa_1');
		     isa1.style.display='block';
       var inf=document.getElementById('info');
   		    if(inf!=null){inf.style.display='none'; }
        var att=document.getElementById('atte');
          if(att!=null){att.style.display='none';}
        var isa2=document.getElementById('isa_2');
          if(isa2!=null){isa2.style.display='none'; }
        var esa=document.getElementById('esa');
          if(esa!=null){esa.style.display='none'; }
          var asn=document.getElementById('assgn');
          if(asn!=null){asn.style.display='none';};
	 }
   function atte()
   {
      var att=document.getElementById('atte');
        att.style.display='block';
        var isa1=document.getElementById('isa_1');
 		     if(isa1!=null){isa1.style.display='none'; }
        var inf=document.getElementById('info');
  		    if(inf!=null){inf.style.display='none'; }
          var isa2=document.getElementById('isa_2');
            if(isa2!=null){isa1.style.display='none'; }
          var esa=document.getElementById('esa');
            if(esa!=null){esa.style.display='none'; }
            var asn=document.getElementById('assgn');
            if(asn!=null){asn.style.display='none';};
  }
  function info()
  {
      var inf=document.getElementById('info');
        inf.style.display='block';
        var isa1=document.getElementById('isa_1');
 		     if(isa1!=null){isa1.style.display='none'; }
        var att=document.getElementById('atte');
          if(att!=null){att.style.display='none';}
          var isa2=document.getElementById('isa_2');
            if(isa2!=null){isa1.style.display='none'; }
          var esa=document.getElementById('esa');
            if(esa!=null){esa.style.display='none'; }
            var asn=document.getElementById('assgn');
            if(asn!=null){asn.style.display='none';};
  }
  function disp2()
  {
      var esa=document.getElementById('esa');
        esa.style.display='block';
        var isa1=document.getElementById('isa_1');
          isa1.style.display='none';
          var isa2=document.getElementById('isa_2');
            isa2.style.display='none';
              var asn=document.getElementById('assgn');
              asn.style.display='none';
              var inf=document.getElementById('info');
                 if(inf!=null){inf.style.display='none'; }
               var att=document.getElementById('atte');
                 if(att!=null){att.style.display='none';}
  }
  function disp3()
  {
      var asn=document.getElementById('assgn');
        asn.style.display='block';
        var isa1=document.getElementById('isa_1');
          isa1.style.display='none';
          var isa2=document.getElementById('isa_2');
            isa2.style.display='none';
            var esa=document.getElementById('esa');
              esa.style.display='none';
              var inf=document.getElementById('info');
                 if(inf!=null){inf.style.display='none'; }
               var att=document.getElementById('atte');
                 if(att!=null){att.style.display='none';}

  }
  function disp1()
  {
      var isa2=document.getElementById('isa_2');
        isa2.style.display='block';
        var isa1=document.getElementById('isa_1');
         isa1.style.display='none';
           var esa=document.getElementById('esa');
             esa.style.display='none';
             var asn=document.getElementById('assgn');
             asn.style.display='none';
             var inf=document.getElementById('info');
         		    if(inf!=null){inf.style.display='none'; }
              var att=document.getElementById('atte');
                if(att!=null){att.style.display='none';}
  }

	</script>
</body>
</html>
<?php
	}
?>
