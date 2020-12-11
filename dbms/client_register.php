<?php
// Start Session
session_start();
if (isset($_POST['pan']) && isset($_POST['name']))
 {require_once "config.php";
  // receive all input values from the form
  $pan = $_POST['pan'];
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);  
  $add = mysqli_real_escape_string($conn, $_POST['addr']);  
  $type = mysqli_real_escape_string($conn, $_POST['type']);
  $aid = mysqli_real_escape_string($conn,$_POST['aid']);
  if (isset($_POST['reg_user']))
  {
    if(empty($name)||empty($contact)||empty($pan)||empty($add))
  { echo '<script>alert("Pl Enter your all details")</script>';
  }
    $sql1 = "INSERT INTO Client (pan, name, addr, contact, type)VALUES ('$pan','$name','$add','$contact','$type')";
    $sql="";
    if(!empty($aid)){
      $_SESSION['aid']=$aid;
      $_SESSION['pan']=$pan;
      $_SESSION['agent_client']=1;
      }
    if ($conn->query($sql1) === TRUE) {
      $_SESSION['client']=$name;
      $_SESSION['count']=1;
      header('location: client_login.php');
  }
  else {
        echo "Error: " . $sql1 . "<br>" . $conn->error;
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
  height: 625px;
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
border-bottom-width: 0.5px;
border-bottom-style: solid;
border-color: #D3D3D3 ;
padding-bottom: 0px;
bottom:150px;
margin-left:0px;
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
    <center><h1>Register as Client </h1></center><br><br>
       <h3 id="last1"></h3><br>

    <div class="row">
      <div class="col-25">
        <label for="id"><h3>Agent ID :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="id" name="aid" placeholder="Your agent's id..(optional)">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="nme"><h3>Name :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="nme" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="pn"><h3>PAN :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="pn" name="pan" placeholder="Your pan..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="addrs"><h3>Address :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="addrs" name="addr" placeholder="Your address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="acontact"><h3>Contact :</h3></label>
      </div>
      <div class="col-75">
        <input type="text" id="acontact" name="contact" placeholder="Your contact no..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="types"><h3>Client Type :</h3></label>
      </div>
      <div class="col-75">
        <select id="types" name="type">
          <option value="Residential">Residential</option>
          <option value="Commercial">Commercial</option>
          
        </select>
      </div>
    </div>
    <br>
    <br>
    <center><div class="row">
      <input type="submit" style="font-size: 15px" name="reg_user" value="Register" align="right">
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


</body>
</html>
<?php

?>