<?php
// Start Session
session_start();

require_once "config.php";
if(!isset($_SESSION['count']))
{
  $_SESSION['count']=0;
}
// Get data from the users
if(isset($_SESSION['client']) && $_SESSION['count']>0)
{
  $a=$_SESSION['client'];
  echo "<script>alert('Congratulation $a you have successfully registerd pl login to see all the new properties ')</script>";

$_SESSION['count']=0;
}
if (isset($_SESSION["forg"]) && $_SESSION["forg"]==2)
{
  echo "<script>alert('You are password updated succesfully');</script>";
  $_SESSION["forg"]=0;
}
if(isset($_SESSION['agent_client']) && $_SESSION['agent_client']==1){
$aid=$_SESSION['aid'];
$pan=$_SESSION['pan'];
      $sql="INSERT INTO agent_client (aid,pan)VALUES ('$aid','$pan')";
      if($conn->query($sql) ===TRUE){
        $_SESSION['aid']="";
        $_SESSION['pan']="";
      }
      else{
        echo "Error: " . $sql1 . "<br>" . $conn->error;
      }
      $_SESSION['agent_client']=0;
}
if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        if(isset($_POST["pan"]) && isset($_POST["name"]))
        {

$email = $_POST["pan"];
$password1 = $_POST["name"];



// Write query (should be written in MySQL)
// Below query checks for credentials in the database
$sql = "SELECT * FROM client WHERE pan='$email' AND name='$password1'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// Print result for debugging
print_r($row);
// Set the session variables
if(mysqli_num_rows($result) == 1){
if (is_array($row)) {
 $_SESSION["id"] = $row['pan'];
}
                
// Redirect to dashboard
 header("Location:client.php");
}
else
{
  echo '<script>alert("Pl Enter correct Login Details")</script>';
}
}}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Numans');

div.img{
background-image: url('images/img6.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 5000px;
align-content: center;
}

.card{
height:370px;
margin-top: 100px;
margin-bottom: 300px;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
font-size: 14px;

}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h1{
color: white;
}

.social_icon{
position: absolute;
right: 200px;
top: 230px;
color: #003300
}

.input-group-prepend span{
  left: 5px;
width: 40px;
height: 40px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus h1{
  height: 400px;
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
  left: 50px;
width: 50px;
height: 20px;
margin-left: 1500px;
margin-right: 500px;
}

.login_btn{
color: white;
background-color: #003300;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}


div.static {
  background-color: #E8E8E8;
  left: 60px;
  width: 1220px;
  height: 950px;
  position: relative;
  border: 0px solid grey;
  color:#FF0000;
  padding: 5px;
  border-radius: 30px;
}
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


li a:hover {
  background-color: #002200;
}




body {
  font-family: Calibri;
}

* {
  box-sizing: border-box;
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


.btn {
  right:40px;
  border: none;
  background-color: inherit;
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
</style>
  <title>Login Page</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <ul>
     
<li style="float:center"><a href=""><h1><font color="  #ffffff"><font face="Montserrat|Open+Sans">VM Associates</h1></a></li>

   <li style="float:right"><a href="contactus.php"><h2><font color=" #ffffff">Contact Us</h2></a></li>
      <li style="float:right"><a href="client_login.php"><h3><font color="  #ffffff">Client</h3></a></li>
      <li style="float:right"><a href="agent_login.php"><h3><font color=" #ffffff">Agent</h3></a></li>
      <li style="float:right"><a href="comp_login.php"><font color="  #ffffff"><h3>Company</h3></a></li>
   <li style="float:right"><a class="active" href="home.php"><h3><font color=" #ffffff">Home</h3></a></li>
   
</ul>

<div class="img">

<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Client Sign In</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="pan" class="form-control" placeholder="PAN" style="height: 40px"><br>
            
          </div><br>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="name" class="form-control" placeholder="Name" style="height: 40px">
          </div>
          <br>
          <div class="form-group">
            <input type="submit" value="Login" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Don't have an account?<a href="client_register.php">Sign Up</a>
        </div>
        <div class="d-flex justify-content-center">
          <?php $_SESSION["clent"]=1;?>
          <a href="forget.php">Forgot your password?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php

?>