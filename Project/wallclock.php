<?php session_start(); 


if ($_SESSION['emailid']==NULL) {

echo "<script>

window.open('index.php','_self');

</script>";
}

 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  
 <style type="text/css">  
.topnav {
  background-color: #09111b;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  width: 7%;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: lightyellow;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: yellow;
  color: black;
}


.pro
{
  
  height:150px;
  width:150px;
  border:1px solid;
  text-align:center;
  float:left;
  margin-left: 180px;
  margin-top:30px;
  margin-bottom: 180px;


   
}
.pro img
{
  border-color: linear-gradient(to right,#333399,#ff00cc);
  width:100%;
  height:100%;
  padding-top: 0px;

  
}
.pre
{
  margin-top: 5px;
  padding-top: 10px;
    font-size: 15px;

}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
margin-top: 5px;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
  padding-left: 50px;
  padding-right: 50px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

 button {
           
  background-color: black;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 15px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
  
  }
  a{
    color: white;
  }
</style>    
</head>
<body bgcolor="#f2f2f2">


<div class="topnav">
<b style="font-size: 40px; color: white; padding-top:10px; padding-left: 10px;">Watch Store</b>
  
  <a class="active" href="addtocart.php" style="background: blue;"><img src="addwhite.png" style="height: 25px; width: 25px;"></a>
  
  <a href="profile.php">Profile</a>
  <a class="active" href="watches.php">Wateches</a>
  <a  href="home.php">Home</a>
</div>

<center><h1>Wall Clock</h1></center>


  <?php
  
  
   $con=mysqli_connect("localhost","root","","watchstoreproject");
  
  $add = "select * from addproducts";
  $shirts = mysqli_query($con,$add);
  
  while($row = mysqli_fetch_array($shirts))
  {
    if($row[6] == 'WallClock'){
    echo "

      
      <div class='pro'>
      <img src='admin/image/$row[5]'>
      <div class='pre'>
         
          $row[0] <br><br>
          $row[3]<br><br>


         Rs.$row[4]

         
<br/>
        <a href='fulldetails.php?id=$row[5]' style = 'color:black; font-size:20px;'>Details</a><br/>
        <a href='addtocart.php?id=$row[3]'><button>Add To Cart</button></a>


        

        
      </div>  


        
      </div>

    
    ";
}
  }

  ?>
  


</body>

</html>