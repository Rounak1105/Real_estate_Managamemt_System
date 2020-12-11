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
div.static {
  background-color: #E8E8E8;
  left: 160px;
  width: 1220px;
  height: 1200px;
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
   <li style="float:right"><a class="active" href="#home"><h2><font color=" #ffffff">Home</h2></a></li>




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

<div>
<div class="container text-left my-3">
    <h1><a href="client_login.php"><font color="  #003300">Featured Projects</h1><br><h3>Exclusive showcase of top Projects</h3>
<div class="container text-right my-3">
    <h4><a href="client_login.php"><font color="  #003300">View More</h4>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                  
                    <img class="d-block col-3 img-fluid" src="https://rei.wlimg.com/prop_images/837124/770387_1.jpg">
                  
            </div>  
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTqnavV0gUFTT81K8R9-z2vnx8xTEmEX7-pd4S5RGSmQxKhRKdU&usqp=CAU">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" href="http://google.com" src="https://is1-2.housingcdn.com/4f2250e8/c7c271c175cab8925188b5e187aaf929/v0/fs/anu_gowsalya_flats-medavakkam-chennai-anu_builders_pvt_ltd.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRIi-062soP0Z3HR_RBc-r0nc2JCmd8LTKKRyPXg-DXKGCnz3tU&usqp=CAU">

                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://q-xx.bstatic.com/images/hotel/max1024x768/162/162182692.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQQan_KkPQRpvW5P1Hz95RRv_WhkgmLyrF1kmjA7CIDt86LD1mI&usqp=CAU">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="css-xvf1rk"></div>
            <h3 id="last1"></h3>
        </div>
    </div>
  
</div>
<div class="container text-left my-3">
    <h1><a href="client_login.php"><font color="  #003300">Featured Colections</h1><br><h3>Handpicked Projects for you</h3>
<div class="container text-right my-3">
    <h4><a href="client_login.php"><font color="  #003300">View More</h4>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel 1" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block col-3 img-fluid" src="https://is1-2.housingcdn.com/afe3f526/72c2a553a4868784bf918956539be27c/v2/large.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-2.housingcdn.com/afe3f526/1264f1fbf64cb1d23dfaa3beb33ff0ef/v2/large.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/afe3f526/5b76eee6ef7c5a2349b28c65c23f2571/v2/large.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-2.housingcdn.com/afe3f526/fd518ec83e674ff6924733faba8d965c/v2/large.png">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/afe3f526/7114b67ecce8e089fa750d76372d4636/v3/large.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/afe3f526/10124f0cff42d4c40775a0a118f477f4/v2/large.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel 1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel 1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <h3 id="last2"></h3>
        </div>
    </div>
    
</div>
<div class="container text-left my-3">
    <h1><a href="client_login.php"><font color="  #003300">Trending Projects</h1><br>
<div class="container text-right my-3">
    <h4><a href="client_login.php"><font color="  #003300">View More</h4>
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel 2" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                  
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/4f2250e8/c9402b7374f090c3def2b9707e58b6a0/v0/medium/green_hive_plus-fursungi-pune-ram_india_group.png">
                  
            </div>  
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/4f2250e8/9549306ae6814aaa4e06dcb202b7c04e/v0/medium/wisdom_park-balewadi-pune-chandrarang_developers__builders_pvt_ltd__sai_shraddha_associates.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-2.housingcdn.com/4f2250e8/611f4972455c28f4ffeae2e81bd09326/v0/medium/27th_avenue-bavdhan-pune-blue_ventures.jpeg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/4f2250e8/0699187529c96cc96b76c8520d68c0ff/v0/medium/venkatesh_navita-ambegaon_budruk-pune-shree_venkatesh_buildcon_pvt_ltd.jpeg">

                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-3.housingcdn.com/4f2250e8/dcb7a72c3cbbb6375b12c48707a71206/v0/medium/silver_gracia-ravet-pune-rohan_construction.jpg">
                </div>
                <div class="carousel-item">
                    <img class="d-block col-3 img-fluid" src="https://is1-2.housingcdn.com/4f2250e8/5a7763578b0ceb38bbc5dd470eb0966a/v0/medium/one_shriaunsh-tathawade_chinchwad-pune-shriaunsh_erectors_pvt_ltd.jpeg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel 2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel 2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <h3 id="last1"></h3>
        </div>
    </div>
  
</div>
<script type="text/javascript">
  $('#recipeCarousel').carousel({
  interval: 10000
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>
</div>
</body>
</html>