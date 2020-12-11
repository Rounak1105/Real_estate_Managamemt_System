<?php
session_start();
if (isset($_POST['aid']) && isset($_POST['aname']))
 {require_once "config.php";
  // receive all input values from the form
  $aid = $_POST['aid'];
  $aname = mysqli_real_escape_string($conn, $_POST['aname']);
  $acontact = mysqli_real_escape_string($conn, $_POST['acontact']);  
  $exp = $_POST['exp'];
  $desg = mysqli_real_escape_string($conn, $_POST['desg']);
  if (isset($_POST['reg_user']))
  {
    if(empty($aid)||empty($aname)||empty($acontact)||empty($exp)||empty($desg))
  { echo '<script>alert("Pl Enter your all details")</script>';
  }
  if($exp>=1 && $desg=='junior')
  {
  $sql = "INSERT INTO Agent (aid, aname, acontact, desg, exp,comm)VALUES ('$aid','$aname','$acontact','$desg','$exp','1.0')";
  $_SESSION['comm']=1.0;
  }
  if($exp>=2 && $desg=='junior')
  {
  $sql = "INSERT INTO Agent (aid, aname, acontact, desg, exp,comm)VALUES ('$aid','$aname','$acontact','$desg','$exp','1.5')";
  $_SESSION['comm']=1.5;
  }
  if($exp>=2 && $desg=='senior')
  {
  $sql = "INSERT INTO Agent (aid, aname, acontact, desg, exp,comm)VALUES ('$aid','$aname','$acontact','$desg','$exp','2.0')";
  $_SESSION['comm']=2.0;
  }
  else
  {
    $sql = "INSERT INTO Agent (aid, aname, acontact, desg, exp,comm)VALUES ('$aid','$aname','$acontact','$desg','$exp','0.5')";
    $_SESSION['comm']=0.5;
  }

if ($conn->query($sql) === TRUE) {
    header('location: agent_login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="styles.css">

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
<style>
  div.img{
background-image: url('https://lh3.googleusercontent.com/proxy/w8ZYvHNzXuGtniy-BouRnM3gx64WxL56SIuqZ6uKSQvDBXscj7vz_MxO9V-a3B0iPcIii__QE4SkW-oc662TWKLZOdEWsnIQMTLpTBF11NCx_EHS2PaAvWVCXhPC-JK7D5nP0Wj0Y5Mdgg');
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
  height: 550px;
  position: relative;
  border-radius: 15px;
   background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4);
  padding: 40px;
  width: 600px;
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

div.static1 {
  background-color: #FFFFFF;
 
  width: 1400px;
  height: 20px;
  position: static;
  border: 1px solid  #FFFFFF;
}
div.space{
  height: 40px;
}
div.lefti{
  left:3000px;
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


li a:hover {
  background-color: #002200;
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
padding-bottom: 60px;
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
</style>

<body>
<ul>
     
<li style="float:center"><a href=""><h1><font color="  #ffffff"><font face="Montserrat|Open+Sans">VM Associates</h1></a></li>

   <li style="float:right"><a href="contactus.php"><h2><font color=" #ffffff">Contact Us</h2></a></li>
      <li style="float:right"><a href="client_login.php"><h3><font color="  #ffffff">Client</h3></a></li>
      <li style="float:right"><a href="agent_login.php"><h3><font color=" #ffffff">Agent</h3></a></li>
      <li style="float:right"><a href="comp_login.php"><font color="  #ffffff"><h3>Company</h3></a></li>
   <li style="float:right"><a class="active" href="home.php"><h3><font color=" #ffffff">Home</h3></a></li>

   <h3 id="last"></h3>

</ul>

<div class="img">

<div class="space">
</div>


<div class="container">
  <form method="post" action="">
    <center><h1>Register as Agent </h1></center><br><br>
    <div class="row">
      <div class="col-25">
        <label for="aid"><h3>Agent ID :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="aid" name="aid" placeholder="Your agent id..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="aname"><h3>Name :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="aname" name="aname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="acontact"><h3>Contact :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="acontact" name="acontact" placeholder="Your contact no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="aexp"><h3>Experience :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="aexp" name="exp" placeholder="Your experience..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="desg"><h3>Designation :</h3></label>
      </div>
      <div class="col-75">
        <select id="desg" name="desg">
          <option value="junior">Junior</option>
          <option value="senior">Senior</option>
          
        </select>
      </div>
    </div>
    <br>
    <br>
    <center><div class="row">
      <input type="submit" style="font-size: 15px" name="reg_user" value="Register" style="fo">
    </div></center>
    <br>
    <div class="row">
      <div class="lefti">
    <p>
            <h3>  Already a member? <a href="agent_login.php">Sign in</a></h3>

    </div>
    </p>
  </div>
  </form>
</div>

</body>
</html>
<?php

?>