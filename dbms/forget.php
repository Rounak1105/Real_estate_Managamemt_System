<?php
// Start Session
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        if(isset($_POST["email"]) && isset($_POST["password"]))
        {

$email = $_POST["email"];
$password1 = ($_POST["password"]);


require_once "config.php";
if($_SESSION["agent"]==1)
{
$sql = "UPDATE agent SET aname='$password1' WHERE aid='$email'";
if ($conn->query($sql) === TRUE) {
  
    $_SESSION["forg"]=1;
    header("Location:agent_login.php");
} else {
    echo "Error updating record: " . $conn->error;
}
}
if($_SESSION["clent"]==1)
{
  $sql = "UPDATE client SET name='$password1' WHERE pan='$email'";
if ($conn->query($sql) === TRUE) {
  
    $_SESSION["forg"]=2;
    header("Location:client_login.php");
} else {
    echo "Error updating record: " . $conn->error;
}
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
background-image: url('images/img3.png');


height: 120%;
width: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 5000px;
align-content: center;
}

.card{
height:310px;
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
  <title>Forgot Password</title>
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
        <h3>Forgot Password</h3>
        
      </div>
      <div class="card-body">
        <form method="post">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input name="email" class="form-control" placeholder="AID/PAN" style="height: 40px"><br>
            
          </div><br>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="New Password" style="height: 40px">
          </div>
          <br>
          <div class="form-group">
            <input type="submit" value="Submit" class="btn float-right login_btn">
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
// Get data from the users

?>