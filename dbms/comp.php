<?php
session_start();
require_once "config.php";
if(isset($_SESSION['prop']) && $_SESSION['prop']>0)
{
  echo "<script>alert('Property Details has been registered successfully')</script>";

$_SESSION['prop']=0;
}
if(isset($_SESSION['del']) && $_SESSION['del']>0)
{
  echo "<script>alert('Property Details has been deleted successfully')</script>";

$_SESSION['del']=0;
}
if(isset($_SESSION['rid']))
{
  $rid=$_SESSION['rid'];
}
else
{
  $rid="";
}
if(isset($_SESSION['addr']))
{
  $addr=$_SESSION['addr'];
}
else
{
  $addr="";
}
if(isset($_SESSION['tot']))
{
  $tot=$_SESSION['tot'];
}
else
{
  $tot="";
}
if(isset($_SESSION['carp']))
{
  $carp=$_SESSION['carp'];
}
else
{
  $carp="";
}
if(isset($_SESSION['desr']))
{
  $desr=$_SESSION['desr'];
}
else
{
  $desr="";
}
if(isset($_SESSION['cost']))
{
  $cost=$_SESSION['cost'];
}
else
{
  $cost="";
}
if(isset($_SESSION['wor']))
{
  $work=$_SESSION['wor'];
}
else
{
  $work="";
}
if(isset($_FILES['image']) && isset($_POST['upload'])){
    $rid=$_POST["rid"];
    $addr=$_POST["addr"];
    $tot=$_POST["tot"];
    $carp=$_POST["carp"];
    $desr=$_POST["desr"];
    $cost=$_POST["cost"];
    $type=$_POST["type"];
    $work=$_POST["work"];
    $file_tmp_name =$_FILES['image']['tmp_name'];
    $str = addslashes(file_get_contents($file_tmp_name));
    $sql="Insert into property(rid, addr, tot, carp, desr, type,cost) values('$rid', '$addr', '$tot', '$carp', '$desr', '$type','$cost')";
  if ($conn->query($sql) === TRUE) {
    $sql = "INSERT INTO image(img,rid) 
                VALUES('$str','$rid')";
            if ($conn->query($sql) === TRUE) {
              $_SESSION['rid']=$rid;
              $_SESSION['addr']=$addr;
              $_SESSION['tot']=$tot;
              $_SESSION['carp']=$carp;
              $_SESSION['desr']=$desr;
              $_SESSION['cost']=$cost;
              $_SESSION['wor']=$work;
              $_SESSION["start"]=0;

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      else
      {
        $sql = "INSERT INTO image(img,rid) 
                VALUES('$str','$rid')";
            if ($conn->query($sql) === TRUE) {
              $_SESSION['rid']=$rid;
              $_SESSION['addr']=$addr;
              $_SESSION['tot']=$tot;
              $_SESSION['carp']=$carp;
              $_SESSION['desr']=$desr;
              $_SESSION['cost']=$cost;
              $_SESSION['wor']=$work;
              $_SESSION["start"]=0;

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
}
if(isset($_POST["reg_prop"]))
{
  $rid=$_POST["rid"];
  $addr=$_POST["addr"];
  $tot=$_POST["tot"];
  $carp=$_POST["carp"];
  $desr=$_POST["desr"];
  $cost=$_POST["cost"];
  $type=$_POST["type"];
  $work=$_POST["work"];
  $sql="Update property set addr='$addr', tot='$tot', carp='$carp', desr='$desr', type='$type',cost='$cost' where rid='$rid'";
  if ($conn->query($sql) === TRUE) {
    $a=explode(",",$work);
    for($x=0;$x<count($a);$x++)
    {
      $sql="Insert into prop_work(wid,rid) values('$a[$x]','$rid')";
      $conn->query($sql);
    }

    $_SESSION['rid']="";
  $_SESSION['addr']="";
  $_SESSION['tot']="";
  $_SESSION['carp']="";
  $_SESSION['desr']="";
  $_SESSION['cost']="";
  $_SESSION['wor']="";
  $_SESSION["prop"]=1;
  $_SESSION["start"]=1;
  header("Location:comp.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$sql="Select * from property";
$result=$conn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
  {
    $b=$row["rid"];
    if(isset($_POST["$b"]))
    {
      $sq="Delete from property where rid='$b'";
      if ($conn->query($sq) === TRUE)
      {
        $_SESSION["del"]=1;
        header("Location:comp.php");
      }
      else {
            echo "Error: " . $sq . "<br>" . $conn->error;
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
 div.img{
background-image: url('images/img1/jpg');
background-size: cover;
background-repeat: no-repeat;
height: 700px;
font-family: 'Numans', sans-serif;
}
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  color: black;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #003300;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  right: 0px;
  height: 860px;
  position: relative;
  border-radius: 15px;
   background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);
  padding: 40px;
  width: 800px;
  color: white;
  
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
  font-size: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
    float: right;
  }
}

.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 30%;
    height:300px;
    margin: auto;
    background-color:red;

  }
div.static {
   background-image: url('https://c8.alamy.com/comp/MB9EJA/real-estate-key-family-home-symbol-and-house-security-concept-as-a-3d-illustration-on-a-white-background-MB9EJA.jpg');
  background-color: #E8E8E8;
  background-repeat: no-repeat;
background-size: cover;

  background-color: #E8E8E8;
  left: 160px;
  width: 1220px;
  height: 900px;
  position: relative;
  border: 0px solid grey;
  color:#FF0000;
  padding: 40px;
  border-radius: 30px;
}
div.static1 {
  background-color: #00FF00;
  margin-left: 7%;
  left: 160px;
  width: 1000px;
  height: 250px;
  position: relative;
  border: 0px solid grey;
  color:#FF0000;
  padding: 5px;
  border-radius: 30px;
}
div.spacing {
  background-color: #FFFFFF;
 
  width: 1400px;
  height: 20px;
  position: static;
  border: 1px solid  #FFFFFF;
}
div.spacing1 {
  background-color: #FFFFFF;
 
  width: 1400px;
  height: 120px;
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
  background: #003300 ;
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
#last1{
border-bottom-width: 2px;
border-bottom-style: solid;
border-color: #D3D3D3 ;
padding-bottom: 6px;
bottom:100px;
margin-left:5px;
}
#last2{
border-bottom-width: 2px;
border-bottom-style: solid;
border-color: #D3D3D3 ;
padding-bottom: 60px;
bottom:100px;
margin-left:5px;
}
.button {
  bottom:0px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

.carousel-inner .carousel-item-right.active,
.carousel-inner .carousel-item-next {
  transform: translateX(25%);
}

.carousel-inner .carousel-item-left.active, 
.carousel-inner .carousel-item-prev {
  transform: translateX(-25%);
}
  
.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
  
}
.btn {
  right:40px;
  border: none;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
}

On mouse-over 
.btn:hover {background: #eee;}

.success {color: green;}
.info {color: dodgerblue;}
.warning {color: orange;}
.danger {color: red;}
.default {color: black;
}
div#n2-ss-15 .n2-ss-slide{
  outline: 10px solid white;
}
div#n2-ss-15 .n2-ss-slider-pane-single{
  overflow-x: visible!important;
}
 
div.dropdown-menu{
  z-index: 5;
}
.conten{
  float:left;
  width:40%;
  margin-left: 5%;
  margin-top: 1%;
  font-size: 17px;
  color: #800080;
}
.imag{
  float: left;
  width:50%;
  margin-left: 1%;
  margin-top: 1%;
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
<body
<?php
  if($_SESSION["start"]==1)
  {
?>
  onload="onload()";
<?php }?>>
   <ul>
     
<li style="float:center"><a href=""><h1><font color="  #ffffff"><font face="Montserrat|Open+Sans">VM Associates</h1></a></li>

   <li style="float:right"><a href="contactus.php"><h2><font color=" #ffffff">Contact Us</h2></a></li>
    
    <li style="float:right"><a class="active" href="history.php"><h2><font color=" #ffffff">Records</h2></a></li>
      <li style="float:right"><a href="comp.php"><h2><font color="  #ffffff">Property</h2></a></li>
      <li style="float:right"><a href="worker.php"><h2><font color=" #ffffff">Worker</h2></a></li>
      <li style="float:right"><a href="client-agent.php"><font color="  #ffffff"><h2>Client-Agent</h2></a></li>
   <li style="float:right"><a class="active" href="home.php"><h2><font color=" #ffffff">Home</h2></a></li>



   <h3 id="last"></h3>
</ul>
<div class="spacing">
</div>
<form class="example" method="post" action="" style="margin:auto;max-width:600px">
  <input type="text" name="search" placeholder="Search for Houses,Flats and More" name="search2">
  <button type="submit" name="subsearch"><i class="fa fa-search"></i></button>
</form>
<div class="spacing">
</div>
<center><button type="button" class="btn btn-primary" onclick="myFunction()">Add Property</button>
</center>
  <div class="static" id="opt">

  
<div class="container">
  <form method="post" action="" enctype="multipart/form-data">
    <center><h1>Property Registration </h1></center><br><br>
       <h3 id="last1"></h3><br>

    <div class="row">
      <div class="col-25">
        <label for="id"><h3>Registration ID :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="rid" placeholder="Registration Id" value=<?php echo $rid ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Address :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="addrs" name="addr" placeholder="Property address" value=<?php echo $addr ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Total Area</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="tot" name="tot" placeholder="Property Total Area In sq meter" value=<?php echo $tot ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Carpet Area</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="carp" name="carp" placeholder="Property Carpet Area In sq meter" value=<?php echo $carp ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Property Description</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="des" name="desr" placeholder="Eg:2-Bhk,3 Bathrooms,Balcony" value=<?php echo $desr ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Worker's Details</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="des" name="work" placeholder="Worker Id E.g:56483,76513" value=<?php echo $work ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Cost</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="cos" name="cost" placeholder="Price in Crores E.g:1.25" value=<?php echo $cost ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="types"><h3>Property Type :</h3></label>
      </div>
      <div class="col-75">
        <select id="types" name="type">
          <option value="Residential">Residential</option>
          <option value="Commercial">Commercial</option>
          
        </select>
      </div>
    </div>
    <div class="col-25">
        <label for="types"><h3>Photos(Max 3 allowed)</h3></label>
      </div>
    <div class="col-25">
    <br><input type="file" name="image" style="font-size: 15px;"></div>
    <div class="col-25">
	<br><input type="submit" name="upload" style="font-size: 10px; background-color: black">
	</div>
	<br>
	<br>
	<br>
  
    <div class="col-75">
    	<?php
        $sql="Select * from image where rid='$rid'";
        $result=$conn->query($sql);
            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
        ?>
        <img  name="face" style="height: 100px; width:120px;" src="data:image/jpg;base64,<?php echo base64_encode($row["img"]);?>"/>
      <?php
      }
    }
      ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
    	<center>
      <input type="submit" style="font-size: 15px" name="reg_prop" value="Register">
    </center>
    </div>
  </form>
</div>

  </div>
  <br><br>
  <form method="post">
  <?php
  if($_SESSION["start"]==1)
  {
  if(isset($_POST["subsearch"]) && isset($_POST["search"]))
      {
        $b=$_POST["search"];
        $sql="Select * from property where rid like '%$b%' or addr like '%$b%' or tot like '%$b%' or carp like '%$b%' or type like '%$b%' or desr like '%$b%' or cost like '%$b%' or work like '%$b%'";
      }
      else
      {
        $sql="Select * from property";
      }
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
  {
  ?><br><br>
  <div class="static1">
    <div class="conten">
      <h1 style="color:red"><b><u>Registeration ID: <?php echo $row["rid"];?></u></b></h1>
      <b>Address: <?php echo $row["addr"];?><br>
      Total Area: <?php echo $row["tot"]." sq meter ";?><br>
      Carpet Area: <?php echo $row["carp"]." sq meter ";;?><br>
      Property Type: <?php echo $row["type"];?><br>
      Description: <?php echo $row["desr"];?><br>
      Workers: <?php 
      $a=$row["rid"];
      $w="Select * from prop_work where rid='$a'";
      $res=$conn->query($w);
      $wo=array();
      if($res->num_rows>0){
      while ($r=$res->fetch_assoc()) {
        array_push($wo, $r["wid"]);
      }}
      echo implode(",", $wo);
      ?><br></b>
      <h2 style="color:#0000FF"><b>Price: <?php echo $row["cost"]." Crores";?></b></h2><br>
    </div>
    <div class="imag">
      <?php
        $sq="Select img from image where rid='$a'";
        $resul=$conn->query($sq);
        if($resul->num_rows>0)
        {
          while($ro=$resul->fetch_assoc())
        {
      ?>
      <img  name="face" style="height: 180px; width:160px;" src="data:image/jpg;base64,<?php echo base64_encode($ro["img"]);?>"/>
      <?php
    }
  }
  echo '<input type="submit" style="font-size: 15px;background-color:red" value="Delete" name='.$a.' >';
  ?>
    </div>
</div>
<?php
}
}
}
?>
</form>
</body>
</html>