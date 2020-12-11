<?php
session_start();
require_once "config.php";
if(isset($_SESSION['work']) && $_SESSION['work']>0)
{
  echo "<script>alert('Worker Details has been registered successfully')</script>";

$_SESSION['work']=0;
}
if(isset($_SESSION['del']) && $_SESSION['del']>0)
{
  echo "<script>alert('Worker Details has been deleted successfully')</script>";

$_SESSION['del']=0;
}
  $wid="";
  $addr="";
  $name="";
  $cont="";
  $sal="";
if(isset($_FILES['image']) && isset($_POST['upload'])){
    $wid=$_POST["wid"];
    $addr=$_POST["addr"];
    $name=$_POST["name"];
    $cont=$_POST["cont"];
    $sal=$_POST["sal"];
    $type=$_POST["type"];
    $file_tmp_name =$_FILES['image']['tmp_name'];
    $str = addslashes(file_get_contents($file_tmp_name));
    $sql = "INSERT INTO worker(wid,name,cont,addr,type,img,sal) 
                VALUES('$wid','$name','$cont','$addr','$type','$str','$sal')";
            if ($conn->query($sql) === TRUE) {
              $_SESSION["wid"]=$wid;
              $_SESSION["start"]=0;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
if(isset($_SESSION["wid"]))
{
  $wid=$_SESSION["wid"];
  $sql="Select * from worker where wid='$wid'";
  $result=$conn->query($sql);
            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
                $addr=$row["addr"];
                $name=$row["name"];
                $cont=$row["cont"];
              }
            }
}
if(isset($_POST["reg_work"]))
{
  $wid=$_POST["wid"];
  $addr=$_POST["addr"];
  $name=$_POST["name"];
  $cont=$_POST["cont"];
  $sal=$_POST["sal"];
  $sql="Update worker set addr='$addr',name='$name',cont='$cont',sal='$sal' where wid='$wid'";
  if ($conn->query($sql) === TRUE) {
    $_SESSION["wid"]="";
    $_SESSION["work"]=1;
    $_SESSION["start"]=1;
    header("Location:worker.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
}
$sql="Select * from worker";
$result=$conn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
  {
    $b=$row["wid"];
    if(isset($_POST["$b"]))
    {
      $sq="Delete from worker where wid='$b'";
      if ($conn->query($sq) === TRUE)
      {
        $_SESSION["del"]=1;
        header("Location:worker.php");
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
background-image: url('images/img1.jpg');
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
  height: 800px;
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
   background-image: url('images/img2.jpg');
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
  background-color: #66ffff;
  margin-left: 15%;
  left: 160px;
  width: 800px;
  height: 220px;
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
  width:60%;
  margin-left: 5%;
  margin-top: 1%;
  font-size: 17px;
  color: black;
}
.imag{
  float: left;
  width:30%;
  margin-left: 5%;
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
  <input type="text" name="search" placeholder="Search for Workers" name="search2">
  <button type="submit" name="subsearch"><i class="fa fa-search"></i></button>
</form>
<div class="spacing">
</div>
<center><button type="button" class="btn btn-primary" onclick="myFunction()">Add Worker</button>
</center>
  <div class="static"  id="opt">

  
<div class="container">
  <form method="post" action="" enctype="multipart/form-data">
    <center><h1>Register Worker </h1></center><br><br>
       <h3 id="last1"></h3><br>

    <div class="row">
      <div class="col-25">
        <label for="id"><h3>Worker ID :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="wid" placeholder="Worker Id" value=<?php echo $wid; ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="nme"><h3>Name :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="nme" name="name" placeholder="Worker Name" value=<?php echo $name; ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pn"><h3>Contact :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="pn" name="cont" placeholder="Worker Contact" value=<?php echo $cont; ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Address :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="addrs" name="addr" placeholder="Worker Address" value=<?php echo $addr; ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Salary :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="addrs" name="sal" placeholder="25,000" value=<?php echo $sal; ?>>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="types"><h3>Worker Type :</h3></label>
      </div>
      <div class="col-75">
        <select id="types" name="type">
          <option value="Plumber">Plumber</option>
          <option value="Carpenter">Carpenter</option>
          <option value="Electrician">Electrician</option>
          <option value="Painter">Painter</option>
          <option value="Labourer">Labourer</option>
        </select>
      </div>
    </div>
    <div class="col-25">
    <input type="file" name="image" style="font-size: 15px;"></div>
    <div class="col-25">
  <input type="submit" name="upload" style="font-size: 10px; background-color: black">
  </div>
  <div class="col-75">
      <?php
        $sql="Select * from worker where wid='$wid'";
        $result=$conn->query($sql);
            if($result->num_rows>0)
            {
              while($row=$result->fetch_assoc())
              {
        ?>
        <img  name="face" style="height: 150px; width:150px;" src="data:image/jpg;base64,<?php echo base64_encode($row["img"]);?>"/>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <center><div class="row">
      <input type="submit" style="font-size: 15px" name="reg_work" value="Register" align="right">
    </div></center>
    <br>
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
        $sql="Select * from worker where wid like '%$b%' or addr like '%$b%' or name like '%$b%' or cont like '%$b%' or type like '%$b%' or sal like '%$b%'";
      }
      else
      {
        $sql="Select * from worker";
      }
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
  {
  ?>
  <div class="static1">
    <div class="conten">
      <h1 style="color:red"><b><u>Worker ID: <?php echo $row["wid"];?></u></b></h1>
      <b>Name: <?php echo $row["name"];?><br>
      Address: <?php echo $row["addr"];?><br>
      Contact: <?php echo $row["cont"];?><br>
      Worker Type: <?php echo $row["type"];?><br>
      <h2 style="color:#009900"><b>Salary: <?php echo $row["sal"];?></b></h2><br>
    </div>
    <div class="imag">

      <img  name="face" style="height: 150px; width:160px;" src="data:image/jpg;base64,<?php echo base64_encode($row["img"]);?>"/>
      <?php
  echo '<input type="submit" style="font-size: 15px;background-color:red; margin-right:20%" value="Delete" name='.$row["wid"].' >';
  ?>
    </div>
</div>
<br><br>
<?php
}
}
}
?>
</form>
</body>
</html>