<?php session_start(); 


if ($_SESSION['emailid']==NULL) {

echo "<script>

window.open('index.php','_self');

</script>";
}

 ?>

<?php
  $con =mysqli_connect("localhost","root","","watchstoreproject");

$uname = $_SESSION['emailid'];
$resultsss=mysqli_query($con , "SELECT * FROM users_register WHERE emailid ='$uname'");
  $row= mysqli_fetch_array($resultsss);


 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home</title>
  
 <style type="text/css">  

 ul#menu li {
  display:inline;
}
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
  margin-left: 160px;
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
    font-size: 15px;

}
.full{
  width: 100%;
  

}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
margin-top: 5px;}

/* Slideshow container */
.slideshow-container {
  max-width: 95%;
  position: relative;
  margin: auto;
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

<!-- <h4>Welcome. <font color="red"> <?php echo $_SESSION['user_name']; ?></font> </h4> -->

  <a href="addtocart.php" style="background: blue;"><img src="addwhite.png" style="height: 25px; width: 25px;"></a>
  <a href="profile.php">Profile</a>
  <a href="watches.php">Wateches</a>
  <a class="active" href="home.php">Home</a>
  <!-- <?php echo "<p style='color:white;align:center;'>Welcome $row[0]</p>"; ?> -->


  <center></center>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
 <!--  <div class="numbertext">1 / 3</div>
  <img src="img_nature_wide.jpg" style="width:100%"> -->



<div class="numbertext">1 / 6</div>
  <img src="admin/ads/010.jpg" style="width:100%" height="270px">
  <div class="text">Caption Text</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="admin/ads/2.jpg" style="width:100%" height="270px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="admin/ads/3.jpg" style="width:100%" height="270px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="admin/ads/4.jpg" style="width:100%" height="270px">
  <div class="text">Caption Text</div>
</div>



<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="admin/ads/1.jpg" style="width:100%" height="270px">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="admin/ads/3.jpg" style="width:100%" height="270px">
  <div class="text">Caption Text</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 

</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



<table align="center"   >
  <tr>
    <td style="padding-left:70px; padding-right: 70px;"><a href="menswatch.php"><img src="b1.jpg" height="250px" width="200px"></a></td>
    <td style="padding-left:70px; padding-right: 70px;"><a href="womenswatch.php"><img src="g1.jpg" height="250px" width="200px"></a></td>
    <td style="padding-left:70px; padding-right: 70px;"><a href="wallclock.php"><img src="w1.jpg" height="250px" width="200px"></a></td>
    <td style="padding-left:70px; padding-right: 70px;"><a href="smartwatch.php"><img src="s1.jpg" height="250px" width="200px"></a></td>

  </tr>
  <tr>
    <td align="center"><a style="color:black ; font-size: 30px;" href="menswatch.php"><button>Mens</button></a></td>
    <td align="center"> <a style="color:black ; font-size: 30px;" href="womenswatch.php"><button>Womens</button></a></td>
    <td align="center"><a style="color:black ; font-size: 30px;" href="wallclock.php"><button>Wall Clock</button></a></td>
    <td align="center"><a style="color:black ; font-size: 30px;" href="smartwatch.php"><button>Smart Watch</button></a></td>

  </tr>
</table>


<h1 align="center" style="margin-top: 70px; font-size: 50px;" >Watches</h1>

 
  <?php
  
  
   $con=mysqli_connect("localhost","root","","watchstoreproject");
  
  $add = "select * from addproducts";
  $shirts = mysqli_query($con,$add);

  echo "<center><ul id='menu'>";
  
  while($row = mysqli_fetch_array($shirts))
  {
    echo "
      <div class='full'>

      <div class='pro'>
      <img src='admin/image/$row[5]'>
      <div class='pre'>
      <li>
         
          $row[0] <br>


         Rs.$row[4]
<br/>
        <a href='fulldetails.php?id=$row[5]' style = 'color:black; font-size:20px;'>Details</a><br/>
        <a href='addtocart.php?id=$row[3]'><button>Add To Cart</button></a>

</li>
        

        
      </div>  


        
      </div>
      </div>
    
    ";

  }
  echo "</ul></center>";

  ?>
  


</body>

</html>