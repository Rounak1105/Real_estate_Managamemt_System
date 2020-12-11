<?php
// Start Session
session_start();
require_once "config.php";
if(isset($_SESSION['book']) && $_SESSION['book']>0)
{
  echo "<script>alert('Property has been booked successfully')</script>";

$_SESSION['book']=0;
}
$id=$_SESSION["id"];
$c="Select * from agent_client where pan='$id'";
$resul=$conn->query($c);
if($resul->num_rows>0)
            {
            	while($row=$resul->fetch_assoc())
              {
              	$c=$row["aid"];
              }
				$sql="Select * from medium";
			}
			else
			{
				$c="-";
				$sql="Select * from small";
			}
$result=$conn->query($sql);
			if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
              	$a=$row["rid"];
              	if(isset($_POST["$a"]))
              	{
              		
              		$d=$row["cost"];
              		$w="Select * from prop_work where rid='$a'";
				      $res=$conn->query($w);
				      $wo=array();
				      if($res->num_rows>0){
				      while ($r=$res->fetch_assoc()) {
				        array_push($wo, $r["wid"]);
				      }}
				      $wor=implode(",", $wo);
              		$l="Insert into log(rid,aid,pan,wid,cost) values('$a','$c','$id','$wor','$d')";
              		if($conn->query($l) === TRUE)
              		{
              			$book="Delete from large where rid='$a'";
              			if($conn->query($book) === TRUE)
              			{
              				$_SESSION["book"]=1;
              				header("Location:client.php");
              			}
              		}
              	}
              }
             }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>VM ASSOCIATES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style type="text/css">
div.static1 {
  background-color: #FFFFFF;
 
  width: 1400px;
  height: 20px;
  position: static;
  border: 1px solid  #FFFFFF;
}
ul {
  list-style-type: none;
  margin: 0;
 
  height:60px;
  padding: 0;
  overflow: hidden;
  background-color: #003300;
}

li {
  float: left;
}

li a {
  display: block;
  color: #FF3366  ;
  text-align: center;
  padding: 14px 16px;

  
}
body{
  background-color:white; 
}

li a:hover {
  background-color: #002200;
}


img {

  padding: 3px;
  bottom:20px;
  width: 180px;
  height:70px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
body {
  font-family: Calibri;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {

  padding: 10px;
  font-size: 17px;
  border: 0px solid grey;
  float: left;
  width: 83%;
  background:#E8E8E8;
  border-top-left-radius:30px;
  border-bottom-left-radius:30px;
  color:black;
}

form.example button {
  float: left;
  width: 47px;
  height: 45px;
  padding: 10px;
  color: #E8E8E8;
  font-size: 17px;
  border: 0px solid grey;
  border-left: none;
  cursor: pointer;
    border-top-right-radius:30px;
  border-bottom-right-radius:30px;

}

form.example button:hover {
  background: black;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
#last{
border-bottom-width: 1px;
border-bottom-style: solid;
border-color: #E0E0E0;
padding-bottom: 60px;
bottom:100px;
margin-left:20px;
}

*{
 margin: 0px;
 padding: 0px;
}
body{
 font-family: arial;
}
.main{

 margin: 2%;
}

.card{
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }


    

.image img{
  width: 100%;
  height: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }

h1{
  font-size: 20px;
 }

.des{
  padding: 3px;
  text-align: center;
 
  padding-top: 10px;
        border-bottom-right-radius: 5px;
  border-bottom-left-radius: 5px;
}
button{
  margin-top: 10px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: black;
  color: white;
  transition: .5s;
  cursor: pointer;
}

</style>
<script>
function myFunction() {
  var x = document.getElementById("opt");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function onload(){
  var x = document.getElementById("opt");
  x.style.display="none";
}
</script>
<body onload="onload()">
<ul>
     
<li style="float:center"><a href=""><h1><font color="  #ffffff"><font face="Montserrat|Open+Sans">VM Associates</font></h1></a></li>

   <li style="float:right"><a href="contactus.php"><h2><font color=" #ffffff">Contact Us</font></h2></a></li>
    
      <li style="float:right"><a href="client_login.php"><h2><font color="  #ffffff">Client</font></h2></a></li>
      <li style="float:right"><a href="agent_login.php"><h2><font color=" #ffffff">Agent</font></h2></a></li>
      <li style="float:right"><a href="comp_login.php"><font color="  #ffffff"><h2>Company</h2></font></a></li>
   <li style="float:right"><a class="active" href="home.php"><h2><font color=" #ffffff">Home</font></h2></a></li>




   <h3 id="last"></h3>
</ul>
<br><br>
<form method="post">
	<font color="black">
		<h2>
	&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<button type="button" onclick="myFunction()">Filters</button>
    </h2>

    </center>
    <div class="static" id="opt">
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    
    <input class="label-input100" type="radio" name="ptype" value="Residential"><font color="black" size="3px"> Residential
	<input class="label-input100" type="radio" name="ptype" value="Commercial"><font color="black" size="3px"> Commercial
		<button name="sub"><b>Apply Filter</b></button>
		<button name="rsub"><b>Remove Filter</b></button>
	</div>
<div class="main">

 <!--cards -->
<?php
$id=$_SESSION["id"];
$c="Select * from agent_client where pan='$id'";
$resul=$conn->query($c);
if($resul->num_rows>0)
            {
				$sql="Select * from medium";
				if(isset($_POST["sub"]))
				{
					$type=$_POST["ptype"];
					$sql="Select * from medium where type='$type'";
				}
			}
			else
			{
				$sql="Select * from small";
				if(isset($_POST["sub"]))
				{
					$type=$_POST["ptype"];
					$sql="Select * from small where type='$type'";
				}
			}
$result=$conn->query($sql);
$count=0;
if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
              	$a=$row["rid"];
              	$b=array();
              	$sq="Select * from image where rid='$a'";
              	$resul=$conn->query($sq);
              	if($resul->num_rows>0)
           		{
	              while($ro=$resul->fetch_assoc())
	              {
	              	array_push($b, $ro["img"]);
	              }
	          }
?>
<div class="card">

<div class="image" style="height: 165px">
	<div id="<?php echo $count;?>" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#<?php echo $count;?>" data-slide-to="0" class="active"></li>
    <li data-target="#<?php echo $count;?>" data-slide-to="1"></li>
    <li data-target="#<?php echo $count;?>" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img style="height: 180px; width:300px;" src="data:image/jpg;base64,<?php echo base64_encode($b[0]);?>">
    </div>
    <div class="carousel-item">
      <img style="height: 180px; width:300px;" src="data:image/jpg;base64,<?php echo base64_encode($b[1]);?>">
    </div>
    <div class="carousel-item">
      <img style="height: 180px; width:300px;" src="data:image/jpg;base64,<?php echo base64_encode($b[2]);?>">
    </div>
  </div>
  <a class="carousel-control-prev" href="#<?php echo $count;?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#<?php echo $count;?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   
</div>
<div class="title">
	<br>
 <h1><b><font color="  #003300">
Rera-ID:<?php echo $row["rid"]; ?></b>
</h1>
<h4>
Address:<?php echo $row["addr"]; ?><br>
Total Area:<?php echo $row["tot"]; ?><br>
Carpet Area:<?php echo $row["carp"]; ?><br>
Type:<?php echo $row["type"]; ?><br>
Description:<?php echo $row["desr"]; ?><br>
</h4>
<h2>
	Cost:<?php echo $row["cost"]." Crore"; ?><br>
</h2>
<button name="<?php echo $row["rid"]; ?>"><h2><b>Book</b></h2></button>
</div>
</div>
<!--cards -->

<?php
$count++;
}
}
?>
</div>
</form>
</body>
</html>