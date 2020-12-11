<?php
session_start();
require_once "config.php";
if(isset($_SESSION['del']) && $_SESSION['del']==1)
{
  echo "<script>alert('Agent Details has been deleted successfully')</script>";

$_SESSION['del']=0;
}
if(isset($_SESSION['del']) && $_SESSION['del']==2)
{
  echo "<script>alert('Client Details has been deleted successfully')</script>";

$_SESSION['del']=0;
}
$sql="Select * from agent";
		$result=$conn->query($sql);
		  if($result->num_rows>0)
		  {
		  	while($row=$result->fetch_assoc())
  			{
  				$a=$row["aid"];
  				if(isset($_POST["$a"]))
  				{
  					$sq="Delete from agent where aid='$a'";
            $s="Delete c.* from client c inner join agent_client ca on c.pan=ca.pan where ca.aid='$a'";
  					if ($conn->query($s) === TRUE && $conn->query($sq) === TRUE)
				      {
				        $_SESSION["del"]=1;
				        header("Location:client-agent.php");
				      }
				      else {
				            echo "Error: " . $sq . "<br>" . $conn->error;
				        }
  				}
  			}
  		  }
 $sql="Select * from client";
		$result=$conn->query($sql);
		  if($result->num_rows>0)
		  {
		  	while($row=$result->fetch_assoc())
  			{
  				$a=$row["pan"];
  				if(isset($_POST["$a"]))
  				{
  					$sq="Delete from client where pan='$a'";
  					if ($conn->query($sq) === TRUE)
				      {
				        $_SESSION["del"]=2;
				        header("Location:client-agent.php");
				      }
				      else {
				            echo "Error: " . $sq . "<br>" . $conn->error;
				        }
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
background-size: cover;
background-repeat: no-repeat;
height: 700px;
font-family: 'Numans', sans-serif;
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
table th, table td{
        padding: 3px; /* Apply cell padding */
        text-align: center;
    }
</style>
<body>
	<ul>
     
<li style="float:center"><a href=""><h1><font color="  #ffffff"><font face="Montserrat|Open+Sans">VM Associates</font></h1></a></li>

   <li style="float:right"><a href="contactus.php"><h2><font color=" #ffffff">Contact Us</font></h2></a></li>
      <li style="float:right"><a class="active" href="history.php"><h2><font color=" #ffffff">Records</h2></a></li>
      <li style="float:right"><a href="comp.php"><h2><font color="  #ffffff">Property</h2></a></li>
      <li style="float:right"><a href="worker.php"><h2><font color=" #ffffff">Worker</h2></a></li>
      <li style="float:right"><a href="client-agent.php"><font color="  #ffffff"><h2>Client-Agent</h2></a></li>
   <li style="float:right"><a class="active" href="home.php"><h2><font color=" #ffffff">Home</h2></a></li>

   <h3 id="last"></h3>

</ul>
<br>
<form class="example" method="post" action="" style="margin:auto;max-width:600px">
  <input type="text" name="search" placeholder="Search for Agents and Clients" name="search2">
  <button type="submit" name="subsearch"><i class="fa fa-search"></i></button>
</form>

<br>
<form method="post">
	<table cellpadding="50" cellspacing="50" border="2" align="center" style="color: black;font-size:17px;">
		<tr>
			<th>Agent Id</th>
			<th>Agent Name</th>
			<th>Agent Contact</th>
			<th>Agent Designation</th>
			<th>Agent Experience</th>
			<th>Agent Commision</th>
			<th></th>
			<th>Client Pan</th>
			<th>Client Name</th>
			<th>Client Contact</th>
			<th>Client Address</th>
			<th>Client Type</th>
			<th></th>
		</tr>
		<?php
		if(isset($_POST["subsearch"]) && isset($_POST["search"]))
      	{
        $b=$_POST["search"];
        $sql="Select * from agent where aid like '%$b%' or aname like '%$b%'";
    	}
    	else
    	{
		$sql="Select * from agent";
		}
		$result=$conn->query($sql);
		  if($result->num_rows>0)
		  {
		  	while($row=$result->fetch_assoc())
  			{
  				$a=$row["aid"];
  				if(isset($_POST["subsearch"]) && isset($_POST["search"]))
		      	{
		        $b=$_POST["search"];
		        $sq="Select * from client as c natural join agent_client as ca where ca.aid=$a or c.pan like '%$b%' or c.name like '%$b%'";
		    	}
		    	else
		    	{
  				$sq="Select * from client as c natural join agent_client as ca where ca.aid=$a";
				}
				$resul=$conn->query($sq);
				$b=$resul->num_rows;

		?>
		<tr>
			<?php
			echo '<td rowspan='.$b.'><b>'.$row["aid"].'</td>';
			echo '<td rowspan='.$b.'><b>'.$row["aname"].'</td>';
			echo '<td rowspan='.$b.'><b>'.$row["acontact"].'</td>';
			echo '<td rowspan='.$b.'><b>'.$row["desg"].'</td>';
			echo '<td rowspan='.$b.'><b>'.$row["exp"].'</td>';
			echo '<td rowspan='.$b.'><b>'.$row["comm"].'</td>';
			echo '<td rowspan='.$b.'><b><input type="submit" style="font-size: 15px;background-color:red" value="Delete" name='.$a.' ></td>';			
			if($resul->num_rows>0)
		  	{
		  	while($ro=$resul->fetch_assoc())
  			{
  				$c=$ro["pan"];
  				echo '<td>'.$ro["pan"].'</td>';
  				echo '<td>'.$ro["name"].'</td>';
  				echo '<td>'.$ro["contact"].'</td>';
  				echo '<td>'.$ro["addr"].'</td>';
  				echo '<td>'.$ro["type"].'</td>';
  				echo '<td><input type="submit" style="font-size: 15px;background-color:red" value="Delete" name='.$c.' ></td>';
  				echo '</tr>';
  			}
  		}
			?>
		</tr>
		<?php
	}
}
?>
	</table>
	
</form>
</body>
</html>
