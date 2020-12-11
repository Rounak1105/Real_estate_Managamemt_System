<?php
 // Start Session
 session_start();
 
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
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 30%;
    height:300px;
    margin: auto;
    background-color:red;

  }
  /*div.img{
background-image: url('https://previews.123rf.com/images/stockphotoatinat/stockphotoatinat1702/stockphotoatinat170200038/72607538-wood-table-paper-background-template-stationery-book-note-notebook-wooden-pencil-notepad-photo-busin.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
  border-radius: 30px;

}*/
div.static {
  background-image: url('images/img4.jpg');
  background-color: #E8E8E8;
  background-repeat: no-repeat;
background-size: cover;

  left: 380px;
  width: 720px;
  height: 600px;
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

<body>
   <ul>
     
<li style="float:center"><a href=""><h1><font color="  #ffffff"><font face="Montserrat|Open+Sans">VM Associates</h1></a></li>

   <li style="float:right"><a href="contactus.php"><h2><font color=" #ffffff">Contact Us</h2></a></li>
    
      <li style="float:right"><a href="client_login.php"><h2><font color="  #ffffff">Client</h2></a></li>
      <li style="float:right"><a href="agent_login.php"><h2><font color=" #ffffff">Agent</h2></a></li>
      <li style="float:right"><a href="comp_login.php"><font color="  #ffffff"><h2>Company</h2></a></li>
   <li style="float:right"><a class="active" href="home.php"><h2><font color=" #ffffff">Home</h2></a></li>




   <h3 id="last"></h3>
</ul>
<div class="static1">
</div>
<form class="example" action="/action_page.php" style="margin:auto;max-width:600px">
  <input type="text" placeholder="Search for Houses,Flats and More" name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<div class="static1">
</div>
  <div class="static">
<div class="img">
<br><br><br>
  <center>
<h1><font color="  black">Contact Us</h1></center><br><br><center>
 <h2><font color="  black"><marquee><a href="#"> Email : vmassociates@gmail.com</marquee></h2></center>
<br><br><center>
  <h1><font color="  black">Our Facebook Handle</h1></center><br><br><center>
 <h2><font color="  black"> <marquee><a href="#">ID : Accountant/VM-Associates-1645562682422494/</a></marquee></h2></center>

  <br><br><center>
  <h1><font color="  black">Headquarter's Address</h1></center><br><br><center>
 <h2><font color="  black"> <marquee><a href="#">Office no. 1, 2 nd Floor, Prasad shopping Center, Opp. Railway Station, Goregaon, Goregaon West, Mumbai, Maharashtra 400062</a></marquee></h2></center>
</div>
</body>
</html>